<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $id;
    public $value;
    public $error;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $id, $value, $error, $label)
    {
        $this->type  = $type;
        $this->name  = $name;
        $this->id    = $id;
        $this->value = $value;
        $this->error = $error;
        $this->label = $label;
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
