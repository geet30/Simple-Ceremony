<?php

namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking,CelebrantDate,CelebrantDaySlot,Locations,CelebrantDetail,CelebrantDateOverRide,CelebrantLocations};
use App\View\Components\daySubSlots;
use Carbon\Carbon;
use App\View\Components\OverRideDays;
use App\Traits\Celebrant\{Methods as CelebrantMethods};
use View;
class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $booking = Booking::getCalendarBooking(auth()->user()->id);        
            $celebrant_locations = CelebrantMethods::fetch_celebrant_locations(auth()->user()->id);          
            return view('celebrant.calendar.index',['booking' => $booking,'celebrant_locations'=>$celebrant_locations]);
            
        }
        catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }    
        
    }
    
    /**
     * Get celebrant calendar data.
     *
     * @return \Illuminate\Http\Response
     */
    public function celebrantCalendarData(Request $request,$date,$type){
        try {
             
            $data = Booking::getCalendarBooking(auth()->user()->id,'','',$date,$type); 
            return View::make('elements.celebrant.calander.calendar-data-ajax', compact('date','data','type'));
        } catch (\Exception $ex) {
            dd($ex);
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
     /**
     * Search Calendar By Location.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchCalendarByLocation(Request $request){
        try {
            $booking = Booking::getCalendarBooking(auth()->user()->id,$request->locationId); 
            return $this->successResponse($booking, 'Calendar updated successfully.');
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    
        /**
     * Search Calendar By Couple.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchCalendarByCouple(Request $request){
        try {
            $booking = Booking::getCalendarBooking(auth()->user()->id,'',$request->search); 
            return $this->successResponse($booking, 'Calendar updated successfully.');
        } catch (\Exception $ex) {
            return \Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slots = CelebrantDate::where('user_id',auth()->user()->id)->count();
        if($slots > 0) return redirect()->route('calendar.over-ride');
        $page = 'rolling-form';
        return view('celebrant.calendar.add-rolling-data',['slots' => $slots,'page' => $page]);
    }
    public function overRideCreate(Request $request)
    { 
        $page = 'override-form';
        $slots = CelebrantDate::where('user_id',auth()->user()->id)->count();
        if($slots == 0) return redirect()->route('calendar.create');
        $page = 'over-ride-form';
        $slots_data = CelebrantDate::where('user_id',auth()->user()->id)->first();
        return view('celebrant.calendar.add-rolling-data',['slots' => $slots,'page' => $page,'slots_data' => $slots_data]);
    }
    public function checkCelebrantLocation(Request $request)
    {
        // return $request->all();
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $day = $request->day;
        $location_id = $request->location_id;
        try {
            //code...
            $location = Locations::find($request->location_id);
            $find = Locations::with(['active_slots' => function($qr) use($day){
                            $qr->where('day',$day)
                            ->with('dates');
                        }])
                    ->where([['latitude',$location->latitude],['longitude',$location->longitude]])
                    ->whereNot('id',$location->id)
                    ->whereHas('active_slots', function($qr) use($start_time,$end_time,$day,$start_date,$end_date){
                        $qr->where('day',$day)
                        ->where(function($qrd)use($start_time,$end_time){
                            $qrd->where(function($qra) use($start_time,$end_time){
                                    $qra->where(function($st) use($start_time,$end_time){
                                        $st->whereTime('start_time','>=',$start_time)
                                            ->whereTime('start_time','<',$end_time);
                                    })
                                    ->orWhere(function($et) use($start_time,$end_time){
                                        $et->whereTime('end_time','>',$start_time)
                                            ->whereTime('end_time','<=',$end_time);
                                    });
                                })
                                ->orWhere(function($qra)use($start_time,$end_time){
                                    $qra->where(function($st) use($start_time){
                                        $st->whereTime('start_time','<=',$start_time)
                                            ->whereTime('end_time','>',$start_time);
                                    })
                                    ->orWhere(function($et) use($end_time){
                                        $et->whereTime('start_time','<',$end_time)
                                            ->whereTime('end_time','>=',$end_time);
                                    });
                                });
                        })
                        ->whereHas('dates',function($dateRangeSearch) use($start_date,$end_date){
                            // $dateRangeSearch->whereRaw("(date(start_date) <= '{$start_date}' AND date(end_date) >= '{$start_date}') OR date(start_date) <= '{$end_date}' OR date(end_date) >= '{$end_date}'");
                            $dateRangeSearch->where(function($dateRangeSearchQr) use($start_date,$end_date){
                                $dateRangeSearchQr->where(function($qra) use($start_date,$end_date){
                                    $qra->where(function($st) use($start_date,$end_date){
                                        $st->whereDate('start_date','>=',$start_date)
                                            ->whereDate('start_date','<',$end_date);
                                    })
                                    ->orWhere(function($et) use($start_date,$end_date){
                                        $et->whereDate('end_date','>',$start_date)
                                            ->whereDate('end_date','<=',$end_date);
                                    });
                                })
                                ->orWhere(function($qra)use($start_date,$end_date){
                                    $qra->where(function($st) use($start_date){
                                        $st->whereDate('start_date','<=',$start_date)
                                            ->whereDate('end_date','>',$start_date);
                                    })
                                    ->orWhere(function($et) use($end_date){
                                        $et->whereDate('start_date','<',$end_date)
                                            ->whereDate('end_date','>=',$end_date);
                                    });
                                });
                            })
                            ->where('user_id','!=',auth()->user()->id);
                        });
                    })
                    ->get();
            if(!$find)
            {
                return CelebrantDateOverRide::where([
                    ['location_id',$location->id],
                    ['user_id','!=',auth()->user()->id],
                    ['day',$day],
                    ['is_available','yes']
                ])
                ->whereDate('override_date','>=',$start_date)
                ->whereDate('override_date','<=',$end_date)
                ->get();
            }
            return $find ;
        } catch (\Throwable $th) {
            //throw $th;
            return $th->getMessage();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();
        $celebrantDate = CelebrantDate::create([
            'user_id' => auth()->user()->id,
            'start_date' => ($request->starting_date && $request->starting_date != '') ? $request->starting_date : $date->addDays($request->starting_from),
            'end_date' => ($request->ending_date && $request->ending_date != '') ? $request->ending_date : $date->addDays($request->end_date)
        ]);
        foreach($request->day as $day =>  $daySlots)
        {
            foreach ($daySlots['slots'] as $key => $value) {
                if((!isset($daySlots['unavailable'])))
                {
                    $celebrantDate->day_slots()->create([
                        'day' => $day,
                        'user_id' => auth()->user()->id,
                        'dayText' => $daySlots['name'],
                        'start_time' => $value['start'],
                        'end_time'=> $value['end'],
                        'booking_length'=> $value['booking_length'],
                        'your_fee'=> $value['your_fee'],
                        'admin_fee'=> $value['admin_fee'],
                        'location_id'=> $value['location'],
                        'location_fee'=> $value['location_fee'],
                    ]);
                }
            }
        }
        return redirect()->back()->with(['message' => 'Data saved successfully', 'class' => 'alert-success'])->withInput();
    }

    public function overRideFormSubmit(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $insert = [];
        foreach($request->override as $k => $val)
        {
            if(CelebrantDateOverRide::where('override_date',$k)->where('user_id',auth()->user()->id)->count() > 0)
            {
                CelebrantDateOverRide::where('override_date',$k)->where('user_id',auth()->user()->id)->delete();
            }
            foreach($val['slots'] as $slot)
            {
                $celebrantdates = CelebrantDaySlot::where('day',$val['full_day'])
                ->whereHas('dates',function($date) use($k){
                    $date->whereDate('start_date','<=',$k)
                    ->whereDate('end_date','>=',$k)
                    ->where('user_id',auth()->user()->id);
                })->first(); 
                
                if(isset($val['available']))
                {
                  
                    $insert = [
                        'user_id' => auth()->user()->id,
                        // 'calendar_dayslot_id' => $celebrantdates->id,
                        'is_available' => (isset($val['available'])) ? 'yes' : 'no',
                        'override_date_start' => $k.' '.$slot['start'],
                        'override_date_end' => $k.' '.$slot['end'],
                        'override_date' => $k,
                        'day' => $val['full_day'],
                        'dayText' => $val['day'],
                        'start_time' => $slot['start'],
                        'end_time' => $slot['end'],
                        'booking_length' => $slot['booking_length'],
                        'your_fee' => $slot['your_fee'],
                        'admin_fee' => $slot['admin_fee'],
                        'location_fee' => $slot['location_fee'],
                        'location_id' => $slot['location'],
                        'total_fee' => $slot['total_fee']
                    ];
                }
                else{
                    $insert = [
                        'user_id' => auth()->user()->id,
                        // 'calendar_dayslot_id' => $celebrantdates->id,
                        'is_available' => (isset($val['available'])) ? 'yes' : 'no',
                        'override_date' => $k,
                        'day' => $val['full_day'],
                        'dayText' => $val['day'],
                    ];
                }
                
                CelebrantDateOverRide::create($insert);
            }
           
        }
        return redirect()->back()->with(['message' => 'Data saved successfully', 'class' => 'alert-success'])->withInput();
        // return redirect()->back()->with(['success' => 'Data saved successfully']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subSlots(Request $request)
    {
        return view('celebrant.calendar.subslots',['key' => $request->key ?? 1,'day' => $request->day ?? '']);
    }
    public function overRideDay(Request $request)
    {
        $date = $request->date;
        $dateText = $request->dateText;
        $day = $request->day;
        $dayText = $request->dayText;
        $location = Locations::whereHas('request_location',function($qr){
                $qr->where('celebrant_id',auth()->user()->id);
            })
            // ->where('status',1)
            ->get();
        $price = CelebrantDetail::where('celebrant_id',auth()->user()->id)->first();
        $slots = getTimeSlot(15,'00:00','23:00');
        return view('components.over-ride-days',['day' => $day,'date' => $date, 'dateText' => $dateText,'dayText' => $dayText,'location' => $location, 'slots' => $slots,'price' => $price]);
    }
    public function overRideDaySlots(Request $request)
    {
        $key = $request->key;
        $date = $request->date;
        $dateText = $request->dateText;
        $day = $request->day;
        $dayText = $request->dayText;
        $price = CelebrantDetail::where('celebrant_id',auth()->user()->id)->first();
        $location = Locations::whereHas('request_location',function($qr){
                $qr->where('celebrant_id',auth()->user()->id);
            })
            // ->where('status',1)
            ->get();
        $slots = getTimeSlot(15,'00:00','23:00');
        return view('components.over-ride-day-slots',['day' => $day,'date' => $date, 'dateText' => $dateText,'dayText' => $dayText,'location' => $location, 'slots' => $slots,'key' => $key,'price' => $price]);
    }
}
