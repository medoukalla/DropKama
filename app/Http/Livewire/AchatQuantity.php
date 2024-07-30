<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Server;
use App\Notifications\NewFreshOrder;
use Auth;
use Error;
use Illuminate\Support\Facades\Session;
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


    public $bonus;
    public $bonus_quantity;

    public $nom_dans_jeu;


    // currency ( usd or euro ) // euro par default
    public $currency = 'euro';
    public $currency_symb = '€';



    public $title;
    public $message;

    public $payment_failed = 'false';
    public $order_reference = null;

    public function mount() {

        if ( $this->payment_failed == 'true' && !is_null( $this->order_reference )) {
            $order = Order::where('reference', $this->order_reference)->first();
            $this->active_map_id = $order->server->map->id;
            $this->active_server_id = $order->server->id;
            $this->quantity = $order->server->min;
            $this->active_payment_id = $order->payment->id;
            $this->fees = $order->payment->fees;
            $this->payment_name = $order->payment->name;
            $this->payment = $order->payment;
            $this->quantity = $order->quantity * 1;
            $this->nom_dans_jeu = $order->username;
            $this->total_with_fees = $order->total;
            
            $this->step = 'B';
        }else {

            $this->active_map_id = $this->server->map->id;
            $this->active_server_id = $this->server->id;
            $this->quantity = $this->server->min;
            $this->active_payment_id = $this->payments->first()->id;
            $this->fees = $this->payments->first()->fees;
            $this->payment_name = $this->payments->first()->name;
            $this->payment = $this->payments->first();
        }

        $this->bonus = setting('plus-de-reglages.bonus-achat');
        
        // set up the currency and symbol
        $this->currency = Session::get('currency');
    }

    public function render()
    {
        if ( $this->payment->svg_name == 'cih' ){
            $this->currency_symb = 'DH';
        }else {
            if ( $this->currency == 'euro') {
                $this->currency_symb = '€';
            }else {
                $this->currency = "usd";
                $this->currency_symb = '$';
            }
        }


        // change title and description on steps 
        if ( $this->step == 'quantity') {
            $this->message = 'Salut <span>'.Auth::user()->name.'</span>, Veuillez remplir le champ ci-dessous et choisir la quantité de kamas souhaiter.';
        }elseif ( $this->step == 'A' ) {
            $this->message = 'Salut <span>'.Auth::user()->name.'</span>,  Veuillez vérifier les détails de votre commande ci-dessous. Si tout est correct, cliquez sur "Suivant".';
        }elseif ( $this->step == 'B' ) {
            $this->message = 'Salut <span>'.Auth::user()->name.'</span>,  Veuillez lire attentivement ces étapes et continuer.';
        }
        
        $this->calculate_total();

        // if achat bonus exists 
        if ( $this->bonus > 0 ) {
            // add the bonus 
            $this->add_bonus();
        }

        return view('livewire.frontend.achat-quantity');
    }


    // function to save the order
    public function save_order() {

        if ( $this->payment_failed == 'true' && !is_null( $this->order_reference )) {
            $order = Order::where('reference', $this->order_reference)->first();
            $this->check_payment( $order );
        }else {
            // save the order in database 
            $order = new Order();
            $correct = false;
            do {
                $ref = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);
                if ( Order::where('reference', $ref)->count() == 0 ) {
                    $correct = true;
                }
            } while ( $correct == false );

            $order->reference = $ref;
            
            $order->quantity = $this->quantity + $this->bonus_quantity;
            $order->total = $this->total_with_fees;
            $order->bonus = $this->bonus_quantity;
            $order->payment_id = $this->payment->id;
            $order->server_id = $this->server->id;
            $order->payed = true;
            $order->username = $this->nom_dans_jeu;

            $order->user_id = Auth::user()->id;

            $order->currency = $this->currency;

            if ( $order->save() ) {
                // if client wana pay with stripe
                $this->check_payment( $order );  
            }
        }

    }


    // function to check if user wana pay with stripe or not 
    public function check_payment( $order ) {
        // stripe allowed 
        $stripe = array('bancontact', 'ideal', 'giropay', 'visa', 'mastercard', 'revolute', 'stripe');
        if ( in_array( $order->payment->svg_name , $stripe) == true ) {
            
            // redirect user to stripe checkout page
            return redirect()->route('frontend.stripe.checkout', ['ref' => $order->reference]);


        }else {
            // send email to client 
            try {
                Auth::user()->notify( new NewFreshOrder($order));
            } catch (\Throwable $th) {
                // throw $th;
            } 

            return redirect()->route('frontend.order.details', $order->reference);
        }
    }

    // function to calculate and add the bonus to the final quantity 
    public function add_bonus() {
        $this->bonus_quantity = ( $this->quantity * $this->bonus ) / 100 ;
        // $this->quantity = $this->quantity + $this->bonus_quantity;
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

        if ( $this->quantity < 1 ) {
            $this->total = 0;
            $this->total_with_fees = 0;
            return $this->addError('quantity', 'Le champ quantité est obligatoire.');
        }

        // if payment is cih 
        if ( $this->payment->svg_name == 'cih' ) {
            $price = $this->server->price_mad;
        }else {
            if ( $this->currency == 'usd' ) {
                $price = $this->server->price_usd;
            }else {
                $price = $this->server->price;
            }
        }
        
        $quantity = $this->quantity;
        $fees = $this->fees;
        // floor( $total_with_fees * 1000 ) / 1000
        $this->total = floor( ( $quantity * $price) * 1000 ) / 1000; 
        $this->fees_amount = floor( ( ( $this->total * $fees ) / 100 ) * 1000 ) / 1000;
        $this->total_with_fees = floor( ( $this->total + $this->fees_amount ) * 1000 ) / 1000;
        }


    // function to confirm the quantity form and move to payment form 
    public function confirm_quantity() {
        // do the logic here 
        $validatedData = $this->validate([
            'nom_dans_jeu' => 'required',
            'quantity' => 'required|numeric|min:1'
        ]);
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
