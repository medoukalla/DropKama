<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    
    public function index() {
        //
        return redirect()->route('frontend.achat');
    }


    //
    public function checkout( $ref ) {

        $order = Order::where('reference', $ref)->first();
        $server = $order->server;
        $map = $server->map($server->map_id);

        // set data
        $name = $server->name;
        $description = $server->name.' - '.$order->quantity. ' M';
        $image = 'https://i.ibb.co/XDVt7fJ/android-chrome-512x512.png';

        $amount = (number_format($order->total, 2, '.', '') * 100);

        if ( $order->currency == 'euro') {
            $currency = 'eur';
        }else  {
            $currency = 'usd';
        }

        // checkout
        \Stripe\Stripe::setApiKey(env('stripe_sk'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => $currency,
                        'product_data' => [
                            'name' => $name,
                            'description' => $description,
                            'images' => [$image],
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            // 'success_url' => $this->success( $order->reference ),
            'success_url' => route($this->success( $order->reference ), $order->reference),
            'cancel_url'  => route('payment_cancelled', $order->reference ),
        ]);

        return redirect()->away($session->url);


    }


    public function payment_cancelled( $ref ) {
        Session::forget('order_rederence');
        Session::forget('payment_success');
        return redirect()->route('frontend.order.details', ['ref' => $ref]);
    }

    public function success($ref) {

        // store order id in session
        Session::forget('order_rederence');
        Session::forget('payment_success');
        Session::put('order_reference', $ref);
        Session::put('payment_success', 'true');

        //return the route url
        // $url = route('frontend.order.details', ['ref' => $ref]);
        // return $url;
        return 'frontend.order.details';
    }

}
