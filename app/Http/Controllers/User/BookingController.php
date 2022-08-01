<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Locations;
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
        $data = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price')->get();
        return View::make('user.booking.booking',[
            'locations' => $data
        ]);
    }

    /**
     * show details of packages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
      
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
    public function getBookingLocationCalender(Request $request,$locationId)
    {
        // dd($request->all());
        if(isset($request->session_id) && !empty($request->session_id)){
            // dd(Cache::get('booking'));
            // echo $request->session_id;die;
            Booking::savePaymentDetail($request->session_id,$request->userId);
            Cache::forget('booking');
        }
        $time_array = [
            '06.00'=>'06.00',
            '07.00'=>'07.00',
            '08.00'=>'08.00',
            '09.00'=>'09.00',
            '10.00'=>'10.00',
            '11.00'=>'11.00',
            '12.00'=>'12.00',
            '13.00'=>'13.00',
            '14.00'=>'14.00',
            '15.00'=>'15.00',
            '16.00'=>'16.00',
            '17.00'=>'17.00',
            '18.00'=>'18.00',
            '19.00'=>'19.00',
            '20.00'=>'20.00',
            '21.00'=>'21.00'


        ];
        $booking = Cache::get('booking');
        return view('user.booking.book-location',compact('booking','time_array','locationId'));
      
    }

   
   /**  
     * Post Request to store step1 info in cache
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function postBookingLocationForm(Request $request)
    {
        // dd($request->all());
       
        $data = [
            'booking_date' => $request->calendar_date,
            'booking_time' => $request->booking_time,
            // 'locationID' =>$request->locationId

        ];
        
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
    public function postBookingLocationUserDetail(Request $request)
    {
       
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
            Cache::put('booking',$booking);

        }else{
            $booking = new \App\Models\Booking();
            $booking->fill($data);
            $booking['locationId'] = $request->locationId;
            $booking['email'] = $request->email;
            $booking['phone'] = $request->phone;
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

        // dd($request->all());
        try {
            if($request->has('search') && $request->filled('search')){
                $data = Locations::with([
                    'location_images' => function($query){
                        $query->select('location_id','image');
                    }
                ])->where('id',$request->search)->select('name','id','price')->get();

                
                
               
            }else{
                $data = Locations::with([
                    'location_images' => function($query){
                        $query->select('location_id','image');
                    }
                ])->select('name','id','price')->get();
               
                
            }
            return View::make('elements.user.location.location', ['locations' => $data]);
        }
        catch (\Exception $ex) {
            echo "<pre>";print_r($ex->getMessage());die;
            return $ex->getMessage();
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
