<?php

namespace App\Http\Livewire;

use App\Models\Exchange;
use App\Models\Server;
use App\Models\User;
use App\Notifications\admin\NewEchange;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Auth;
use Notification;

class Echange extends Component
{

    public $servers;
    public $server_from;
    public $server_to;

    public $quantite_a_donner;
    public $quantite_a_recevoir;
    public $nom_en_jeu;
    public $nom_en_jeu_deuxieme;

    public $echange_status = false;
    public $exchange = null;

    protected $rules = [
        'quantite_a_donner' => 'required',
        'nom_en_jeu' => 'required',
        'nom_en_jeu_deuxieme' => 'required',
    ];


    public $bonus;
    public $bonus_quantity;


    public $title;
    public $message;

    public function mount() {
        $servers = $this->servers->toArray();
        $server_from = reset($servers)['id'];
        $server_to = end($servers)['id'];

        $this->server_from = $this->servers->where('id', $server_from)->first();
        $this->server_to = $this->servers->where('id', $server_to)->first();

        $this->bonus = setting('plus-de-reglages.bonus-echange');
    }

    public function render()
    {

        // change title and description on steps 
        if ( $this->echange_status == true ) {
            $this->message = 'Salut <span>'.Auth::user()->name.'</span>, Veuillez lire attentivement ce qui est écrit ci-dessous.';
        }

        return view('livewire.frontend.echange');
    }


    // function to calculate and add the bonus to the final quantity
    public function add_bonus() {
        $this->bonus_quantity = ( $this->quantite_a_recevoir * $this->bonus ) / 100 ;
        $this->quantite_a_recevoir = $this->quantite_a_recevoir + $this->bonus_quantity;

        $this->quantite_a_recevoir = number_format($this->quantite_a_recevoir, 2);
    }

    // function to change server ( FROM )
    public function change_server_from( $server_id ) {
        $this->server_from = $this->servers->where('id', $server_id)->first();
        $new_server = $this->servers->where('id', $server_id)->first();
        $this->server_from = $new_server;

        // run the calculation
        $this->calculate();
    }

    // function to change server ( TO )
    public function change_server_to( $server_id ) {
        $this->server_to = $this->servers->where('id', $server_id)->first();
        $new_server = $this->servers->where('id', $server_id)->first();
        $this->server_to = $new_server;

        // run the calculation
        $this->calculate();
    }


    // function to run the calculation
    public function calculate() {

        $validatedData = $this->validate([
            'quantite_a_donner' => 'required|numeric|min:1'
        ]);

        /**
         * Calculate
         * 1 -> if server_from price > server_to price
         * 2 -> if server_from price < server_to price
         * 3 -> if server_from price = server_to price
        */
        if ( $this->server_from->price < $this->server_to->price ) {

            $res = ( 1 / $this->server_from->price_buy ) * $this->server_to->price;
            $quantity = $this->quantite_a_donner / $res;
            $this->quantite_a_recevoir = $quantity;

        }elseif ( $this->server_from->price > $this->server_to->price ) {

            $res = $this->server_from->price_buy / $this->server_to->price;
            $quantity = $this->quantite_a_donner * $res;
            $this->quantite_a_recevoir = $quantity;

        }elseif ( $this->server_from->price == $this->server_to->price ) {

            $res = ( 1 / $this->server_from->price_buy ) * $this->server_to->price;
            $quantity = $this->quantite_a_donner / $res;
            $this->quantite_a_recevoir = $quantity;

        }

        // add bonus if exists
        $this->add_bonus();
    }

    // function to pass the echange order
    public function save_echange() {

        $this->calculate();

        $this->validate();

        // save order
        $echange = new Exchange();
        $echange->from_server = $this->server_from->id;
        $echange->to_server = $this->server_to->id;
        $echange->quantity = $this->quantite_a_donner;
        $echange->from_name = $this->nom_en_jeu;
        $echange->to_name = $this->nom_en_jeu_deuxieme;
        $echange->quantity_get = $this->quantite_a_recevoir;
        $echange->user_id = Auth::user()->id;

        // generate id
        $correct = false;
        do {
            $ref = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);
            if ( Exchange::where('orderId', $ref)->count() == 0 ) {
                $correct = true;
            }
        } while ( $correct == false );

        $echange->orderId = $ref;

        if ( $echange->save() ) {

            try {
                $admin = User::where('role_id', 1)->orderBy('id', 'asc')->first();
                Notification::send($admin, new NewEchange($echange) );
            } catch (\Throwable $th) {
                //throw $th;
            }
            $this->exchange = $echange;
            $this->echange_status = true;
            $this->reset_form();
        }

    }

    // function to confirm the vendre after it's submited
    public function confirm_echange() {
        $this->echange_status = false;
    }

    // function to reset the form
    public function reset_form() {
        $this->reset('quantite_a_donner', 'nom_en_jeu', 'nom_en_jeu_deuxieme', 'quantite_a_recevoir');
    }
}
