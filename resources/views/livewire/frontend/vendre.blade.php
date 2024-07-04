<section class="acheter-processing bg-not-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="kamas-settings">
                    <div class="selector">
                        <label for="" class="mt-0">Serveur :</label>
                        <div id="selectField" onclick="$('ul.serversList').toggle('slow'); $('.input-arrow-servers').toggleClass('active')">
                            
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('storage//'.$server->image ) }}" alt="" class="dofus-egg" />
                                <p id="selectText">{{ $server->name }} - ( {{ $server->map->name }} )</p>
                            </div>
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-servers" />
                        </div>
                        <ul id="list" class="mt-3 serversList">

                            @foreach ( $servers as $the_server )
                                <li class="options @if ( $the_server->id == $server->id ) d-none @endif" wire:click="change_server({{ $the_server->id }})">
                                    <img src="{{ asset('storage//'.$the_server->image )  }}" alt="" class="dofus-egg" />
                                    <p>{{ $the_server->name }} - ( {{ $the_server->map->name}} )</p>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="input">
                        <label for="">Nom en jeu : </label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="nom_en_jeu" type="text" id="normalInput" /> <br>
                        </div>
                        @error('nom_en_jeu')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="selector">
                        <label for="">Methodes de paiement :</label>
                        <div id="selectField" onclick="$('ul.paymentsList').toggle('slow'); $('.input-arrow-payments').toggleClass('active')">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ asset('frontend/images/payments/'.$payment->svg_name.'.svg') }}" alt="" class="currency ps-2" />
                                    <p id="selectText">{{ $payment->name}}</p>
                                </div>
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-payments" />
                        </div>

                        <ul id="list" class="mt-3 paymentsList">

                            @foreach ( $payments as $paym )
                                
                                <li class="options @if ( $paym->id == $active_payment_id ) d-none @endif" wire:click="change_payment({{ $paym->id }})">
                                    <img src="{{ asset('frontend/images/payments/'.$paym->svg_name.'.svg') }}" alt="" class="currency" />
                                    <p>{{ $paym->name}}</p>
                                </li>

                            @endforeach

                        </ul>
                        
                    </div>

                    <div class="input mt-3">
                        <label for="">Quantité de kamas :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="quantity" type="number" min="1" step="0.1"  id="normalInput" placeholder="100M" />
                        </div>
                        <p class="w-75 mt-2">
                            Quantité de kamas | (en millions, par exemple
                            <span class="text-danger">10.3</span> =
                            <span class="text-danger">10 300 000</span> )
                        </p>
                    </div>
                    <hr />
                    <div class="">
                        <p>
                            Prix par million : <span class="text-danger">{{ $server->price }} €</span>
                        </p>
                        <p>Montant total : <span class="text-danger">{{ $total }} €</span></p>
                    </div>

                    <div wire:click="save_order()" class="main-btn mt-3 py-4">Suivant</div>

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="kamas-settings w-100 sticky-top">
                    <div class="input">
                        <label for="">Email du contact :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="email" type="email" id="normalInput" placeholder="Your-email@email.com" />
                        </div>
                        @error('email')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input">
                        <label for="">Nom et prenoms :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="nom_et_prenom" type="text" id="normalInput" placeholder="Your nom et prenoms" />
                        </div>
                        @error('nom_et_prenom')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- paypal  --}}
                    <div class="input @if ( $payment->name != 'Paypal' ) d-none @endif">
                        <label for="">Adresse e-mail Paypal :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="paypal_email" type="text" id="normalInput" placeholder="Paypal mail ..." />
                        </div>
                        @error('paypal_email')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Skrill  --}}
                    <div class="input @if ( $payment->name != 'Skrill' ) d-none @endif">
                        <label for="">Adresse e-mail Skrill :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="skrill_email" type="text" id="normalInput" placeholder="Skrill mail ..." />
                        </div>
                        @error('skrill_email')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Usdt  --}}
                    <div class="input @if ( $payment->name != 'Usdt' ) d-none @endif">
                        <label for="">Adresse usdt (TRX) :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="usdt_adresse" type="text" id="normalInput" placeholder="Adresse usdt ..." />
                        </div>
                        @error('usdt_adresse')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Virment bancaire --}}
                    <div class="input @if ( $payment->name != 'Bank transfer' ) d-none @endif">
                        <label for="">Le nom de votre banque :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="bank_nom" type="text" id="normalInput" placeholder="Nom de banque ..." />
                        </div>
                        @error('bank_nom')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror

                        <label for="">Votre numéro de compte bancaire :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model="bank_numero" type="number" id="normalInput" placeholder="Numéro de compte ..." />
                        </div>
                        @error('bank_numero')                        
                            <div class="alert alert-danger mt-2 rounded-4">{{ $message }}</div>
                        @enderror
                    </div>


                    

                </div>
            </div>
        </div>
    </div>
</section>