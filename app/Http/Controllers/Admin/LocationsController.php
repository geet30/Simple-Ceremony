<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Locations,RequestLocations,LocationImages};
use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$slug=null){
   
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
        
        return view('admin.locations.listing',compact('locations','data'));
    }
    /**
     * View the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id){
        $data = RequestLocations::where('id',$id)->first();
        return view('admin.locations.view',compact('data'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id=null)
    {
       $data = array();
        if($id){
            $data = RequestLocations::where('id',$id)->first();
        }
        return view('admin.locations.create',compact('data'));
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
            // echo "<pre>";print_r($ex->getMessage());die;
            return \Redirect::back()->withErrors(['msg' => 'Something went wrong.']);
         }
  
    }
    /**
     * Change Status of the specified resource.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request){
       
        $input['status'] = $request->status;  
        if($request->status == 1){
            $data['status'] = 'Approved';
            $data['class'] = 'approved';
        }
         
        else if($request->status == 2){
            $data['status'] = 'Rejected';
            $data['class'] = 'rejected';
        }
          
        else if($request->status == 0){
            $data['status'] = 'pending';
            $data['class'] = 'waiting-approval';
        }
        
        $result = RequestLocations::where('id', $request->id)->update($input);
        if($result){
            return $this->successResponse($data,'Status changed successfully.');
        }
        return response()->json(['status'=>false,"message"=>'something went wrong']);
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
        $location = Locations::where('id', $id)->first();
        return view('admin.locations.edit')->with('location', $location);
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
