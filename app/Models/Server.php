<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Server extends Model
{
    // function to get all servers 
    static function servers() {
        return Server::all();
    }


    // get servers based in map name 
    static function map_servers( $map_nam ) {
        // get map id when name like given map_nam
        $map = Map::where('name','LIKE',"%{$map_nam}%");
        if ( $map->exists() ) {
            $map = $map->first();
            return Server::where('map_id', $map->id)->get();
        }
    }
}
