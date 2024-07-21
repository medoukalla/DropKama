<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EchangeCompleted extends Notification
{
    use Queueable;

    public $user;
    public $echange;
    public $serverName;
    public $status;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user,$echange)
    {
        $this->user = $user;
        $this->echange = $echange;

        $this->echange = $echange;
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
                    ->subject("Votre echange et terminé")
                    ->markdown('mail.EchangeCompletedNotification', [
                        'username'   => $this->user->name,
                        'useremail' => $this->user->email,
                        'reference'   => $this->echange->orderId,
                        'date'  => $this->echange->created_at,
                        'servername' => $this->serverName,
                        'mod_payment' => '',
                        'quantity'  => $this->echange->quantity,
                        'total' => $this->echange->total,
                        'currency' => $this->currency,
                        'route' => route('voyager.exchanges.index')
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
            'order_ref' => $this->echange->orderId,
            'total'     => $this->echange->total,
            'type'      => "Vendre",
            'date'      => $this->echange->created_at,
            'status'    => 'paye',
            'route'     => route('voyager.exchanges.index')
        ];
    }
}
