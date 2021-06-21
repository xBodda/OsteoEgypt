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
    public $url;

    public function __construct($url = '', $name = '', $icon = '', $currentPage = '')
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->url = $url;

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
