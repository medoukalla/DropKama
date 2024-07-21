<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\OfferServer;
use App\Models\User;

class EchangeCancelled extends Notification
{
    use Queueable;

    public $user;
    public $echange;
    public $serverName;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($echange)
    {
        $this->echange = $echange;
        $this->user  = User::where('id', $echange->user_id)->first();

        $this->serverName = '';

        // set currency
        if ( $echange->payment == 'cih' ) {
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
            ->subject("Votre échange n'est pas acceptée")
            ->markdown('mail.EchangeCancelledNotification', [
                'username'   => $this->user->name,
                'useremail' => $this->user->email,
                'reference'   => $this->echange->orderId,
                'date'  => $this->echange->created_at,
                'servername' => $this->serverName,
                'mod_payment' => '',
                'quantity'  => $this->echange->quantity,
                'total' => $this->echange->total,
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
            //
        ];
    }
}
