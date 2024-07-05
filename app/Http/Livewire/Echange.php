<?php

namespace App\Http\Livewire;

use App\Models\Server;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Echange extends Component
{

    public $servers;
    public $server_from;
    public $server_to;

    public $quantite_a_donner;
    public $quantite_a_recevoir;
    public $nom_en_jeu;
    public $nom_en_jeu_deuxieme;


    protected $rules = [
        'quantite_a_donner' => 'required',
        'nom_en_jeu' => 'required',
        'nom_en_jeu_deuxieme' => 'required',
    ];


    public function mount() {
        $servers = $this->servers->toArray();
        $server_from = reset($servers)['id'];
        $server_to = end($servers)['id'];

        $this->server_from = $this->servers->where('id', $server_from)->first();
        $this->server_to = $this->servers->where('id', $server_to)->first();
    }

    public function render()
    {
        return view('livewire.frontend.echange');
    }


    // function to change server ( FROM )
    public function change_server_from( $server_id ) {
        $this->server_from = $this->servers->where('id', $server_id)->first();
        $new_server = $this->servers->where('id', $server_id)->first();
        $this->server_from = $new_server;
    }

    // function to change server ( TO )
    public function change_server_to( $server_id ) {
        $this->server_to = $this->servers->where('id', $server_id)->first();
        $new_server = $this->servers->where('id', $server_id)->first();
        $this->server_to = $new_server;
    }


    // function to pass the echange order 
    public function save_echange() {
        $this->validate();
    }
}
