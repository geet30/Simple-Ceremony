<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Locations;
use App\Models\LocationImages;
use Illuminate\Http\Request;
use View;
use DB;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->$data = //DB::table('locations')->select('name','id')->get();//
        
        
        $data = Locations::with([
            'location_images' => function($query){
                $query->select('location_id','image');
            }
        ])->select('name','id','price')->get();
        // dd($data);
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
        $booking = $request->session()->get('booking');
        return view('user.booking.book-location',compact('booking','time_array','locationId'));
      
    }

   
   /**  
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function postBookingLocationForm(Request $request)
    {
        // 
        dd($request->all());
        $locationId = $request->locationId;
        $validatedData = $request->validate([
            'booking_date' => 'required',
            'booking_time' => 'required|numeric',
        ]);
        
       
        if(empty($request->session()->get('booking'))){
            $booking = new \App\Models\Booking();
            $booking->fill($validatedData);
            $booking['locationId'] = $request->locationId;
            $request->session()->put('booking', $booking);
        }else{
            $booking = $request->session()->get('booking');
            $booking->fill($validatedData);
            $booking['locationId'] = $request->locationId;
            $request->session()->put('booking', $booking);
        }
        // dd($request->session()->get('booking')); 
        return redirect()->route('booking.getlocationUserDetail');
    }
    /**
     * show bookinguserInfo page.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */  
    // public function getBookingLocationUserDetail(Request $request){
    //     // dd($request->session()->get('booking'));
    //     die('tets');
    //     $booking = $request->session()->get('booking');
        
    //     return view('user.booking.book-location',compact('booking'));
    //     return view('elements.user.booking.booking-step-two',compact('booking'));
       

    // }
      /**  
     * Post Request to store step2 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function postBookingLocationUserDetail(Request $request)
    // {
    //     // dd($request->all());
    //     $validatedData = $request->validate([
    //         'first_couple_name' => 'required',
    //         'second_couple_name' => 'required',
    //         'ceremony_type' => 'required',
    //     ]);
    //     $validatedData['locationId'] = $request->locationId;
    //     if(empty($request->session()->get('booking'))){
    //         $booking = new \App\Models\Booking();
    //         $booking->fill($validatedData);
    //         $request->session()->put('booking', $booking);
    //     }else{
    //         $booking = $request->session()->get('booking');
    //         $booking->fill($validatedData);
    //         $request->session()->put('booking', $booking);
    //     }
    //     return redirect()->route('booking.getlocationUserDetail');
    // }

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
