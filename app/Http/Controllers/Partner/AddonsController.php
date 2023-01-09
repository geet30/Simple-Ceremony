<?php

namespace App\Http\Controllers\Partner;
use App\Http\Controllers\Controller;
use App\Models\Addons;
use Illuminate\Http\Request;
use View;
use Session;
use Auth;

class AddonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        try {
            $data = Addons::all();
            return view('partner.addons.index', compact(['data']));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }      
    }

   
   


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Addons  $addons
     * @return \Illuminate\Http\Response
     */
    public function show(Addons $addons)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Addons  $addon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    
}
