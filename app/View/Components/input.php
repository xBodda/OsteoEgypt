<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $message;
    public $value;
    public $error;

    public function __construct($type='', $name='', $placeholder='', $message='', $value='', $error=false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->message = $message;
        $this->value = $value;
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
