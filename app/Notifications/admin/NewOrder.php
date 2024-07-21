<?php

namespace App\Notifications\admin;

use App\Models\Server;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOrder extends Notification
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
        return ['mail'];
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
                    ->subject("Vous avez une nouvelle commande de : ".$this->user->name)
                    ->line('User name : '.$this->user->name)
                    ->line('User email : '.$this->user->email)
                    ->line('Reference : '.$this->order->reference)
                    ->line('Server name : '.$this->serverName)
                    ->line('Quantity : '.$this->order->quantity')
                    ->line('Currency : '.$this->currency)
                    ->action('Aller au tableau de bord', route('orders.index'));
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
            //
        ];
    }
}
