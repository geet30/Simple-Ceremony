<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{LocationFilters,Locations,Booking};
use Illuminate\Http\Request;
use View;
use DB;
use Stripe\Stripe;
use Illuminate\Support\Facades\Cache;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $timeslot  = timeslots();
            $filters = LocationFilters::all();
            $locations = Locations::getLocations()->get();
            return view('user.booking.view',compact(['timeslot','locations','filters']));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        } 
    }

    /**
     * show details of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail($id){
        try {
       
            Cache::forget('booking');
            $data = Locations::getLocations($id)->first();
            $locations = Locations::getLocations()->get();
            return view('user.booking.single-location',compact(['data','locations']));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }       
    }
   
    /**
     * show bookingLocation page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getBookingLocationCalender(Request $request,$locationId){
        try {

            if(isset($request->session_id) && !empty($request->session_id)){
                $Booking= Booking::addBookingDetailToDB($request->session_id,Cache::get('booking'));
                Cache::forget('booking');
            }
           
            $timeslot  = timeslots();
            
            $get_booking_total_price = Booking::getBookingPrice($locationId);
            $data = [
                'package_price' => $get_booking_total_price,
            ];
            // $booking = Cache::get('booking');
            if(Cache::has('booking')){
                $booking = Cache::get('booking');
                $booking->fill($data);
            }
            else{
                $booking = new \App\Models\Booking();
                $booking->fill($data);
            }

            // $booking['package_price'] = $get_booking_total_price;
            Cache::put('booking', $booking);

            $get_location_addons =  Locations::getLocationPackages($locationId)->get()->toArray();
            $location_price = Locations::where('id',$locationId)->pluck('price','name');
            return view('user.booking.book-location',compact('booking','timeslot','locationId','get_location_addons','location_price'));
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }    
    }  
   /**  
     * Post Request to store step1 info in cache
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function postBookingLocationForm(Request $request){
        try {
            $data = [
                'booking_date' => $request->calendar_date,
                'booking_start_time' => $request->booking_start_time,
                'booking_end_time' => $request->booking_end_time,    
            ];
            $checkIfBookingExist =   Booking::checkIfBookingExist($data,$request->locationId);;
            if($checkIfBookingExist){
                return $this->errorResponse([], 'Booking already exist', 400);
            }          
            // dd(Cache::get('booking')) ;
            if(Cache::has('booking')){
                $booking = Cache::get('booking');
                $booking->fill($data);
            }
            else{
                $booking = new \App\Models\Booking();
                $booking->fill($data);
            }
            $booking['locationId'] = $request->locationId;
            Cache::put('booking', $booking);
            return $this->successResponse([],'Date added successfully.');
        }
        catch (\Exception $ex) {
            dd($ex->getMessage());
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }  

        
    }
 
      /**  
     * Post Request to store step2 info in cache
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postBookingLocationUserDetail(Request $request){
        try {
            $data = [
                'first_couple_name' => $request->first_couple_name,
                'second_couple_name' => $request->second_couple_name,
                'ceremony_type' => $request->ceremony_type,
            ];
            if(Cache::has('booking')){
                $booking = Cache::get('booking');
                $booking->fill($data);
            }else{
                $booking = new \App\Models\Booking();
                $booking->fill($data);
            }
            $booking['locationId'] = $request->locationId;
            $booking['email'] = $request->email;
            $booking['phone'] = $request->phone;
            $booking['country_code'] = $request->country_code;
            Cache::put('booking', $booking);
            return $this->successResponse([],'Date added successfully.');
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }       
    }
    
    /**  
     * Post Request to store step3 info 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postBookingLocationPayment(Request $request)
    {
        
        try {           
           return  Booking::getLocationDetail();
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }

    /**
     * search the specified booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     * */

    public function searchBooking(Request $request)
    {
        try {
            $columns = ['name','id','price','address','town','why_this_location','cover_image'];

            if($request->booking_date=='' && $request->booking_start_time=='' && $request->booking_end_time=='' && $request->id!=''){
                $data = Locations::getLocations($request->id,$columns)->get();
                return View::make('pages.home.search-location', ['locations' => $data]);
            }else{
                $data = Booking::searchBooking($request);
                return View::make('pages.home.search-booking', ['locations' => $data]);
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
