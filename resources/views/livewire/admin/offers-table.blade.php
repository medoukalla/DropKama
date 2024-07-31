<div>
    
    <div class="card-datatable table-responsive">
        <table class="datatables-users table">
            <thead class="border-top">
                <tr class="default tb__head_clr">
                    <th scope="col">Ref</th>
                    <th scope="col">Email</th>
                    <th scope="col">Serveur</th>
                    <th scope="col">Nom du personnage</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Mode de paiement</th>

                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ( $offers  as $offer )
                    @php
                        if ( $offer->status == 'pending' ) {
                            $offer_status = '<span class="badge  bg-label-warning">En attente</span>';
                        }elseif ( $offer->status == 'progress' ) {
                            $offer_status = '<span class="badge  bg-label-warning">En cours</span>';
                        }elseif ( $offer->status == 'cancelled' ) {
                            $offer_status = '<span class="badge  bg-label-danger">Annulé</span>';
                        }elseif ( $offer->status == 'completed' ) {
                            $offer_status = '<span class="badge  bg-label-success">Complété</span>';
                        }
                    @endphp
                    <tr >
                        <th scope="row">{{ $offer->orderId }}</th>
                        <td>{{ $offer->email }}</td>
                        <td>{{ $offer->server->map->name.' / '.$offer->server->name }}</td>
                        <td>{{ $offer->game_id }}</td>
                        <td>{{ $offer->quantity * 1 }} Millions</td>
                        <td>
                            {{ $offer->total * 1 }}
                            @if ( $offer->payment->svg_name == 'cih' )
                                DH
                            @elseif ( $offer->payment->svg_name == 'usdt' )
                                $
                            @else
                                €
                            @endif
                        </td>
                        <td>{{ $offer->payment->name }}</td>

                        <td>{!! $offer_status !!}</td>
                        <td>
                            <button wire:click="open_offer({{ $offer->id }})" class="btn btn-sm btn-label-warning waves-effect  pull-right view">
                                Afficher
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    
        </table>
        <br>
        
        {{ $offers->links('vendor.pagination.bootstrap-4') }}
    </div>

    <div class="offcanvas offcanvas-end @if ( $active_offer == true ) show @endif " tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasEditLabel">
        @if ( !is_null( $selected_offer ) )    
            <div class="offcanvas-header">
                <h5 id="offcanvasEditLabel" class="offcanvas-title">Détails de l'offre : {{ $selected_offer->orderId  }}</h5>
            <button wire:click="close_offer()" type="button" class="btn-close text-reset"  aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
               
                <h4>Information de l'utilisateur :</h4>

                <h5>Nom : {{ $selected_offer->name }}</h5>
                <h5>Adresse email : {{ $selected_offer->email }}</h5>
                <h5>Game id : {{ $selected_offer->game_id }}</h5>
                <h5>Map / Serveur : {{ $selected_offer->server->map->name.' / '.$selected_offer->server->name }}</h5>
                <h5>Quantité : {{ $selected_offer->quantity * 1 }} M</h5>
                <h5>Discord : {{ $selected_offer->discrod }}</h5>
                <h5>Mode de paiement : {{ $selected_offer->payment->name }}</h5>
                
                <h5 class="@if( is_null($selected_offer->payment_info ) ) d-none @endif" >Paiement info : {{ $selected_offer->payment_info }}</h5>
                <h5 class="@if( is_null($selected_offer->payment_info_b ) ) d-none @endif" >Paiement info : {{ $selected_offer->payment_info_b }}</h5>

                <h5>Montant à payer : {{ $selected_offer->total * 1 }}
                    @if ( $selected_offer->payment->svg_name == 'cih' )
                        DH
                    @elseif ( $selected_offer->payment->svg_name == 'usdt' )
                        $
                    @else
                        €
                    @endif
                </h5>
                <hr>


                <h4>Statut de l'offre</h4>
                @php
                    if ( $selected_offer->status == 'pending' ) {
                        $selected_offer_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">En attente</span>';
                    }elseif ( $selected_offer->status == 'progress' ) {
                        $selected_offer_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">En cours</span>';
                    }elseif ( $selected_offer->status == 'cancelled' ) {
                        $selected_offer_status = '<span class="badge mb-3 w-100 fs-5  bg-label-danger">Annulé</span>';
                    }elseif ( $selected_offer->status == 'completed' ) {
                        $selected_offer_status = '<span class="badge mb-3 w-100 fs-5  bg-label-success">Complété</span>';
                    }
                @endphp
                {!! $selected_offer_status !!}

                <hr>
                <br>

                <div wire:loading class="text-center" style=" margin-top: -30px; margin-bottom: 15px; " >
                    <img style=" max-width: 20%; text-align: center; " src="{{ asset('loading.gif')}}" alt="">
                </div>

                @if ( Auth::user()->role->id != 2 )
                    

                    {{-- button to finish the order  --}}
                    <button wire:click="finish_offer()" class="btn btn-success w-100 mb-3 @if ( $selected_offer->status == 'cancelled' || $selected_offer->status == 'completed' ) d-none @endif" title="Cliquez pour fermer cette offre lorsqu'elle est terminée">Terminez cette offre</button>
                    
                    
                    <button wire:click="cancel_offer()" class="btn btn-danger w-100 mb-3 @if ( $selected_offer->status == 'cancelled' || $selected_offer->status == 'completed' ) ) d-none @endif " title="Cliquez pour rejeter cette offre">Rejeter cette offre</button>

                @endif

                <button  wire:click="close_offer()" type="reset" class="btn btn-label-secondary w-100" >Fermer la fenêtre</button>


            </div>
        @endif
    </div>
</div>