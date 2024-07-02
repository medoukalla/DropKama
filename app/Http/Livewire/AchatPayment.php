<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AchatPayment extends Component
{
    // view step
    public $step = 'A';

    public $order;

    public function render()
    {
        return view('livewire.frontend.achat-payment');
    }


    // confirm first step ( step A )
    public function confirm_first_step() {
        // logic confirmations
        $this->step = 'B';
    }


    // back to first step ( step A )
    public function back_to_first_step() {
        $this->step = 'A';
    }
}
