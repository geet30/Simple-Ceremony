<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Locations,RequestLocations,LocationFilters,User};
use Illuminate\Http\Request;
use View;
use Redirect;
use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$slug=null){
        try {
            $filters = LocationFilters::all();
            $records = 1;$req_page = 1;
            $locations = Locations::all();
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $data = $allRequest = RequestLocations::paginate($records, ['*'], 'page', $req_page);  
            if($request->ajax()){  
                if($slug == ''){
                    $slug = 'all-requests';
                }
                $viewurl = 'elements.admin.location.'.$slug;       
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }       
            return view('admin.locations.listing',compact('locations','data','filters'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }      
    }
    /**
     * View the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id){
        try {
            $data = RequestLocations::where('id',$id)->first();
            return view('admin.locations.view',compact('data'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id=null)
    {
        try {
            $filters = LocationFilters::all();
            $partners = Locations::partners();
            $data = array();
            if($id){
                $data = RequestLocations::where('id',$id)->first();
            }
            return view('admin.locations.create',compact('data','filters','partners'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
        
    }

    
    /**
     * fetch  the packages.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPackages(Request $request)
    {
        try {
            $getPartnerPackages = Locations::getPartnerPackages($request->id);
            if(!empty($getPartnerPackages)){
                return $this->successResponse($getPartnerPackages,'data found successfully.');
            }
            return response()->json(['status'=>false,"message"=>'something went wrong']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {  
            $request->validate([
                'name' => 'required',
                'price' => 'required',
            ]);         
            return  Locations::addData($request);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => 'Something went wrong.']);
        }
  
    }
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveFilter(Request $request)
    {
        try {
            $input = $request->all();
            $LocationFilters = LocationFilters::where('name',$request->name)->first();
            if($LocationFilters){
                $msg = 'Filter already exists with this name.';
                return response()->json(['status'=>false,"message"=>$msg]);
            }           
            $result = LocationFilters::create($input);
            if($result){
                $msg = 'Filter added successfully.';
                return response()->json(['status'=>true,"message"=>$msg,"data"=>$result]);               
            }
            return response()->json(['status'=>false,"message"=>'Something went wrong.']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
        
       
    }
    /**
     * Update a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateFilter(Request $request){
        try {
            LocationFilters::where('id', $request->input('id'))->update(['name'=>$request->input('name')]);
            $msg = 'Filter updated successfully.';
            return response()->json(['status'=>true,"message"=>$msg]);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }    
    }
    /**
     * Destroy a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyFilter($id){ 
        try {
            $checkifExistInLocation =  Locations::checkifExistInLocation($id);      
            if(count($checkifExistInLocation)==0){
                LocationFilters::destroy($id);
                return redirect()->back()->with(['message'=>'Filter deleted successfully','class'=>'alert-success']);
            }
            return redirect()->back()->with(['message'=>'This filter exist in package','class'=>'alert-danger']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
       
    }
    /**
     * Change Status of the specified resource.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request){
        try {
            $result =   Locations::changeStatus($request);
            if($result){
                return $this->successResponse($result,'Status changed successfully.');
            }
           return response()->json(['status'=>false,"message"=>'something went wrong']);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }           
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function show(Locations $locations)
    {
        return view('admin.locations.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $location = Locations::where('id', $id)->first();
            return view('admin.locations.edit')->with('location', $location);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locations $locations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locations $locations)
    {
        //
    }
}
