<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class OrdersTable extends Component
{
    public $data;
    public $dataType;
    public $actions;

    public function render()
    {
        return view('livewire.admin.orders-table');
    }


    // function to verify the payment 
    public function verify_payment( $order_id ) {
        $order = Order::where('id', $order_id)->first();
        dd($order);
        $order->payment_verified = true;
        $order->save();
    } 
}
