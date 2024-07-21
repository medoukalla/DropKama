<?php

namespace App\Notifications;

use App\Models\Server;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderPaymentConfirmed extends Notification
{
    use Queueable;

    public $user;
    public $order;
    public $serverName;
    public $status;
    public $currency = '€';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user, $order)
    {
        $this->user = $user;
        $this->order = $order;
        $this->serverName = Server::select('name')->where('id', $order->server_id)->first()->name;


        // get status
        if ( $order->payed == false ) {
            $this->status = __('main.waiting_payment');
        }elseif ( $order->payed == true && $order->payment_verified == false )  {
            $this->status = __('main.verification_payment');
        }elseif ( $order->payment_verified == true && $order->facturer == false )  {
            $this->status = __('main.waiting_facturation');
        }elseif ( $order->facturer == true && $order->liviser == false )  {
            $this->status = __('main.waiting_liviser');
        }elseif ( $order->liviser == true && $order->delivered == false )  {
            $this->status = __('main.waiting_delivered');
        }elseif ( $order->delivered )  {
            $this->status = __('main.delivered');
        }

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
                    ->subject('Votre paiement est vérifié')
                    ->markdown('mail.OrderPaymentConfirmedNotification', [
                        'username'   => $this->user->name,
                        'useremail' => $this->user->email,
                        'reference'   => $this->order->reference,
                        'date'  => $this->order->created_at,
                        'servername' => $this->serverName,
                        'mod_payment' => $this->order->payment,
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
            //
        ];
    }
}
