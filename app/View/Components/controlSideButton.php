<?php

namespace App\View\Components;

use Illuminate\View\Component;

class controlSideButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $icon;
    public $href;

    public function __construct($href = '', $name = '', $icon = '', $currentPage = '')
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->href = $href;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.control-side-button');
    }
}
