<?php

namespace App\Http\Livewire;

use App\Models\Notification;
use Livewire\Component;
use Auth;
use Carbon\Carbon;

class Notifications extends Component
{

    public $unreded_notifications = 0;

    public function mount() {
        // dd( Auth::user()->unreadNotifications );
        $this->unreded_notifications = Auth::user()->unreadNotifications->count();
    }
    
    public function render()
    {
        // if is client or other 
        if ( Auth::user()->role->id == 2 ) {
            $notifs = Notification::where('notifiable_id', Auth::user()->id )->where('read_at', null)->orderBy('created_at', 'desc')->limit(10)->get();
        }else {
            $notifs = Notification::where('notifiable_id', '!=', Auth::user()->id )->where('read_at', null)->orderBy('created_at', 'desc')->limit(10)->get();
        }

        return view('livewire.notifications',[
            'notifications' => $notifs
        ]);
    }


    public function mark_as_read( $id ) {
        $notif = Notification::where('id', $id)->first();
        $notif->update(['read_at' => now()]);
        // $notif->read_at = Carbon::now();
        // $notif->save();
        // dd($notif);
    }
}
