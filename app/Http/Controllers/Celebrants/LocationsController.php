<?php
namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use App\Models\{User,Locations,LocationFilters,RequestLocations,CelebrantLocations};
use Illuminate\Http\Request;
use View;
use App\Traits\Celebrant\{Methods as CelebrantMethods};
use Illuminate\Support\Facades\Auth; 
use App\Traits\Pagination\CustomPagination;
use Validator;

class LocationsController extends Controller
{

    use CustomPagination;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records = 10;
        $req_page = 1;
        $search = '';
        if ($request->has('page')) {
            $req_page = $request->page;
        }
        if ($request->has('search')) {
            $search = $request->search;
        }
        $user_id = auth()->user()->id;
        $locations = RequestLocations::where('celebrant_id', '=',$user_id)->get(); 
        
        $fetch_celebrant_locations =  CelebrantLocations::where('celebrant_id',$user_id)->get();
            
        $location_ids =[];
        foreach($fetch_celebrant_locations as $celebrant_location){
            $location_ids[] = $celebrant_location['location_id'];

        }

        $getcelebrantAssignedLocation = Locations::whereIn('id',$location_ids)->get();
        $getcelebrantAssignedLocation = collect($getcelebrantAssignedLocation)->map(function ($item) {
            $item['table'] = 'locations';
            return $item;
        });       
       
            
        $data  = CelebrantMethods::fetch_locations('',$search)->get();
        $data = collect($data)->map(function ($item) {
            $item['table'] = 'request_locations';       
            return $item;
        });
        $data = $getcelebrantAssignedLocation->concat($data);
      
        $data = $this->customPaginate($data, $records, $req_page, ['*']);
        
        $allLocations =  Locations::whereNotIn('id', $location_ids)->get();
        if ($request->ajax()) {

            $viewurl = 'celebrant.locations.listing';
            return View::make($viewurl, ['req_page' => $req_page, 'data' => $data, 'search' => $search]);
        }
        return view('celebrant.locations.index',compact('data','locations','allLocations'));
    }

    
    /**
     * Search Location with status
     *
     * @return \Illuminate\Http\Response
     */
    public function searchCelebrantLocationWithStatus(Request $request)
    {
        
        try {
            $data =   CelebrantMethods::searchCelebrantLocationWithStatus($request);
            return View::make('celebrant.locations.listing', ['data' => $data]);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function assignLocation(Request $request){
        try {
           
            
            $validator = Validator::make($request->all(), [
                'location' => ['required'],
                
            ]);
            if($validator->fails()){
                // dd($validator->messages());
                return response()->json(['status' => false, "message" => $validator->errors()->first()]);
             }
            if (isset($request->location)) {
                $result = CelebrantMethods::saveCelebrantLocations($request->location, auth::user()->id);
                if ($result) {
                    User::where('id', auth::user()->id)->update(['status' => 0]);
                    return $this->successResponse($result, 'Location added successfully.');
                }
                return response()->json(['status' => false, "message" => 'something went wrong']);
            }
            
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
            $data = array();
           

            return view('celebrant.locations.add', compact('data', 'filters', 'partners'));
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
            $locations = Locations::addRequestLocation($request);
            if ($locations['status'] == false) {
                return redirect()->back()->with(['message' => $locations['message'], 'class' => 'alert-danger'])->withInput();
            } else {
                $route = 'all-locations';
                return redirect($route)->with(['message' => $locations['message'], 'class' => 'alert-success']);
            }
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
      /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locations  $Locations
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        // dd($request->table);
        $filters = LocationFilters::all();
        $table = $request->table;
        $partners = Locations::partners();
        // $get_if_not_custom_location = Locations::where('id',$id)->value('custom_location_id');
        if($request->table == 'locations'){ // means its not a custom location
            $data  =  Locations::getLocations($id, '*', 'packages')->first();
        }else{
            $data  = CelebrantMethods::fetch_locations($id)->first();
        }
      
       
        $partnerspackages = Locations::getPartnerPackages();
     
        return view('celebrant.locations.detail', compact(['data','filters','partners','partnerspackages','table']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locations  $Locations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filters = LocationFilters::all();
        $partners = Locations::partners();
        $data  = CelebrantMethods::fetch_locations($id)->first();
   
        $partnerspackages = Locations::getPartnerPackages();
        return view('celebrant.locations.edit', compact(['data','partners','filters','partnerspackages']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locations  $Locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $locations = Locations::updateRequestLocation($request,$id);
            if ($locations['status'] == false) {
                return redirect()->back()->with(['message' => $locations['message'], 'class' => 'alert-danger'])->withInput();
            } else {
                $route = 'all-locations';
                return redirect($route)->with(['message' => $locations['message'], 'class' => 'alert-success']);
            }
        } catch (\Exception $ex) {

            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locations  $Locations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        // dd($request->all());
        
        try {
            $data = RequestLocations::where('id', '=', $request->request_id)->delete();
            $data = CelebrantLocations::where('location_id', '=', $request->id)->where('celebrant_id', '=', auth()->user()->id)->delete();
            
            
            return redirect('all-locations')->with(['message' => 'Location deleted successfully', 'class' => 'alert-success']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    
}