<div>
    
    <div class="card-datatable table-responsive">
        <table class="datatables-users table">
            <thead class="border-top">
                <tr>
                    <th>Ref</th>
                    <th>Map / Serveur</th>
                    <th>Quantité</th>
                    <td>Equivalent</td>
                    <td>Personnage</td>
                    <td>Paiement</td>
                    <td>Statut</td>
                    <th>Action</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach ( $orders  as $order )
                    @php
                        if ( !is_null( $order->deleted_at ) ) {
                            $status = '<span class="badge  bg-label-danger">Rejected</span>';
                        }else{
                            if ($order->payed == false) {
                                $status = '<span class="badge  bg-label-info">En Attente de payment</span>';
                            } elseif ($order->payed == true && $order->payment_verified == false) {
                                $status = '<span class="badge  bg-label-info">Verification de paiment</span>';
                            } elseif ($order->payment_verified == true && $order->facturer == false) {
                                $status = '<span class="badge  bg-label-warning">Information de facturation</span>';
                            } elseif ($order->facturer == true && $order->liviser == false) {
                                $status = '<span class="badge  bg-label-warning">Information de livraison</span>';
                            } elseif ($order->liviser == true && $order->delivered == false) {
                                $status = '<span class="badge  bg-label-warning">En cours de livraison</span>';
                            } elseif ($order->delivered) {
                                $status = '<span class="badge  bg-label-success">Livré</span>';
                            }
                        }
                    @endphp
                    <tr>
                        <td>{{ $order->reference }}</td>
                        <td>{{ $order->server->map->name }} / {{ $order->server->name }}</td>
                        <td>{{ $order->quantity / 1 }} M</td>
                        <td>{{ $order->total }} $</td>
                        <td>{{ $order->username }}</td>
                        <td>{{ $order->payment->name }}</td>
                        <td>{!! $status !!}</td>
                        <td>
                            <button wire:click="open_order({{ $order->id }})" class="btn btn-sm btn-label-warning waves-effect  pull-right view">
                                Afficher
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    
        </table>
        <br>
        
        {{ $orders->links('vendor.pagination.bootstrap-4') }}
    </div>

    <div class="offcanvas offcanvas-end @if ( $active_order == true ) show @endif " tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasEditLabel">
        @if ( !is_null( $selected_order ) )    
            <div class="offcanvas-header">
                <h5 id="offcanvasEditLabel" class="offcanvas-title">Détails de la commande : {{ $selected_order->reference  }}</h5>
            <button wire:click="close_order()" type="button" class="btn-close text-reset"  aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0 pt-0 h-100">
               
                <h4>Information de l'utilisateur :</h4>

                <h5>Nom : {{ $selected_order->user->name }}</h5>
                <h5>Adresse email : {{ $selected_order->user->email }}</h5>
                <h5>Numéro de téléphone : {{ $selected_order->user->phone }}</h5>

                <hr>
                <h4>Information de facturation</h4>

                <h5>Nom : {{ $selected_order->facturation_name }}</h5>
                <h5>Discord : {{ $selected_order->facturation_discrod }}</h5>
                <h5>Email : {{ $selected_order->facturation_email }}</h5>
                <h5>Ville : {{ $selected_order->facturation_city }}</h5>
                <h5>Numéro de téléphone : {{ $selected_order->facturation_phone }}</h5>

                <hr>

                <h4>Informations de livraison</h4>
                <h5>Game id : {{ $selected_order->user->game_id }}</h5>
                <h5>Map / Serveur : {{ $selected_order->server->map->name.' / '.$selected_order->server->name }}</h5>
                <h5>Quantité : {{ $selected_order->quantity / 1 }} M</h5>
                <h5>Mode de paiement : {{ $selected_order->payment->name }}</h5>

                <hr>

                <h4>Statut de la commande</h4>
                @php
                    if ( !is_null( $selected_order->deleted_at ) ) {
                        $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-danger">Rejected</span>';
                    }else{
                        if ($selected_order->payed == false) {
                            $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-info">En Attente de payment</span>';
                        } elseif ($selected_order->payed == true && $selected_order->payment_verified == false) {
                            $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-info">Verification de paiment</span>';
                        } elseif ($selected_order->payment_verified == true && $selected_order->facturer == false) {
                            $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">Information de facturation</span>';
                        } elseif ($selected_order->facturer == true && $selected_order->liviser == false) {
                            $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">Information de livraison</span>';
                        } elseif ($selected_order->liviser == true && $selected_order->delivered == false) {
                            $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-warning">En cours de livraison</span>';
                        } elseif ($selected_order->delivered) {
                            $selected_order_status = '<span class="badge mb-3 w-100 fs-5  bg-label-success">Livré</span>';
                        }
                    }
                @endphp
                {!! $selected_order_status !!}
                <hr>
                <br>
                
                <div wire:loading class="text-center" style=" margin-top: -30px; margin-bottom: 15px; " >
                    <img style=" max-width: 20%; text-align: center; " src="{{ asset('loading.gif')}}" alt="">
                </div>

                @if ( Auth::user()->role->id == 1 )
                    
                    {{-- button to verify the payment  --}}
                    <button wire:click="verify_payment()" class="btn btn-success w-100 mb-3 @if ( $selected_order->payed == true && $selected_order->payment_verified == false && is_null( $selected_order->deleted_at ) ) @else d-none @endif " title="Cliquez pour vérifier le paiement de l'utilisateur">Vérifier le paiement</button>

                    
                    
                    {{-- button to skip the facturation and livraison steps for an order  --}}
                    <button wire:click="skip_facturation_livraison()" class="btn btn-info w-100 mb-3 @if ( $selected_order->payment_verified == true && $selected_order->facturer == false ) @else d-none @endif " title="Cliquez pour évitez les étapes de facturation et de livraison">Vérifier facturation & livraison</button>
                    
                    {{-- button to finish the order  --}}
                    <button wire:click="finish_order()" class="btn btn-success w-100 mb-3 @if ( $selected_order->liviser == true && $selected_order->delivered == false ) @else d-none @endif" title="Cliquez pour fermer cette commande lorsqu'elle est terminée">Terminez cette commande</button>
                    
                    
                    <button wire:click="cancel_order()" class="btn btn-danger w-100 mb-3 @if ( $selected_order->delivered == true || !is_null( $selected_order->deleted_at ) ) d-none @endif " title="Cliquez pour rejeter cette commande">Rejeter cette commande</button>

                @endif
                <button  wire:click="close_order()" type="reset" class="btn btn-label-secondary w-100" >Fermer la fenêtre</button>


            </div>
        @endif
    </div>
</div>