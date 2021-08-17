<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Friend extends Component
{

    public $name;

    public $icon;

    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('components.friend');
    }
}
