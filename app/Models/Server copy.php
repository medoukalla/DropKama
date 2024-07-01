<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Map;

class Server extends Model
{
    use HasFactory;

    // function to get all servers
    static function get_all_servers() {
        return Server::orderBy('id', 'desc')->simplePaginate(10);
    }

    // function to get map servers
    static function get_map_servers($map_id) {
        return Server::where('map_id', $map_id)->orderBy('id', 'desc')->get();
    }

    static function get_servers_by_map_filter($filter) {

        $map_id = Map::select('id')->where('name', $filter)->first()->id;
        return Server::where('map_id', $map_id)->get();
    }

    // function to get all servers from maps exept for one map
    static function get_servers_exclude($filter) {

        $map_id = Map::select('id')->where('name', $filter)->first()->id;

        return Server::where('map_id', '!=', $map_id)->get();

    }


    // function to get the server map
    public function map($map_id){
        return Map::where('id', $map_id)->first();
    }


    // function to get server price in DH based on euro 
    static function mad_price( $price ) {
        $val = Setting::select('euro_to_mad')->first()->euro_to_mad;
        return $price * $val;
    }

    // function to get server price in USD based on euro
    static function usd_price( $price ) {
        $val = Setting::select('euro_to_usd')->first()->euro_to_usd;
        return $price * $val;
    }


    // create function to get price_buy from the vendre price 
    public function price_buy( $server_name ) {
        // get vendre server buy the name 
        $server = OfferServer::where('name', $server_name);
        if ( $server->exists()) {
            $server = $server->first();
            return $server->skrill_price;
        }
    }

    /**
     * Get the map that owns the Server
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mmap() {
        return $this->belongsTo(Map::class, 'map_id');
    }
}
