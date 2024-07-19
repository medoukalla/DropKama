<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Notifications\ConfirmFacturation;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;
use Livewire\Component;

class OrderDetails extends Component
{
    use Notifiable;

    public $facturation_steps = 1;

    public $order;

    public $validation_code;
    public $email = 'email@gmail.com';
    public $nom_et_prenom;
    public $telephone;
    public $ville;
    public $discord;
    public $code;


    public function mount() {
        // get user info from db for logged in user
        // generate a verification code 
        $ref = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);
        $this->validation_code = $ref;
    }

    public function render()
    {
        return view('livewire.order-details');
    }


    // function to hundle the facturation 
    public function send_validation() {
        // send validation code to email 
        $user = User::where('id', 4)->first();
        try {
            $user->notify( new ConfirmFacturation($this->validation_code, $this->order));
            $this->facturation_steps = 2;
        } catch (\Throwable $th) {
            //throw $th;
        }   
    }


    // validate the validation code
    public function validate_code() {
        $validatedData = $this->validate([
            'code' => 'required'
        ]);

        if ( $this->code != $this->validation_code) {
            return $this->addError('code', 'Code de validation incorrect! Veuillez réessayer');
        }

        // move to next step 
        $this->facturation_steps = 3;
    }


    // function to finish the facturation last step 
    public function finish_facturation() {
        $validatedData = $this->validate([
            'nom_et_prenom' => 'required',
            'discord' => 'required',
            'telephone' => 'required',
            'ville' => 'required',
        ]);

        // update order data  ( facturation data )
        $this->order->facturation_name = $this->nom_et_prenom;
        $this->order->facturation_discrod = $this->discord;
        $this->order->facturation_email = $this->email;
        $this->order->facturation_code = $this->validation_code;
        $this->order->facturation_city = $this->ville;
        $this->order->facturation_phone = $this->telephone;
        $this->order->facturation_agree = true;

        // change order statys
        $this->order->facturer = true;
        $this->order->save();
    }


    // function to accept the livraison step 
    public function accept_livraison() {
        $this->order->liviser = true;
        $this->order->save();
    }

}
