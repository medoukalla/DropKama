<?php

namespace App\Http\Livewire;

use App\Models\Newsletter as ModelsNewsletter;
use Livewire\Component;

class Newsletter extends Component
{

    public $email;

    public $status = false;

    public function render()
    {
        return view('livewire.newsletter');
    }


    public function save_email() {
        $this->status = false;
        $validatedData = $this->validate([
            'email' => 'required|email|unique:newsletters|max:50'
        ]);

        // save in database 
        $newemail = new ModelsNewsletter();
        $newemail->email = $this->email;
        if ( $newemail->save() ) {
            $this->status = true;
            $this->email = null;
        }
    }
}
