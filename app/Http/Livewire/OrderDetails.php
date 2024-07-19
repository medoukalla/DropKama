<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderDetails extends Component
{

    public $order;

    public function render()
    {
        return view('livewire.order-details');
    }
}
