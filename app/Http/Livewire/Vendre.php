<?php

namespace App\Http\Livewire;

use App\Models\Offer;
use App\Notifications\NewOffer;
use Livewire\Component;
use Auth;

class Vendre extends Component
{
    public $server;
    public $servers;

    public $payments;
    public $payment;

    public $active_server_id;
    public $active_payment_id;


    public $nom_en_jeu;
    public $quantity = 1;

    // contact and payment info 
    public $email;
    public $nom_et_prenom;
    public $paypal_email;
    public $skrill_email;
    public $usdt_adresse;
    public $bank_nom;
    public $bank_numero;


    public $total;
    public $vendre_status = false;

    protected $rules = [
        'nom_en_jeu' => 'required',
        'nom_et_prenom' => 'required',
        'email' => 'required|email',
    ];

    public function mount() {
        $this->active_server_id = $this->servers->first()->id;
        $this->active_payment_id = $this->payments->first()->id;
        $this->server = $this->servers->first();
        $this->payment = $this->payments->first();
        
        if ( Auth::check() ) {
            $this->email = Auth::user()->email;
            $this->nom_et_prenom = Auth::user()->name;
        }
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


    // function to pass the vendre offer 
    public function save_order() {
        // validate the required inputs 
        $this->validate();

        // validate the inputs based on payment method 
        // Validate paypal 
        if ( $this->payment->name == 'Paypal') {
            $validatedData = $this->validate([
                'paypal_email' => 'required|email|max:100',
            ]);
        }

        // Validate Skrill 
        if ( $this->payment->name == 'Skrill') {
            $validatedData = $this->validate([
                'skrill_email' => 'required|email|max:100',
            ]);
        }

        // Validate Usdt 
        if ( $this->payment->name == 'Usdt') {
            $validatedData = $this->validate([
                'usdt_adresse' => 'required|max:250',
            ]);
        }

        // Validate bank transfer 
        if ( $this->payment->name == 'Bank transfer') {
            $validatedData = $this->validate([
                'bank_nom' => 'required|max:50',
                'bank_numero' => 'required'
            ]);
        }

        // everything is good now save the order in database
        $offer = new Offer();
        $offer->user_id = Auth::user()->id;
        $offer->server_id = $this->server->id;
        $offer->quantity = $this->quantity;
        $offer->total = $this->quantity * $this->server->price;
        $offer->game_id = $this->nom_en_jeu;
        $offer->payment_id = $this->payment->id;
        $offer->name = $this->nom_et_prenom;
        $offer->email = $this->email;
        $offer->discord = 'none'; // not using it for now
        
        // generate id 
        $correct = false;
        do {
            $ref = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);
            if ( Offer::where('orderId', $ref)->count() == 0 ) {
                $correct = true;
            }
        } while ( $correct == false );

        $offer->orderId = $ref;

        // payment info 
        if ( $this->payment->name == 'Paypal') {
            $offer->payment_info = $this->paypal_email;
        }elseif ( $this->payment->name == 'Skrill' ) {
            $offer->payment_info = $this->skrill_email;
        }elseif ( $this->payment->name == "usdt" ) {
            $offer->payment_info = $this->usdt_adresse;
        }elseif ( $this->payment->name == "Bank transfer" || $this->payment->name == 'cih' ) {
            $offer->payment_info = $this->bank_nom;
            $offer->payment_info_b = $this->bank_numero;
        }

        if ( $offer->save() ) {
            $this->vendre_status = true;
            $this->reset_form();

            try {
                Auth::user()->notify( new NewOffer($offer));
            } catch (\Throwable $th) {
                // throw $th;
            }  
        }

    }

    // function to confirm the vendre after it's submited 
    public function confirm_vendre() {
        $this->vendre_status = false;
    }

    // function to reset the form 
    public function reset_form() {
        $this->reset('quantity', 'nom_et_prenom', 'email', 'paypal_email', 'skrill_email', 'usdt_adresse', 'nom_en_jeu');
    }
}
