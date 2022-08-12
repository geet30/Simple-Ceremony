<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\{LocationFilters,Locations};
use App\Models\Booking;
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
        
        $timeslot  = timeslots();
        $filters = LocationFilters::all();
        $locations = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price')->get();
        return view('user.booking.booking',compact(['timeslot','locations','filters']));

    }

    /**
     * show details of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail($id){
        $data = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price','address','town','why_this_location')->where('id',$id)->first();
        $locations = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price')->get();
        
        return view('user.booking.single-location',compact(['data','locations']));
    }
   
    /**
     * show bookingLocation page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getBookingLocationCalender(Request $request,$locationId){
        if(isset($request->session_id) && !empty($request->session_id)){
            $Booking= Booking::addBookingDetailToDB($request->session_id,Cache::get('booking'));
            Cache::forget('booking');
        }
        $timeslot  = timeslots();
        $booking = Cache::get('booking');
        return view('user.booking.book-location',compact('booking','timeslot','locationId'));
      
    }  
   /**  
     * Post Request to store step1 info in cache
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function postBookingLocationForm(Request $request){
        $data = [
            'booking_date' => $request->calendar_date,
            'booking_start_time' => $request->booking_start_time,
            'booking_end_time' => $request->booking_end_time,

        ];
        $checkIfBookingExist =  self::checkIfBookingExist($data);
        if($checkIfBookingExist){
            return $this->errorResponse([], 'Booking already exist', 400);
        }
        
        if(Cache::has('booking')){
            $booking = Cache::get('booking');
            $booking->fill($data);
            $booking['locationId'] = $request->locationId;
            Cache::put('booking',$booking);

         
        }else{
            $booking = new \App\Models\Booking();
            $booking->fill($data);
            $booking['locationId'] = $request->locationId;
            Cache::put('booking', $booking);
        }
       return $this->successResponse([],'Date added successfully.');
    }
 
      /**  
     * Post Request to store step2 info in cache
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postBookingLocationUserDetail(Request $request){
        $data = [
            'first_couple_name' => $request->first_couple_name,
            'second_couple_name' => $request->second_couple_name,
            'ceremony_type' => $request->ceremony_type,
        ];
        if(Cache::has('booking')){
            $booking = Cache::get('booking');
            $booking->fill($data);
            $booking['locationId'] = $request->locationId;
            $booking['email'] = $request->email;
            $booking['phone'] = $request->phone;
            $booking['country_code'] = $request->country_code;
            Cache::put('booking',$booking);

        }else{
            $booking = new \App\Models\Booking();
            $booking->fill($data);
            $booking['locationId'] = $request->locationId;
            $booking['email'] = $request->email;
            $booking['phone'] = $request->phone;
            $booking['country_code'] = $request->country_code;
            Cache::put('booking', $booking);
           
        }
        // dd(Cache::get('booking'));
        return $this->successResponse([],'Date added successfully.');
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
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
        }
 
    }

      /**
     * search the specified location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locations  $locations
     * @return \Illuminate\Http\Response
     * */

    public function searchBookingLocation(Request $request)
    {
        try {
            if($request->has('id') && $request->filled('id')){
                $get_result = Booking::with([
                    'location' => function($query){
                        $query->select('name','id','price');
                    },
                    'location.location_images' => function($query){
                        $query->select('location_id','image');
                    }
                ]);
                $booking = (clone $get_result);
               
                if($request->has('id')){
                    $booking->where('locationId',$request->id);
                }
                
                if($request->has('booking_date') && $request->booking_date !=''){
                  
                    $booking->where('booking_date',$request->booking_date);
                }
                if($request->has('booking_start_time') && $request->booking_start_time !=''){
                    $booking->where('booking_start_time',$request->booking_start_time);
                }
                if($request->has('booking_end_time') && $request->booking_end_time !=''){
                    $booking->where('booking_end_time',$request->booking_end_time);
                }
               $data = $booking->select('booking_date','id','locationId')->get();
            // $data = $booking->select('booking_date','id','locationId')->toSql();
            // dd($data);

                            
            }else{
                $data = Booking::with([
                    'location' => function($query){
                        $query->select('name','id','price');
                    },
                    'location.location_images' => function($query){
                        $query->select('location_id','image');
                    }
                ])->select('booking_date','id','locationId')->get();
                              
            }
            return View::make('elements.user.booking.search-location', ['locations' => $data]);
        }
        catch (\Exception $ex) {
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
        }
 
    }

    public function checkIfBookingExist($data){
      
        return Booking::with([
            'location' => function($query){
                $query->select('name','id','price');
            },
            'location.location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->where('booking_start_time',$data['booking_start_time'])->where('booking_end_time',$data['booking_end_time'])->where('booking_date',$data['booking_date'])->select('booking_date','id','locationId')->first();
       
        

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
