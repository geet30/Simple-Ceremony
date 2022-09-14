<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\{User,Addons,Locations};
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function showSignupForm(){
        try {
            $addons = Addons::all();
            $locations = Locations::all();
            return view('partner.sign-up',compact('addons','locations'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }        
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function showCelebrantSignupForm(){
        try {
            $allLocations = Locations::all();
            $admin_tax_detail = User::role('Admin')->with('taxdetail')->first(); 
            // dd($admin->taxdetail->celebrant_tax);
            return view('celebrant.sign-up',compact('allLocations','admin_tax_detail'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }        
    }
    /**
     * Register Partner.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function register(Request $request)
    {
        try {
            $response = User::createPartner($request->all());
            if($response){
             
               return redirect('login')->with('message', 'User created successfully, to login please check your email');
            }    
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }   
    }
    /**
     * Register Celebrant.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function celebrantRegister(Request $request)
    {
        try {
            $response = User::createCelebrant($request->all());
            if($response){
                if($request->register =='Register'){
                    return \Redirect::back()->with('code', 1);
                }else{
                    return redirect('login')->with('message', 'Celebrant created successfully');
                }
             
            }    
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }   
    }
}
