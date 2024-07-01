<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use TCG\Voyager\Models\Role;
use Carbon\Carbon;
use App\Notifications\PasswordReset;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the role that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }


    // function to get all users ( without admins )
    static function get_users() {
        return User::where('is_admin', false)->orderBy('id', 'desc')->simplePaginate(10);
    }


    // function to calculate the total amount of tokens user buys
    public function get_user_total_buys($user_id) {

        $user = User::where('id', $user_id);

        if ( $user->exists() ) {

            // get completed buy order
            $orders = Order::select('quantity')->where('type', 'buy')->where('user_id', $user_id)->where('order_completed', true)->get();

            if ($orders->count() > 0) {
                // total
                $total = 0;

                foreach ($orders as $order) {
                    $total = $total + $order->quantity;
                }

                return $total;

            }else {
                return 0;
            }
        }else {
            return 0;
        }
    }


    // function to calculate the total amount of tokens user buys
    public function get_user_total_sells($user_id) {
        $user = User::where('id', $user_id);
        if ( $user->exists() ) {
            // get completed buy order
            $orders = Order::select('quantity')->where('type', 'sell')->where('user_id', $user_id)->where('order_completed', true)->get();

            if ($orders->count() > 0) {
                // total
                $total = 0;

                foreach ($orders as $order) {
                    $total = $total + $order->quantity;
                }

                return $total;

            }else {
                return 0;
            }
        }else {
            return 0;
        }
    }

    public function get_user_total_offers($user_id) {
        $user = User::where('id', $user_id);
        if ( $user->exists() ) {
            // get completed buy order
            // $orders = Order::select('quantity')->where('type', 'sell')->where('user_id', $user_id)->where('order_completed', true)->get();
            $offers = Offer::select('quantity')->where('user_id', $user_id)->where('status', 'paye')->get();

            if ($offers->count() > 0) {
                // total
                $total = 0;

                foreach ($offers as $offer) {
                    $total = $total + $offer->quantity;
                }

                return $total;

            }else {
                return 0;
            }
        }else {
            return 0;
        }
    }



    // function to return the total users in platform
    static public function get_total_users() {
        return User::count();
    }


    // function to get users registered in current month
    static function get_current_month_new_users() {
        return User::whereMonth('created_at', Carbon::now()->month)->count();
    }


    // function to get user info by id
    static public function get_user($user_id) {
        return User::where('id', $user_id)->first();
    }


    // function to get user discord from last order
    static public function get_last_discord($user_id) {
        return Order::select('facturation_discrod')->where('user_id', $user_id)->orderBy('id', 'desc')->first()->facturation_discrod;
    }

    // function to get user discord from last order
    static public function get_last_phone($user_id) {
        return Order::select('facturation_phone')->where('user_id', $user_id)->orderBy('id', 'desc')->first()->facturation_phone;
    }

    /**
     * get number of exchanges made by a user 
     */
    static function user_total_exchanges( $user_id ) {
        return Exchange::select('id')->where('user_id', $user_id)->where('status', 'completed')->count();
    }
}
