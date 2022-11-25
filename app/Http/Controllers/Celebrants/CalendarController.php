<?php

namespace App\Http\Controllers\Celebrants;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking,CelebrantDate,CelebrantDaySlot};
use App\View\Components\daySubSlots;
use Carbon\Carbon;


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
        return view('celebrant.calendar.add');
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
            'start_date' => $date->addDays($request->starting_from),
            'end_date' => $date->addDays($request->end_date)
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
