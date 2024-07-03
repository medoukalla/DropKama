<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;

class GetServers extends Component
{

    public $map;

    public $servers;

    public function mount() {
        if ( is_null( $this->map ) ) {
            $this->servers = Server::servers();
        }else {
            $this->servers = Server::map_servers($this->map);
        }
    }

    public function render()
    {
        return view('livewire.frontend.get-servers');
    }
}
