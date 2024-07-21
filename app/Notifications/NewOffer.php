<?php

namespace App\Notifications;

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
                    ->subject("Votre commande de vente a bien été prise en compte")
                    ->markdown('mail.NewOfferNotification', [
                        'username'   => $this->user->name,
                        'useremail' => $this->user->email,
                        'reference'   => $this->offer->orderId,
                        'date'  => $this->offer->created_at,
                        'servername' => $this->serverName,
                        'mod_payment' => $this->offer->payment->name,
                        'quantity'  => $this->offer->quantity,
                        'total' => $this->offer->total,
                        'currency' => $this->currency,
                        'route' => route('voyager.offers.index')
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
            'order_ref' => $this->offer->orderId,
            'total'     => $this->offer->total,
            'type'      => 'Vendre',
            'date'      => $this->offer->created_at,
            'status'    => 'en cours'
        ];
    }
}
