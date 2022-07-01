<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\LocationImages;
use Illuminate\Http\Request;
use View;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Locations::all();
        return View::make('admin.locations.listing',[
            'locations' => $data
        ]);
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
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $input = $request->all();
        $input['added_by'] = 2;
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
            $route = '/admin/locations';
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
