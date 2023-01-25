<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Locations,Addons,PartnerProducts,User,Enqueries,Booking,GiftVoucher};
use Redirect;
use Cookie;
use View;
use Illuminate\Support\Facades\Cache;
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function paymentCancel()
    { 
        try {
            Cache::forget('booking');
            return view('elements.user.booking.payment-cancel');
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
            $category = Addons::all();
            return View::make('pages.addons.listing',compact(['locations' ,'addons','category'])); 
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
     * Search a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchAddonWithLocation(Request $request){
        
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
            // dd($data);
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
     * Post quiz Form.
     *
     * @return \Illuminate\Http\Response
     */
    public function quiz(Request $request){
        
        try {
            // dd($request->all());
            $input = $request->except('_token'); 
            $input['enquiry_date'] = date('Y-m-d');
                    
            $response = Enqueries::create($input);
            if($response){
                User::quizEmail($request->all());
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
           
            $input = $request->except('_token');         
            $input['enquiry_date'] = date('Y-m-d');
            Enqueries::create($input);
            // send notification 
            $admin = User::role('Admin')->first();
            $title = 'New enquiry';
            $body = $request->couple_one;
            $redirection_url = 'all-enquiries/all-records-tab';
            $type = 'Contact us form';
            notificationSave('', $admin->id, $title, $body, $redirection_url, $type);

            Booking::contactUsEmail($request->all());
            return redirect('contact-us')->with('message', 'Message Sent Successfully');

        }catch (\Exception $ex) {
            dd($ex);
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
   /**
     *check if coupon is valid 
    *
    */
    function checkIfCouponValid(Request $request){
        try{
            return GiftVoucher::retrieveGiftCoupon($request->coupon);
        }catch (\Exception $e) {
            return ['status' => false,'message'=>'Something went wrong'];            
        }
    }
    /**
     * Change status of ceremony.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
   
        try {
            $result =   Booking::change_booking_status($request);
            if ($result) {
                return $this->successResponse($result, 'Status changed successfully.');
            }
            return response()->json(['status' => false, "message" => 'something went wrong']);
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }  
}
