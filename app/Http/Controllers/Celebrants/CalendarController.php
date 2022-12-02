<?php

namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking,CelebrantDate,CelebrantDaySlot,Locations};
use App\View\Components\daySubSlots;
use Carbon\Carbon;
use App\View\Components\OverRideDays;


class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::with('location')->where('celebrant_id',auth()->user()->id)->get();
        return view('celebrant.calendar.index',['booking' => $booking]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // ,function($qr){
        //     $qr->where('celebrant_id',auth()->user()->id);
        // }
        // echo auth()->user()->id;
        // $l =  Locations::with('request_location')->whereHas('request_location')
        // // ->where('status',1)
        // ->get()->toArray();
        // echo "<pre>";
        // print_r($l);
        // die();
        // echo "<pre>";
        // print_r(Locations::get()->toArray());
        // die();
        $slots = CelebrantDate::where('user_id',auth()->user()->id)->count();
        if($slots > 0) return redirect()->route('calendar.over-ride');
        $page = 'rolling-form';
        return view('celebrant.calendar.add-rolling-data',['slots' => $slots,'page' => $page]);
    }
    public function overRideCreate(Request $request)
    {
        // die('==');
        // $component = new OverRideDays();
        // return $component->render();
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
            return $find = Locations::with(['active_slots' => function($qr) use($day){
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
                            $dateRangeSearch->where(function($qra) use($start_date,$end_date){
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

                        });

                        // ->where(function($qra)use($start_time,$end_time){
                        //     $qra->where(function($st) use($start_time){
                        //         $st->whereTime('start_time','<=',$start_time)
                        //             ->whereTime('end_time','>=',$start_time);
                        //     })
                        //     ->where(function($et) use($end_time){
                        //         $et->whereTime('start_time','<=',$end_time)
                        //             ->whereTime('end_time','>=',$end_time);
                        //     });
                        // });
                        // ->whereRaw("start_time <= '{$start_time")
                    })
                    ->get();
            return CelebrantDate::with('day_slots.location')->get();
            // return CelebrantDate::whereRaw("(date(start_date) <= '{$start_date}' AND date(end_date) >= '{$start_date}') OR date(start_date) <= '{$end_date}' OR date(end_date) >= '{$end_date}'")
            //     // ->where(function($end) use($end_date){
            //     //     $end->whereRaw("date(start_date) <= {$end_date} OR date(end_date) >= {$end_date}");
            //     // })
            //     ->whereHas('day_slots',function($slots) use($start_time,$end_time,$location_id){
            //         $slots->where('location_id',$location_id)
            //             ->where(function($st) use($start_time){
            //                 $st->whereTime('start_time','<=',$start_time)
            //                     ->orWhere('end_time','>=',$start_time);
            //             })
            //             ->where(function($et) use($end_time){
            //                 $et->whereTime('start_time','<=',$end_time)
            //                     ->orWhere('end_time','>=',$end_time);
            //             })
            //             ->where('location_id',$location_id);
            //     })
            //     // ->get();
            //     ->toSql();
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
        return redirect()->back()->with(['success' => 'Data saved successfully']);
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
}
