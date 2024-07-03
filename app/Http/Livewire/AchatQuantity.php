<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class AchatQuantity extends Component
{

    public $step = 'quantity';

    public $server;
    public $servers;
    public $maps;
    public $payments;
    public $payment;

    public $active_map_id;
    public $active_server_id;
    public $active_payment_id;

    public $quantity;
    public $fees;
    public $payment_name;

    public $total;
    public $total_with_fees;
    public $fees_amount;

    public function mount() {
        $this->active_map_id = $this->server->map->id;
        $this->active_server_id = $this->server->id;
        $this->quantity = $this->server->min;
        $this->active_payment_id = $this->payments->first()->id;
        $this->fees = $this->payments->first()->fees;
        $this->payment_name = $this->payments->first()->name;
        $this->payment = $this->payments->first();
    }

    public function render()
    {
        $this->calculate_total();

        return view('livewire.frontend.achat-quantity');
    }


    // function to change maps 
    public function change_map( $map_id ) {
        // change the active map id
        $this->active_map_id = $map_id;
        // use first server as selected server
        $new_server = Server::where('map_id', $map_id)->first();
        $this->server = $new_server;
        $this->active_server_id = $new_server->id;

        // change the quantity value 
        $this->quantity = $this->server->min;
    }

    // function to change server 
    public function change_server( $server_id ) {
        $this->active_server_id = $server_id;
        $new_server = Server::where('id', $server_id)->first();
        $this->server = $new_server;

        // change the quantity value 
        $this->quantity = $this->server->min;
    }


    // function to change payment 
    public function change_payment( $payment_id ) {
        $this->active_payment_id = $payment_id;
        $this->fees = $this->payments->where('id', $payment_id)->first()->fees;
        $this->payment_name = $this->payments->where('id', $payment_id)->first()->name;
        $this->payment = $this->payments->where('id', $payment_id)->first();
    }


    // function to calculate the total include the fess
    public function calculate_total() {
        $quantity = $this->quantity;
        $price = $this->server->price;
        $fees = $this->fees;
        // floor( $total_with_fees * 1000 ) / 1000
        $this->total = floor( ( $quantity * $price) * 1000 ) / 1000; 
        $this->fees_amount = floor( ( ( $this->total * $fees ) / 100 ) * 1000 ) / 1000;
        $this->total_with_fees = floor( ( $this->total + $this->fees_amount ) * 1000 ) / 1000;
    }


    // function to confirm the quantity form and move to payment form 
    public function confirm_quantity() {
        // do the logic here 

        // show the next step 
        $this->step = 'A';
    }


    // back to quantity from payment step
    public function back_to_quantity() {
        $this->step = 'quantity';
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
