<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Payment;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    // index page 
    public function index() {
        return view('frontend.index');
    }


    // vendre page 
    public function vendre() {
        $title = 'Vendre Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.vendre',[
            'title' => $title,
            'message' => $message,
            'servers' => Server::servers(),
            'payments' => Payment::vendre_payments(),
        ]);
    }

    // echange page 
    public function echange() {
        $title = 'Echange Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.echange',[
            'title' => $title,
            'message' => $message,
        ]);
    }

    // achat 
    public function achat() {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => null
        ]);
    }

    // achat 
    public function achat_classique() {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => 'classique'
        ]);
    }

    // achat 
    public function achat_touch() {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => 'touch'
        ]);
    }

    // achat 
    public function achat_retro() {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.achat',[
            'title' => $title,
            'message' => $message,
            'map' => 'retro'
        ]);
    }

    // achat ( step 2 - Quantity )
    public function achat_quantity( Server $server ) {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
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
}
