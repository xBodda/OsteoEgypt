<?php

namespace App\View\Components;

use Illuminate\View\Component;

class controlStatsCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $count;
    public $percentage;
    public $since;
    public $icon;
    public function __construct($name,$count,$percentage,$since,$icon)
    {
        $this->name = $name;
        $this->count = $count;
        $this->percentage = $percentage;
        $this->since = $since;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.control-stats-card');
    }
}
