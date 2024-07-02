<?php

namespace App\Http\Controllers;

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
        ]);
    }

    // achat ( step 2 - Quantity )
    public function achat_quantity() {
        $title = 'Acheter Kamas';
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte';
        return view('frontend.achat-quantity',[
            'title' => $title,
            'message' => $message,
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
