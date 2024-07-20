<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Echange;
use App\Models\Exchange;
use Livewire\Component;
use Auth;
use Livewire\WithPagination;

class EchangesTable extends Component
{
    use WithPagination;

    public $active_echange = false;
    public $selected_echange = null;


    // for search 
    public $key; // field
    public $filter; // ( contains || = )
    public $s; // value

    public $user;

    public function mount() {
        // $this->orders = Order::where('payed', true)->orderBy('id', 'desc')->paginate(2);
        $this->user = Auth::user();
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

            if ( Auth::user()->role->id == 1 ) {
                $echanges = Exchange::where($this->key, $filter, $this->s)->orderBy('id', 'desc')->paginate(10);
            }else {
                $echanges = Exchange::where( 'user_id', Auth::user()->id )->where($this->key, $filter, $this->s)->orderBy('id', 'desc')->paginate(10);
            }

            
            return view('livewire.admin.echanges-table',[
                'echanges' => $echanges
            ]);
        }else {
            
            if ( Auth::user()->role->id == 1 ) {
                $echanges = Exchange::orderBy('id', 'desc')->paginate(10);
            }else {
                $echanges = Exchange::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
            }
            
            return view('livewire.admin.echanges-table',[
                'echanges' => $echanges
            ]);
        }
    }


    // function to open an echange details 
    public function open_echange( $echange_id ) {
        $this->active_echange = true;
        $this->selected_echange = Exchange::where('id', $echange_id)->first();
    }

    // function to close echange 
    public function close_echange(    ) {
        $this->active_echange = false;
        $this->selected_echange = null;
    }


    // function to cancel an echange
    public function cancel_echange() {
        $this->selected_echange->status = 'canceled';
        $this->selected_echange->save();
    }


    // function to set echange as finished 
    public function finish_echange() {
        $this->selected_echange->status = 'completed';
        $this->selected_echange->save();
    }
}
