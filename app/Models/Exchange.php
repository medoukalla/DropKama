<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Auth;

class Exchange extends Model
{
    use HasFactory;

    protected $table = 'exchanges';

    protected $fillable = ['id','from_server','to_server','from_user', 'to_user', 'quantity', 'status', 'quantity_get', 'user_id'];

    /**
     * Get the user associated with the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    static function generate_echange_uuid($lenght = 8) {
        // generate new uui
        $uuid = str::random($lenght);
        do {
            return $uuid;
        } while ( !Exchange::where('orderId', $uuid)->exists() );
    }

    /**
     * Get the server that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server() {
        return $this->belongsTo(Server::class, 'from_server');
    }

    /**
     * Get the server_from that owns the Exchange
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server_from()
    {
        return $this->belongsTo(Server::class, 'from_server');
    }


    /**
     * Get the server_to that owns the Exchange
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function server_to()
    {
        return $this->belongsTo(Server::class, 'to_server');
    }

    public function from_server( $server_id ) {
        return Server::where('id', $server_id)->first();
    } 


    public function to_server( $server_id ) {
        return Server::where('id', $server_id)->first();
    } 




    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exchange_from() {
        return $this->belongsTo(Server::class, 'from_server');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function exchange_to() {
        return $this->belongsTo(Server::class, 'to_server');
    }

}
