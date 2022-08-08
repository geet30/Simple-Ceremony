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
    public function index(Request $request,$slug=null)
    {
        $records = $req_page = 1;
        $locations = Locations::all();
        
        $data = $allRequest = RequestLocations::paginate($records, ['*'], 'page', $req_page);  
        if($request->ajax()){   
            echo $slug;die('fdg');
           
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
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";print_r(Auth::user()->id);die;
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $input = $request->all();
        $input['added_by'] = Auth::user()->id;
        $checkEmail = Locations::where('name',$request->name)->first();
        if($checkEmail){
            $msg = 'Location already exists with this name.';
            return \Redirect::back()->withErrors(['msg' => $msg]);
        }
        if($request->hasFile('cover_image')){
            $input['cover_image'] = uploadImage($request->cover_image, 'locations');
        }
        $result = Locations::create($input);
        if($result){
            if($request->has('location_images')){
                foreach($request->location_images as $file){
                    $image['location_id'] = $result->id;
                    $image['image'] = uploadImage($file, 'locations');
                    LocationImages::create($image);
                }   
            }
            $msg = 'Location added successfully.';
            $route = '/locations';
            return redirect($route)->with('message', $msg);
        }
        return \Redirect::back()->withErrors(['msg' => 'Something went wrong.']);
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
