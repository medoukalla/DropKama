<?php

namespace App\Notifications;

use App\Models\Server;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCancelled extends Notification
{
    use Queueable;

    public $user;
    public $order;
    public $serverName;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
        $this->user  = User::where('id', $order->user_id)->first();

        $this->serverName = Server::select('name')->where('id', $order->server_id)->first()->name;

        // set currency
        if ( $order->payment == 'cih' ) {
            $this->currency = 'MAD';
        }
    }



    public function routeNotificationForMail($notification)
    {
        // Return email address only...
        return $this->user->email;
 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject('Commande annulée')
                ->markdown('mail.OrderCancelledNotification', [
                    'username'   => $this->user->name,
                    'useremail' => $this->user->email,
                    'reference'   => $this->order->orderId,
                    'date'  => $this->order->created_at,
                    'servername' => $this->serverName,
                    'mod_payment' => $this->order->payment,
                    'quantity'  => $this->order->quantity.'.000.000',
                    'total' => $this->order->total,
                    'currency' => $this->currency
                ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'order_ref' => $this->order->orderId,
            'total'     => $this->order->total,
            'type'      => "Achat",
            'date'      => $this->order->created_at,
            'status'    => __('main.cancelled')
        ];
    }
}
