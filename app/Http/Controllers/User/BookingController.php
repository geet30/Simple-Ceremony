<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{LocationFilters,Locations,Booking,GiftVoucher};
use Illuminate\Http\Request;
use View;
use DB;
use Stripe\Stripe;
use Illuminate\Support\Facades\Cache;
use App\Traits\Ceremonies\{Methods as Ceremonies};

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
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }       
    }
   
    /**
     * show bookingLocation page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getBookingLocationCalender(Request $request,$locationId,$selected_date=null){
        try {
            
            if(isset($request->session_id) && !empty($request->session_id)){
               
                $Booking= Booking::addBookingDetailToDB($request->session_id,Cache::get('booking'));
                Cache::forget('booking');
                ########### Send Confirmation Email for booking #########
                $sendMail= Booking::bookingConfirmationEmail($Booking);
            }
            $booking ='';
            $get_location_addons =  Locations::getLocationPackages($locationId)->get()->toArray();
            $location_price = Locations::where('id',$locationId)->pluck('price','name');
            $ceremonies_type  = Ceremonies::fetch_all_ceremony_type()->get();
            return view('user.booking.book-location',compact('booking','locationId','get_location_addons','location_price','ceremonies_type','selected_date'));
        }
        catch (\Exception $ex) {
            dd($ex);
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
                'booking_date' => $request->booking_date,
                'calendar_dayslot_id' => $request->calendar_dayslot_id,
                'price_info' => $request->price_info,
                'celebrant_id' => $request->celebrant_id,
                'booking_start_time' => $request->booking_start_time,
                'booking_end_time' => $request->booking_end_time,              
                'location_name' => $request->location_name,
                'locationId' =>$request->locationId,
                'price' =>$request->price, 
            ];
          
            if(Cache::has('booking')){
                $booking = Cache::get('booking');
                $booking->fill($data);
            }
            else{
                $booking = new \App\Models\Booking();
                $booking->fill($data);
            }
           
            $booking['locationId'] = $request->locationId;
            $booking['celebrant_id'] = $request->celebrant_id;
            $booking['price'] = $request->price;
            $booking['price_info'] = $request->price_info;
            $booking['calendar_dayslot_id'] = $request->calendar_dayslot_id;
            $booking['booking_start_time'] = $request->booking_start_time;
            $booking['booking_end_time'] = $request->booking_end_time;
            $booking['location_name'] = $request->location_name;
            $booking['booking_date'] = $request->booking_date;
            Cache::put('booking', $booking);
            return $this->successResponse(Cache::get('booking'),'Data added successfully.');
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
                'location_name' => $request->location_name,
                'full_name_of_person_1' =>$request->full_name_of_person_1,
                'full_name_of_person_2' =>$request->full_name_of_person_2,
                'full_name_of_witness_1' =>$request->full_name_of_witness_1,
                'full_name_of_witness_2' =>$request->full_name_of_witness_2,
                'full_name_of_child' => $request->full_name_of_child,
                'full_name_of_parent_1' =>$request->full_name_of_parent_1,'full_name_of_parent_2' =>$request->full_name_of_parent_2,
                'full_name_of_sponsor_1' =>$request->full_name_of_sponsor_1,'full_name_of_sponsor_2' =>$request->full_name_of_sponsor_2,
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
            return $this->successResponse(Cache::get('booking'),'Data added successfully.');
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
           
            // if($request->coupon_code !=''){
                $coupon = (isset($request->coupon_code)) ? $request->coupon_code:'';
                $voucher_price =  GiftVoucher::where('voucher_number',$coupon)->value('voucher_price');
                $data = [
                    'voucher_number' => $coupon,
                    'voucher_price' =>$voucher_price
                ];
                if(Cache::has('booking')){
                    $booking = Cache::get('booking');
                    $booking->fill($data);
                }else{
                    $booking = new \App\Models\Booking();
                    $booking->fill($data);
                }  
                $booking['voucher_number'] = $coupon;
                $booking['voucher_price'] = $voucher_price;

                
                Cache::put('booking', $booking);
            // } 
            // else{
            //     $data = [
            //         'voucher_number' => '',
            //         'voucher_price' =>''
            //     ];
            // }         
                 
            return  Booking::getLocationDetail();
        }

        catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * get the specified ceremony type from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     * */   
    public function getBookingCeremonyType(Request $request){
       
        try {
            $ceremony  = Ceremonies::fetch_all_ceremony_type($request->id)->get();
            return View::make('elements.user.booking.ceremony-type', ['ceremonyInfo' => $ceremony]);
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

            if($request->search_start_date=='' && $request->search_end_date=='' && $request->booking_start_time=='' && $request->booking_end_time=='' && $request->id!=''){
                
                
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
     * search the specified booking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     * */ 
    
    public function getCelebrantAvailability(Request $request){
       
        try {
            $data = Booking::getCalendarAvailability($request);
            return $this->successResponse($data, 'Fetched Successfully');
            
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
