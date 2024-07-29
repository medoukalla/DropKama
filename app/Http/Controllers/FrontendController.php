<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\Map;
use App\Models\OfferServer;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Server;
use App\Models\Testimonial;
use App\Notifications\OrderPaymentConfirmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    // index page 
    public function index() {
        $testimonials = Testimonial::where('active', true)->get();
        $faqs = faq::get();
        return view('frontend.index',[
            'testimonials' => $testimonials,
            'faqs' => $faqs
        ]);
    }


    // vendre page 
    public function vendre() {
        $title = 'Vendre Kamas';
        if ( Auth::check() == true ) {
            $message = 'Salut, '.Auth::user()->name.'. Merci de remplir les champs ci-dessous.';
        }else {
            $message = 'Bonjour, pour acheter, vendre ou echange des kamas vous devez se connecter ou bien créer un compte';
        }
        return view('frontend.vendre',[
            'title' => $title,
            'message' => $message,
            'servers' => OfferServer::servers(),
            'payments' => Payment::vendre_payments(),
        ]);
    }

    // echange page 
    public function echange() {
        $title = 'Echange Kamas';
        if ( Auth::check() == true ) {
            $message = 'Salut, '.Auth::user()->name.'.Veuillez vérifier les détails de votre echange commande ci-dessous. Si tout est correct, cliquez sur "Échangez la demande".';
        }else {
            $message = 'Bonjour, pour acheter, vendre ou echange des kamas vous devez se connecter ou bien créer un compte';
        }
        return view('frontend.echange',[
            'title' => $title,
            'message' => $message,
            'servers' => Server::servers(),
        ]);
    }

    // achat 
    public function achat() {
        $title = 'Acheter Kamas';
        if ( Auth::check() == true ) {
            $message = 'Salut, '.Auth::user()->name.'. Veuillez sélectionner le serveur sur lequel vous souhaitez acheter des Kamas.';
        }else {
            $message = 'Bonjour, pour acheter, vendre ou echange des kamas vous devez se connecter ou bien créer un compte';
        }
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => null
        ]);
    }

    // achat 
    public function achat_classique() {
        $title = 'Acheter Kamas';
        if ( Auth::check() == true ) {
            $message = 'Salut, '.Auth::user()->name.'. Veuillez sélectionner le serveur sur lequel vous souhaitez acheter des Kamas.';
        }else {
            $message = 'Bonjour, pour acheter, vendre ou echange des kamas vous devez se connecter ou bien créer un compte';
        }
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => 'classique'
        ]);
    }

    // achat 
    public function achat_touch() {
        $title = 'Acheter Kamas';
        if ( Auth::check() == true ) {
            $message = 'Salut, '.Auth::user()->name.'. Veuillez sélectionner le serveur sur lequel vous souhaitez acheter des Kamas.';
        }else {
            $message = 'Bonjour, pour acheter, vendre ou echange des kamas vous devez se connecter ou bien créer un compte';
        }
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => 'touch'
        ]);
    }

    // achat 
    public function achat_retro() {
        $title = 'Acheter Kamas';
        if ( Auth::check() == true ) {
            $message = 'Salut, '.Auth::user()->name.'. Veuillez sélectionner le serveur sur lequel vous souhaitez acheter des Kamas.';
        }else {
            $message = 'Bonjour, pour acheter, vendre ou echange des kamas vous devez se connecter ou bien créer un compte';
        }
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => 'retro'
        ]);
    }

    // achat ( step 2 - Quantity )
    public function achat_quantity( Server $server ) {
        $title = 'Acheter Kamas';
        $message = 'Salut '.Auth::user()->name.', Veuillez remplir le champ ci-dessous et choisir la quantité de kamas souhaiter';
        return view('frontend.achat-quantity',[
            'title' => $title,
            'message' => $message,
            'server' => $server,
            'servers' => Server::servers(),
            'maps' => Map::maps(),
            'payments' => Payment::payments(),
        ]);
    }

    // Achat ( step 3 - Payment )
    public function achat_payment() {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, Passez votre commande maintenant pour sécuriser votre achat !';
        return view('frontend.achat-payment',[
            'title' => $title,
            'message' => $message,
        ]);
    }


    // Order details
    public function order_details( $ref ) {

        $order = Order::where('reference', $ref);
        if ( !$order->exists() ) {
            abort(404);
        }
        $order = $order->first();

        // if session payment exists
        if ( Session::has('order_reference') && Session::has('payment_success') && Session::get('payment_success') == 'true' && $ref == Session::get('order_reference') ) {

            $order->payed = true;
            $order->payment_verified = true;
            
            if ( $order->save() ) {

                Session::forget('order_reference');
                Session::forget('payment_success');

                $user = $order->user;
                try {
                    $user->notify( new OrderPaymentConfirmed($user, $order));
                } catch (\Throwable $th) {
                    // throw $th;
                }  
            }


        }


        $title = 'Order details';
        $message = 'Bonjour '.Auth::user()->name.', votre demande est en cours de traitement. !';
        return view('frontend.order-details',[
            'title' => $title,
            'message' => $message,
            'order' => $order,
        ]);
    }


    // CGU
    public function cgu() {
        $title = "CONDITIONS GÉNÉRAL D'UTILISATION";
        $message = 'Bonjour, Passez votre commande maintenant pour sécuriser votre achat !';
        return view('frontend.cgu',[
            'title' => $title,
            'message' => $message
        ]);
    }
    // CGV
    public function cgv() {
        $title = 'CONDITIONS GÉNÉRALES DE VENTE';
        $message = 'Bonjour, Passez votre commande maintenant pour sécuriser votre achat !';
        return view('frontend.cgv',[
            'title' => $title,
            'message' => $message
        ]);
    }

}
