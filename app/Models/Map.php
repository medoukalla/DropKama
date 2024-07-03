<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    // function to get all maps ( get_all_maps => maps )
    static function maps() {
        return Map::orderBy('id', 'desc')->get();
    }

    /**
     * Get all of the servers for the Map
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servers() {
        return $this->hasMany(Server::class, 'map_id' );
    }

    

}
