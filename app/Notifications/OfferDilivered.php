<?php

namespace App\Notifications;

use App\Models\OfferServer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OfferDilivered extends Notification
{
    use Queueable;

    public $user;
    public $offer;
    public $serverName;
    public $status;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$offer)
    {
        $this->user = $user;
        $this->offer = $offer;

        $this->offer = $offer;
        $this->serverName = OfferServer::select('name')->where('id', $offer->server_id)->first()->name;

        // set currency 
        if ( $offer->payment == 'cih' ) {
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
                    ->subject("Votre commande de vente terminé")
                    ->markdown('mail.OfferDeliveredNotification', [
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
            'type'      => "Vendre",
            'date'      => $this->offer->created_at,
            'status'    => 'paye'
        ];
    }
}
