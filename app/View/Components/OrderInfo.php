<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OrderInfo extends Component
{

    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 1)
    {
        //
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.order-info');
    }
}

