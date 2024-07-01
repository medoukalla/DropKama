<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class OfferServer extends Model
{
    use HasFactory;

    // function to get all servers
    static function get_all_servers() {
        return OfferServer::orderBy('id', 'desc')->simplePaginate(10);
    }

    // function to get all offer server without paginate for frontend vendre table
    static function get_all_servers_for_table() {
        return OfferServer::orderBy('id', 'desc')->get();
    }

    // function to get map servers
    static function get_map_servers($map_id) {
        return OfferServer::where('map_id', $map_id)->orderBy('id', 'desc')->get();
    }


    // function to generate order uuid 
    static function generate_order_uuid($lenght = 6) {
        // generate new uui
        $uuid = str::random($lenght);
        do { 
            return $uuid;
        } while ( !OfferServer::where('uuid', $uuid)->exists() );
    }
    
    // function to get the offerServer map
    public function map($map_id){
        return Map::where('id', $map_id)->first();
    }

}
