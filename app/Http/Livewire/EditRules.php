<?php

namespace App\Http\Livewire;

use Livewire\Component;
use TCG\Voyager\Models\Role;

class EditRules extends Component
{

    
    public function render()
    {

        $roles = Role::get();

        return view('livewire.edit-rules',[
            'roles' => $roles,
            'role' =>$roles->first()
        ]);
    }
}
