<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class OrdersTable extends Component
{

    use WithPagination;

    public $active_order = false;
    public $selected_order = null;


    // for search 
    public $key; // field
    public $filter; // ( contains || = )
    public $s; // value

    public function mount() {
        // $this->orders = Order::where('payed', true)->orderBy('id', 'desc')->paginate(2);
    }

    public function render()
    {

        // if filter found and value us (=)
        if ( $this->filter != '' ) {
            switch ( $this->filter ) {
                case 'equals':
                    $filter = '=';
                    break;
                case 'more':
                    $filter = '>';
                    break;
                case 'less':
                    $filter = '<';
                    break;
                
            }
            return view('livewire.admin.orders-table',[
                'orders' => Order::where('payed', true)->where($this->key, $filter, $this->s)->orderBy('id', 'desc')->paginate(10)
            ]);
        }else {
            
            
            return view('livewire.admin.orders-table',[
                'orders' => Order::where('payed', true)->orderBy('id', 'desc')->paginate(10)
            ]);
        }

    }


    // function to open an order details 
    public function open_order( $order_id ) {
        $this->active_order = true;
        $this->selected_order = Order::where('id', $order_id)->first();
    }

    // function to close order 
    public function close_order(    ) {
        $this->active_order = false;
        $this->selected_order = null;
    }


    // function to verify the payment 
    public function verify_payment() {
        $this->selected_order->payment_verified = true;
        $this->selected_order->save();
    }

    // function to verify ( skip ) facturation and livraison steps 
    public function skip_facturation_livraison() {
        $this->selected_order->facturer = true;
        $this->selected_order->liviser = true;
        $this->selected_order->save();
    }

    // function to cancel an order
    public function cancel_order() {
        $this->selected_order->deleted_at = Carbon::now();
        $this->selected_order->save();
    }


    // function to set order as finished 
    public function finish_order() {
        $this->selected_order->delivered = true;
        $this->selected_order->order_completed = true;
        $this->selected_order->save();
    }
}
