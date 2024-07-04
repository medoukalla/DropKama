<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vendre extends Component
{
    public $server;
    public $servers;

    public $payments;
    public $payment;

    public $active_server_id;
    public $active_payment_id;


    public $nom_en_jeu;
    public $quantity;

    // contact and payment info 
    public $email;
    public $nom_et_prenom;
    public $paypal_email;
    public $skrill_email;
    public $usdt_address;
    public $bank_nom;
    public $bank_numero;

    public function mount() {
        $this->active_server_id = $this->servers->first()->id;
        $this->active_payment_id = $this->payments->first()->id;
        $this->server = $this->servers->first();
        $this->payment = $this->payments->first();
    }


    public function render()
    {
        return view('livewire.frontend.vendre');
    }

    // function to change server 
    public function change_server( $server_id ) {
        $this->active_server_id = $server_id;
        $new_server = $this->servers->where('id', $server_id)->first();
        $this->server = $new_server;
    }

    // function to change payment 
    public function change_payment( $payment_id ) {
        $this->active_payment_id = $payment_id;
        $this->payment = $this->payments->where('id', $payment_id)->first();
    }
}
