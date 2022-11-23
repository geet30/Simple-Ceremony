<?php

namespace App\View\Components;

use Illuminate\View\Component;

class daySubSlots extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $day;
    public $key;
    public function __construct($key,$day)
    {
        // dd($key,$day);
        $this->key = $key;
        $this->day = $day;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.day-sub-slots');
    }
}
