<?php
namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use App\Models\{Locations,LocationFilters,RequestLocations};
use Illuminate\Http\Request;
use View;
use App\Traits\Celebrant\{Methods as CelebrantMethods};
use Illuminate\Support\Facades\Auth; 

class LocationsController extends Controller
{

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
        $locations = RequestLocations::all(); 
        if ($request->has('search') && $request->filled('search')) {
            $search = $request->search;
            $data  = CelebrantMethods::fetch_locations('',$search)->paginate($records, ['*'], 'page', $req_page);
        } else {
            $data = CelebrantMethods::fetch_locations('',$search)->paginate($records, ['*'], 'page', $req_page);
        }
       
        if ($request->ajax()) {

            $viewurl = 'celebrant.locations.listing';
            return View::make($viewurl, ['req_page' => $req_page, 'data' => $data, 'search' => $search]);
        }
        
        // dd($data);
        return view('celebrant.locations.index',compact('data','locations'));
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
    public function show($id)
    {
        $filters = LocationFilters::all();
        $partners = Locations::partners();
        $data  = CelebrantMethods::fetch_locations($id)->first();
        $partnerspackages = Locations::getPartnerPackages();
     
        return view('celebrant.locations.detail', compact(['data','filters','partners','partnerspackages']));
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
        try {
            $data = RequestLocations::where('id', '=', $request->id)->delete();
            
            return redirect('all-locations')->with(['message' => 'Location deleted successfully', 'class' => 'alert-success']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    
}