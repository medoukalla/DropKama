<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class AchatQuantity extends Component
{

    public $server;
    public $servers;
    public $maps;
    public $payments;

    public $active_map_id;
    public $active_server_id;
    public $active_payment_id;

    public $quantity;
    public $fees;
    public $payment_name;

    public $total;

    public function mount() {
        $this->active_map_id = $this->server->map->id;
        $this->active_server_id = $this->server->id;
        $this->quantity = $this->server->min;
        $this->active_payment_id = $this->payments->first()->id;
        $this->fees = $this->payments->first()->fees;
        $this->payment_name = $this->payments->first()->name;
    }

    public function render()
    {
        $this->total = $this->calculate_total();

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
    }


    // function to calculate the total include the fess
    public function calculate_total() {
        // quantity
        // price
        // fees 
        $quantity = $this->quantity;
        $price = $this->server->price;
        $fees = $this->fees;
        $total = $quantity * $price;
        $fees = ( $total * $fees ) / 100;
        return $total + $fees;
    }
}
