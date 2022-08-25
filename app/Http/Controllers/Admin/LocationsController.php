<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Locations,RequestLocations,LocationFilters,User,CelebrantLocations};
use Illuminate\Http\Request;

use App\Http\Requests\LocationRequest;
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
    public function index(Request $request, $slug = null)
    {
        try {
            $filters = LocationFilters::all();
            $records = 10;
            $req_page = 1;
            if($request->has('page')){
                $req_page = $request->page; 
            }
            $locations = Locations::all();
            
            $data = $allRequest = RequestLocations::paginate($records, ['*'], 'page', $req_page);  
            if($request->ajax()){  
                if($slug == ''){
                    $slug = 'all-requests';
                }
                $viewurl = 'elements.admin.location.' . $slug;
                return View::make($viewurl, ['req_page' => $req_page, 'data' => $data]);
            }
            return view('admin.locations.listing', compact('locations', 'data', 'filters'));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Search Location
     *
     * @return \Illuminate\Http\Response
     */
    public function searchAdminLocation(Request $request)
    {
        try {
            $data =   Locations::searchAdminLocation($request);
            return View::make('elements.admin.location.search-location', ['locations' => $data]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * View the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        try {
            $data = RequestLocations::where('id', $id)->first();
            return view('admin.locations.view', compact('data'));
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * View the detail of resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail(Request $request,$id){
        try {
            $records = 10;
            $req_page = 1;
            if($request->has('page')){
                $req_page = $request->page; 
            }
              
            $columns = ['name','id','price','address','town','why_this_location','cover_image'];
            $data = Locations::getLocations($id,$columns)->first();
            $celebrants = Locations::celebrants()->get();
            $celebrants_locations = Locations::celebrants($id)->paginate($records, ['*'], 'page', $req_page); 
            if($request->ajax()){  
                $viewurl = 'elements.admin.location.location_celebrants';       
                return View::make($viewurl, ['req_page' => $req_page, 'celebrants_locations' => $celebrants_locations]);
            } 
            // dd($celebrants_locations);
            return view('admin.locations.detail',compact('data','celebrants_locations','celebrants','id'));
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
    public function storeCelebrant(Request $request)
    {
        try {
            $input = $request->all();
            $celebrantLocations = CelebrantLocations::where('celebrant_id',$request->celebrant_id)->where('location_id',$request->location_id)->first();
            if($celebrantLocations){
                $msg = 'Celebrants already exists with this location.';
                return response()->json(['status'=>false,"message"=>$msg]);
            }
            
            $result = CelebrantLocations::create($input);
            if($result){
                $msg = 'Celebrants added successfully.';
                return response()->json(['status'=>true,"message"=>$msg,"data"=>$result]);
                
            }
            return response()->json(['status'=>false,"message"=>'Something went wrong.']);
        }
        catch (\Exception $ex) {
            return response()->json(['status'=>false,"message"=>$ex->getMessage()]);
        }        
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function destroyCelebrant(Request $request,$id)
    {
        try {
            $data = CelebrantLocations::where('id','=',$request->id)->delete();
            $route = 'location/detail/'.$id;
            return redirect($route)->with(['message'=>'Celebrant location deleted successfully.','class'=>'alert-success']);
            
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id = null)
    {
        try {
            $filters = LocationFilters::all();
            $partners = Locations::partners();
            $celebrants = Locations::celebrants()->get();
            // dd($celebrants);
            $data = array();
            if ($id) {
                $data = RequestLocations::where('id', $id)->first();
            }

            return view('admin.locations.create',compact('data','filters','partners','celebrants'));
        }
        catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
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
            $filters = LocationFilters::all();
            $partners = Locations::partners();

            $celebrants = Locations::celebrants()->get();

            $partnerspackages = Locations::getPartnerPackages();
            $locations_celebrants = Locations::celebrants($id)->get(); 
            $columns = '*';

            $data = Locations::getLocations($id,$columns,'packages')->first();
            //  dd($data['location_celebrants']);
            return view('admin.locations.edit',compact('data','filters','partners','partnerspackages','celebrants','locations_celebrants'));
        }
        catch (\Exception $ex) {
            dd($ex->getMessage().'-'.$ex->getLine());

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
            if (!empty($getPartnerPackages)) {
                return $this->successResponse($getPartnerPackages, 'data found successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
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
            $locations = Locations::addData($request);
            if ($locations['status'] == false) {
                return redirect()->back()->with(['message' => $locations['message'], 'class' => 'alert-danger'])->withInput();
            } else {
                $route = 'locations/all-packages';

                return redirect($route)->with(['message'=>$locations['message'],'class'=>'alert-success']);
            }            
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
    public function update(LocationRequest $request, $id)
    {
        try {
            $locations = Locations::updateLocation($request, $id);
            if ($locations['status'] == false) {
                return redirect()->back()->with(['message' => $locations['message'], 'class' => 'alert-danger']);
            } else {
                $route = 'location/detail/' . $id;
                return redirect($route)->with(['message' => $locations['message'], 'class' => 'alert-success']);
            }
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
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
            $LocationFilters = LocationFilters::where('name', $request->name)->first();
            if ($LocationFilters) {
                $msg = 'Filter already exists with this name.';
                return response()->json(['status' => false, "message" => $msg]);
            }
            $result = LocationFilters::create($input);
            if ($result) {
                $msg = 'Filter added successfully.';
                return response()->json(['status' => true, "message" => $msg, "data" => $result]);
            }
            return response()->json(['status' => false, "message" => 'Something went wrong.']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Update a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateFilter(Request $request)
    {
        try {
            LocationFilters::where('id', $request->input('id'))->update(['name' => $request->input('name')]);
            $msg = 'Filter updated successfully.';
            return response()->json(['status' => true, "message" => $msg]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Destroy a resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyFilter($id)
    {
        try {
            $checkifExistInLocation =  Locations::checkifExistInLocation($id);
            if (count($checkifExistInLocation) == 0) {
                LocationFilters::destroy($id);
                return redirect()->back()->with(['message' => 'Filter deleted successfully', 'class' => 'alert-success']);
            }
            return redirect()->back()->with(['message' => 'This filter exist in package', 'class' => 'alert-danger']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Change Status of the specified resource.
     *
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        try {
            $result =   Locations::changeStatus($request);
            if ($result) {
                return $this->successResponse($result, 'Status changed successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
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
