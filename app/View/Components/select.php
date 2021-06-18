<?php

namespace App\View\Components;

use Illuminate\View\Component;

class select extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $placeholder;
    public $message;
    public $error;

    public function __construct( $name = '', $placeholder = '', $message = '', $error = false)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->message = $message;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
