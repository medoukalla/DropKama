<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Auth;

class Order extends Model
{
    use HasFactory;


    // function to get last 5 orders
    static function get_last_5_orders() {
        return Order::orderBy('id', 'desc')->limit('5')->get();
    }

    // function to get all baying orders
    static function get_buy_orders() {
        return Order::where('type', 'buy')->orderBy('id', 'desc')->simplePaginate(10);
    }


    // function to get all selling orders
    static function get_selling_orders() {
        return Order::where('type', 'sell')->orderBy('id', 'desc')->simplePaginate(10);
    }

    // get all orders (buy and sell)
    static function get_all_orders() {
        return Order::where('payed', true)->orderBy('id', 'desc')->simplePaginate(10);
    }

    // function to get logged in user orders
    static function get_logged_user_orders() {
        return Order::where('user_id', Auth::user()->id )->where('payed', true)->orderBy('id', 'desc')->simplePaginate(10);
    }


    // function to get order by unique order_id
    static function get_order_by_unique_id($unique_id) {
        if ( Order::where('orderId', $unique_id)->exists() ) {
            return Order::where('orderId', $unique_id)->limit(1)->get();
        }else {
            return null;
        }
    }



    // function to get order by unique order_id
    static function get_order_by_unique_id_for_user($unique_id) {
        $order = Order::where('orderId', $unique_id);
        if ( $order->exists() ) {

            // if user not own this order
            if ( $order->first()->user_id != Auth::user()->id ) {
                return null;
            }

            return Order::where('orderId', $unique_id)->limit(1)->get();
        }else {
            return null;
        }
    }


    // function to generate order uuid
    static function generate_order_uuid($lenght = 8) {
        // generate new uui
        $uuid = str::random($lenght);
        do {
            return $uuid;
        } while ( !Order::where('uuid', $uuid)->exists() );
    }


    // function to calculate the total kamas sold
    static function total_kamas_selles() {
        $orders = Order::select('quantity')->where('type', 'buy')->where('delivered', true)->get();
        $total  = 0;
        foreach ( $orders as $order ) {
            $total = $total + $order->quantity;
        }
        return $total;
    }


    // fucntion to calculate the total price of all buy orders
    static function total_kamas_sold_price() {
        $orders = Order::select('total')->where('type', 'buy')->where('delivered', true)->get();
        $total = 0;
        foreach ($orders as $order) {
            $total = $total + $order->total;
        }
        return $total;
    }


    // function to calculate the total kamas sold
    static function total_kamas_buys() {
        $orders = Order::select('quantity')->where('type', 'sell')->where('delivered', true)->get();
        $total  = 0;
        foreach ( $orders as $order ) {
            $total = $total + $order->quantity;
        }
        return $total;
    }


    // function to return last 5 completed orders
    static function last_orders() {
        return Order::where('delivered', true)->orderBy('id', 'desc')->limit(5)->get();
    }



    // function to get the owner of order
    // public function user($user_id) {
    //     return User::where('id', $user_id)->first();
    // }
    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function server($id) {
    //     return Server::where('id', $id)->first();
    // }

    /**
     * Get the server that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server()
    {
        return $this->belongsTo(Server::class, 'server_id');
    }


    // function to get payment 
    /**
     * Get the payment that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }


    // get order status
    static function get_status($order) {
        // get status
        if ( $order->payed == false ) {
            $status = __('main.waiting_payment');
        }elseif ( $order->payed == true && $order->payment_verified == false )  {
            $status = __('main.verification_payment');
        }elseif ( $order->payment_verified == true && $order->facturer == false )  {
            $status = __('main.waiting_facturation');
        }elseif ( $order->facturer == true && $order->liviser == false )  {
            $status = __('main.waiting_liviser');
        }elseif ( $order->liviser == true && $order->delivered == false )  {
            $status = __('main.waiting_delivered');
        }elseif ( $order->delivered )  {
            $status = __('main.delivered');
        }
        return $status;
    }

}
