<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\OfferServer;
use Auth;

class Offer extends Model
{
    use HasFactory;

    // get all offers (buy and sell)
    static function get_all_offers() {
        return Offer::orderBy('id', 'desc')->simplePaginate(10);
    }

    // function to get logged in user offers
    static function get_logged_user_offers() {
        return Offer::where('user_id', Auth::user()->id )->orderBy('id', 'desc')->simplePaginate(10);
    }


    // function to get offer by unique offer_id
    static function get_offer_by_unique_id($unique_id) {
        if ( Offer::where('orderId', $unique_id)->exists() ) {
            return Offer::where('orderId', $unique_id)->limit(1)->get();
        }else {
            return null;
        }
    }


    // function to get offer by unique offer_id
    static function get_offer_by_unique_id_for_user($unique_id) {
        $offer = Offer::where('orderId', $unique_id);
        if ( $offer->exists() ) {

            // if user not own this order
            if ( $offer->first()->user_id != Auth::user()->id ) {
                return null;
            }

            return Offer::where('orderId', $unique_id)->limit(1)->get();
        }else {
            return null;
        }
    }


    // function to calculate the total kamas sold
    static function total_kamas_buys() {
        $offers = Offer::select('quantity')->where('status', 'paye')->get();
        $total  = 0;
        foreach ( $offers as $offer ) {
            $total = $total + $offer->quantity;
        }
        return $total;
    }


    // function to generate offer uuid
    static function generate_offer_uuid($lenght = 8) {
        // generate new uui
        $uuid = str::random($lenght);
        do {
            return $uuid;
        } while ( !Offer::where('uuid', $uuid)->exists() );
    }


    // function to get the owner of order
    public function user($user_id) {
        return User::where('id', $user_id)->first();
    }

    // function to get server by id
    public function server($id) {
        return Server::where('id', $id)->first();
    }


    // function to get offer server
    public function offer_server($id) {
        return OfferServer::where('id', $id)->first();
    }

    // function to get map by server_id
    public function map($server_id) {
        $map_id = $this->server($server_id)->first()->map_id;
        return Map::where('id', $map_id)->first();
    }



    // function to get map by server_id
    public function offerMap($server_id) {
        $map_id = $this->offer_server($server_id)->first()->map_id;
        return Map::where('id', $map_id)->first();
    }




    // function to get map by server_id
    public function getOfferMap($server_id) {
        $server = OfferServer::where('id', $server_id)->first();
        $map = Map::where('id', $server->map_id)->first();
        return $map;
    }



    /**
     * Get the server that owns the Offer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendre_server()
    {
        return $this->belongsTo(OfferServer::class, 'server_id');
    }


}
