<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{User, Locations};
use Illuminate\Http\Request;
use View;
use Redirect;
use Illuminate\Support\Facades\Auth;

class CelebrantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Locations::all();
        return view('admin.marriage-celebrants.create',compact('locations'));
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
            $checkEmail = User::where('email',$request->email)->first();
            if($checkEmail){
                $role = $checkEmail->roles->first()->name;
                $msg =$role.' already exists with this email address.';
                return \Redirect::back()->withErrors(['msg' => $msg]);
            }
            $response = User::createCelebrant($request->all());
            if($response){
               return redirect('login')->with('message', 'Celebrant created successfully.');
            }    
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function show(Celebrants $celebrants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function edit(Celebrants $celebrants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Celebrants $celebrants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Celebrants  $celebrants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Celebrants $celebrants)
    {
        //
    }
}
