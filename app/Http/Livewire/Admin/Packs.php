<?php

namespace App\Http\Livewire\Admin;

use App\Option;
use App\PackOption;
use Illuminate\Support\Arr;
use Livewire\Component;

class Packs extends Component
{

    public $packs;


    // add new option
    public $option = null;
    
    public $optionPack = [];

    public $status = null;
    public $status_message;

    public function render()
    {
        return view('livewire.admin.packs',[
            'packs' => $this->packs
        ]);
    }


    function save_option() {
        if ( is_null( $this->option ) ) {
            return $this->addError('option','Option is required');
        }
        if ( count( $this->optionPack) > 0 ) {

            // save option and return id 
            $save_option = new Option();
            $save_option->title = $this->option;
            $save_option->status = 1;
            
            if ( $save_option->save() ) {
                
                $option_id = $save_option->id;

                foreach ( $this->optionPack as $id ) {
                    $new = new PackOption();
                    $new->pack_id = $id;
                    $new->option_id = $option_id;
                    
                    if ( $new->save() ) {
                        $this->option = null;
                        $this->optionPack = [];
                        $this->status = 'success';
                        $this->status_message = "Option added successfully";
                    }

                    
                }
            }

        }
    }
}
