<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GetServers extends Component
{

    public $map;

    public function render()
    {
        return view('livewire.frontend.get-servers');
    }
}
