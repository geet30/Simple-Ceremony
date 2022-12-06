<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\{CelebrantDetail,RequestLocations,Locations};

class OverRideDays extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $day;
    public $key = 0;
    public $dayText;
    public $price;
    public $location;
    public $slots;
    public $date;
    public $dateText;
    public function __construct($day,$dayText,$date,$dateText)
    {
        $this->day = $day;
        $this->dayText = $dayText;
        $this->date = $date;
        $this->dateText = $dateText;

        $this->location = Locations::whereHas('request_location',function($qr){
            $qr->where('celebrant_id',auth()->user()->id);
        })
        // ->where('status',1)
        ->get();
    $this->slots = self::getTimeSlot(15,'00:00','23:00');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // dd($this);
        return view('components.over-ride-days',['day' => $day]);
    }
    private static function getTimeSlot($interval, $start_time, $end_time)
    {
        $start = new \DateTime($start_time);
        $end = new \DateTime($end_time);
        $startTime = $start->format('H:i');
        $endTime = $end->format('H:i');
        $i=0;
        $time = [];
        $last = '';
        while(strtotime($startTime) <= strtotime($endTime)){
            $start = $startTime;
            $end = date('H:i',strtotime('+'.$interval.' minutes',strtotime($startTime)));
            $startTime = date('H:i',strtotime('+'.$interval.' minutes',strtotime($startTime)));
            $i++;
            if(strtotime($startTime) <= strtotime($endTime)){
                // $time[$i]['slot_start_time'] = $start;
                // $time[$i]['slot_end_time'] = $end;
                $time[$i] = $start;
                $last = $end;
            }
        }
        $time[++$i] = $last;
        return $time;
    }
}
