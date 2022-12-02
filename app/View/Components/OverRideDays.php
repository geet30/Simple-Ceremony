<?php

namespace App\View\Components;

use Illuminate\View\Component;

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
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.over-ride-days');
    }
}
