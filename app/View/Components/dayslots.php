<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dayslots extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $day;
    public $dayText;
    public function __construct($dayText,$day)
    {
        $this->dayText = $dayText;
        $this->day = $day;
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
}
