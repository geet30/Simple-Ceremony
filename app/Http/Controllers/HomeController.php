<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Locations,Addons,PartnerProducts,User,PartnerPackages,Booking};
use Redirect;
use Cookie;
use View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        try {
            $locations = Locations::getLocations()->skip(0)->take(3)->get();  
            $addons =  Addons::products()->skip(0)->take(4)->get()->toArray();
            return View::make('pages.home',compact(['locations' ,'addons' ]));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }      
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allAddons(){
        try {
            $locations = Locations::getLocations()->get(); 
            $addons =  Addons::products()->get()->toArray();
            return View::make('pages.addons.listing',compact(['locations' ,'addons'])); 
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }    
    }
    /**
     * Search a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchBookingAddon(Request $request){
        try {
            $data =   Addons::searchAddon($request);
            return View::make('pages.home.search-addon', ['addons' => $data]);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }       
    }
    /**
     * Detail of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addonDetail($id){
        try{
            $data = Addons::products()->where('id',$id)->first()->toArray();
            return view('pages.addons.detail',compact(['data','id']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }       
    }
    /**
     * Show Custom Location Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function requestCustomLocation(){
        try{
            $timeslot  = timeslots();
            return view('user.booking.request-custom-location',compact('timeslot'));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }      
    }
    /**
     * Post Custom Location Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCustomLocation(Request $request){
        try {
            $response = Booking::requestLocation($request->all());
            if($response){
                Booking::requestLocationEmail($request->all());
                return Redirect::back()->with('open_modal', 'yes');
            }           
         }
         catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
         }
        
    }
    /**
     * Show Contact Us 
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUs(Request $request){
        try{
            Booking::contactUsEmail($request->all());
            return redirect('contact-us')->with('message', 'Message Sent Successfully');

        }catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Search Location
     *
     * @return \Illuminate\Http\Response
     */
    public function searchLocation(Request $request)
    {
        try {
            $data =   Locations::searchLocation($request);
            return View::make('pages.home.search-location', ['locations' => $data]);
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
 
    }
    /**
     * Show Package Gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery($id,$addonid){
        try{
            $data = Addons::packageGallery($id)->first()->toArray();
            return view('pages.addons.gallery',compact(['data','addonid']));
        }catch (\Exception $e) {
            return \Redirect::back()->withErrors(['msg' => $e->getMessage()]);
            
        }
    }
    /**
     *check mail exist
    *
    */
    function checkIfMailExist(Request $request){
        try{
            return  checkIfMailExist($request);
        }catch (\Exception $e) {
            return ['status' => false,'message'=>'Something went wrong']; 
            
        }
    }
}
