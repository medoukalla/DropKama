<?php

namespace App\Http\Livewire\Admin;

use App\Models\Offer;
use App\Notifications\OfferCancelled;
use App\Notifications\OfferDilivered;
use Livewire\Component;
use Auth;
use Livewire\WithPagination;

class OffersTable extends Component
{

    use WithPagination;

    public $active_offer = false;
    public $selected_offer = null;

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
                $offers = Offer::where($this->key, $filter, $this->s)->orderBy('id', 'desc')->paginate(10);
            }else {
                $offers = Offer::where( 'user_id', Auth::user()->id )->where($this->key, $filter, $this->s)->orderBy('id', 'desc')->paginate(10);
            }

            
            return view('livewire.admin.offers-table',[
                'offers' => $offers
            ]);
        }else {
            
            if ( Auth::user()->role->id == 1 ) {
                $offers = Offer::orderBy('id', 'desc')->paginate(10);
            }else {
                $offers = Offer::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
            }
            
            return view('livewire.admin.offers-table',[
                'offers' => $offers
            ]);
        }

    }


    // function to open an offer details 
    public function open_offer( $offer_id ) {
        $this->active_offer = true;
        $this->selected_offer = Offer::where('id', $offer_id)->first();
    }

    // function to close offer 
    public function close_offer(    ) {
        $this->active_offer = false;
        $this->selected_offer = null;
    }


    // function to cancel an offer
    public function cancel_offer() {
        $this->selected_offer->status = 'cancelled';
        $this->selected_offer->save();

        $user = $this->selected_offer->user;
        try {
            $user->notify( new OfferCancelled($this->selected_offer));
        } catch (\Throwable $th) {
            throw $th;
        }  
    }


    // function to set offer as finished 
    public function finish_offer() {
        $this->selected_offer->status = 'completed';
        $this->selected_offer->save();


        $user = $this->selected_offer->user;
        try {
            $user->notify( new OfferDilivered($user, $this->selected_offer));
        } catch (\Throwable $th) {
            throw $th;
        }  
    }
}
