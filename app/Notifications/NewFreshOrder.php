<?php

namespace App\Notifications;

use App\Models\Server;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewFreshOrder extends Notification
{
    use Queueable;


    public $order;
    public $user;
    public $serverName;
    public $status;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
        $this->user = User::where('id', $order->user_id)->first();
        $this->serverName = Server::select('name')->where('id', $order->server_id)->first()->name;

        $this->status = 'Vérification du paiement';

        // set currency
        if ( $order->payment == 'cih' ) {
            $this->currency = 'MAD';
        }
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
                ->subject("Votre commande a bien été prise en compte")
                ->markdown('mail.NewFreshOrderNotification',[
                    'username'   => $this->user->name,
                    'useremail' => $this->user->email,
                    'reference'   => $this->order->reference,
                    'date'  => $this->order->created_at,
                    'servername' => $this->order->server->name,
                    'mod_payment' => $this->order->payment->name,
                    'quantity'  => $this->order->quantity,
                    'total' => $this->order->total,
                    'currency' => $this->currency,
                    'status' => $this->status,
                    'route' => route('frontend.order.details', ['ref'=>$this->order->reference])
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
            'order_ref' => $this->order->reference,
            'total'     => $this->order->total,
            'type'      => 'Achat',
            'date'      => $this->order->created_at,
            'status'    => $this->status
        ];
    }
}
