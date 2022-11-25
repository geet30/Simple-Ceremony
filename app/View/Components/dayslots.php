<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\{CelebrantDetail,RequestLocations};

class dayslots extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $day;
    public $dayText;
    public $price;
    public $location;
    public $slots;
    public function __construct($dayText,$day)
    {
        $this->dayText = $dayText;
        $this->day = $day;
        $this->price = CelebrantDetail::where('celebrant_id',auth()->user()->id)->first();
        $this->location = RequestLocations::where('celebrant_id',auth()->user()->id)->where('type',2)->get();
        $this->slots = self::getTimeSlot(15,'00:00','23:00');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dayslots');
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
