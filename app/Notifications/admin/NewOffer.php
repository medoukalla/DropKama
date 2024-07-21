<?php

namespace App\Notifications\admin;

use App\Models\OfferServer;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewOffer extends Notification
{
    use Queueable;

    public $offer;
    public $user;
    public $serverName;
    public $status;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($offer)
    {
        $this->offer = $offer;
        $this->user = User::where('id', $offer->user_id)->first();
        $this->serverName = OfferServer::select('name')->where('id', $offer->server_id)->first()->name;
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
                    ->subject("Vous avez une nouvelle offre de : ".$this->user->name)
                    ->line('User name : '.$this->user->name)
                    ->line('User email : '.$this->user->email)
                    ->line('Reference : '.$this->offer->orderId)
                    ->line('Server name : '.$this->serverName)
                    ->line('Quantity : '.$this->offer->quantity.'.000.000')
                    ->line('Currency : '.$this->currency)
                    ->action('Aller au tableau de bord', route('voyager.offers.index'));
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
