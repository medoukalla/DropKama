<div>
    
    <div class="card-datatable table-responsive">
        <table class="datatables-users table">
            <thead class="border-top">
                <tr class="default tb__head_clr">
                    <th scope="col">REF</th>
                    <th scope="col">Serveur à échanger</th>
                    <th scope="col">Serveur souhaité</th>
                    <th scope="col">Personnage à payer</th>
                    <th scope="col">Personnage à recevoir</th>
                    <th scope="col">Quantité à donner</th>
                    <th scope="col">Quantité à recevoir</th>
                    <th scope="col">Etat</th>
                    <th>Actions</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ( $echanges  as $echange )
                    @php
                        if ( $echange->status == 'pending' ) {
                            $echange_status = '<span class="badge  bg-label-warning">En attente</span>';
                        }elseif ( $echange->status == 'progress' ) {
                            $echange_status = '<span class="badge  bg-label-warning">En cours</span>';
                        }elseif ( $echange->status == 'canceled' ) {
                            $echange_status = '<span class="badge  bg-label-danger">Annulé</span>';
                        }elseif ( $echange->status == 'completed' ) {
                            $echange_status = '<span class="badge  bg-label-success">Complété</span>';
                        }
                    @endphp
                    <tr>
                        <td scope="row">{{ $echange->orderId }}</td>
                        <td scope="row">{{ @$echange->exchange_from->name }}</td>
                        <td scope="row">{{ @$echange->exchange_to->name }}</td>
                        <td scope="row">{{ $echange->from_name }}</td>
                        <td scope="row">{{ $echange->to_name }}</td>
                        <td scope="row">{{ $echange->quantity  }}M</td>
                        <td scope="row">{{ $echange->quantity_get  }}M</td>
                        <td scope="row">{!! $echange_status !!}</td>
                        <td>
                            <button wire:click="open_echange({{ $echange->id }})" class="btn btn-sm btn-label-warning waves-effect  pull-right view">
                                Afficher
                            </button>


                        </td>
                    </tr>
                @endforeach
            </tbody>
    
        </table>
        <br>
        
        {{ $echanges->links('vendor.pagination.bootstrap-4') }}
    </div>

    <div class="offcanvas offcanvas-end @if ( $active_echange == true ) show @endif " tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasEditLabel">
        @if ( !is_null( $selected_echange ) )    
            <div class="offcanvas-header">
                <h5 id="offcanvasEditLabel" class="offcanvas-title">Détails de l'échange : {{ $selected_echange->orderId  }}</h5>
            <button wire:click="close_echange()" type="button" class="btn-close text-reset"  aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
               
                <h4>Information de l'utilisateur :</h4>

                <h5>Nom : {{ $selected_echange->user->name }}</h5>
                <h5>Username : {{ $selected_echange->user->username }}</h5>
                <h5>Adresse email : {{ $selected_echange->user->email }}</h5>
                <h5>Numéro de téléphone : {{ $selected_echange->user->phone }}</h5>

                <hr>

                <h4>Serveur à prendre : </h4>

                <h5>Map / Serveur : {{ $selected_echange->server_from->map->name.' / '.$selected_echange->server_from->name }}</h5>
                <h5>Quantité à donner : {{ $selected_echange->quantity }} M</h5>
                <h5>Personnage à payer : {{ $selected_echange->from_name }}</h5>
                                
                <hr>

                <h4>Serveur à donner : </h4>

                <h5>Map / Serveur : {{ $selected_echange->server_to->map->name.' / '.$selected_echange->server_to->name }}</h5>
                <h5>Quantité à recevoir : {{ $selected_echange->quantity }} M</h5>
                <h5>Personnage à recevoir : {{ $selected_echange->to_name }}</h5>

                                
                <hr>


                <h4>Statut de l'échange </h4>
                @php
                    if ( $selected_echange->status == 'pending' ) {
                        $selected_echange_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">En attente</span>';
                    }elseif ( $selected_echange->status == 'progress' ) {
                        $selected_echange_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">En cours</span>';
                    }elseif ( $selected_echange->status == 'canceled' ) {
                        $selected_echange_status = '<span class="badge mb-3 w-100 fs-5  bg-label-danger">Annulé</span>';
                    }elseif ( $selected_echange->status == 'completed' ) {
                        $selected_echange_status = '<span class="badge mb-3 w-100 fs-5  bg-label-success">Complété</span>';
                    }
                @endphp
                {!! $selected_echange_status !!}

                <hr>
                <br>

                <div wire:loading class="text-center" style=" margin-top: -30px; margin-bottom: 15px; " >
                    <img style=" max-width: 20%; text-align: center; " src="{{ asset('assets/img/loading.gif')}}" alt="">
                </div>

                @if ( Auth::user()->role->id == 1 )
                    

                    {{-- button to finish the order  --}}
                    <button wire:click="finish_echange()" class="btn btn-success w-100 mb-3 @if ( $selected_echange->status == 'canceled' || $selected_echange->status == 'completed' ) d-none @endif" title="Cliquez pour fermer cette échange lorsqu'elle est terminée">Terminez cette échange</button>
                    
                    
                    <button wire:click="cancel_echange()" class="btn btn-danger w-100 mb-3 @if ( $selected_echange->status == 'canceled' || $selected_echange->status == 'completed' ) ) d-none @endif " title="Cliquez pour rejeter cette échange">Rejeter cette échange</button>

                @endif

                <button  wire:click="close_echange()" type="reset" class="btn btn-label-secondary w-100" >Fermer la fenêtre</button>


            </div>
        @endif
    </div>
</div>