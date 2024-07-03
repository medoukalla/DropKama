<section class="acheter-processing bg-not-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="sticky-top">
                    <div class="processing-heading">
                        Acheter Kamas<br />
                        <span>Dofus Retro</span> Sécurisé, <br />
                        Rapide avec
                        <span>Meilleur Prix</span>
                    </div>
                    <div class="processing-image">
                        <img src="{{ asset('frontend/images/acheter-character.svg') }}" alt="Acheter Character" />
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="kamas-settings">
                    <div class="selector">
                        <label for="" class="mt-0">Sélectionnez le jeu</label>
                        <div id="selectField" onclick="$('ul.mapsList').toggle('slow'); $('.input-arrow-maps').toggleClass('active')">
                            @foreach ( $maps as $map )
                                @if ( $map->id == $active_map_id )
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                        <p id="selectText">Dofus {{ $map->name }}</p>
                                    </div>
                                @endif
                            @endforeach
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-maps" />
                        </div>
                        <ul id="list" class="mt-3 mapsList">
                            @foreach ( $maps as $map )
                                @if ( $map->id != $active_map_id )
                                    <li class="options" wire:click="change_map({{ $map->id }})">
                                        <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                        <p>Dofus {{ $map->name }}</p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="selector">
                        <label for="">Sélectionnez le serveur</label>
                        <div id="selectField" onclick="$('ul.serversList').toggle('slow'); $('.input-arrow-servers').toggleClass('active')">
                            

                            @foreach ( $servers as $the_server )
                                @if ( $the_server->map_id == $active_map_id && $the_server->id == $active_server_id )
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset('storage//'.$the_server->image )  }}" alt="" class="dofus-egg" />
                                        <p id="selectText">{{ $the_server->name }}</p>
                                    </div>
                                @endif
                            @endforeach

                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-servers" />
                        </div>
                        <ul id="list" class="mt-3 serversList">

                            @foreach ( $servers as $the_server )
                                @if ( $the_server->map_id == $active_map_id && $the_server->id != $active_server_id )
                                    <li class="options" wire:click="change_server({{ $the_server->id }})">
                                        <img src="{{ asset('storage//'.$the_server->image )  }}" alt="" class="dofus-egg" />
                                        <p>{{ $the_server->name }}</p>
                                    </li>
                                @endif
                            @endforeach
                            
                        </ul>
                    </div>
                    <div class="input">
                        <label for="">Combien de kamas avez-vous besoin ?</label>
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <div id="inputField">
                                <input wire:model="quantity" type="number" min="{{ $server->min }}" max="{{ $server->max }}" value="{{ $quantity }}" />
                                <span>M Kamas</span>
                            </div>
                            <span>+</span>
                            <div id="inputField">
                                <input type="text" placeholder="0" />
                                <span>
                                    <img src="{{ asset('frontend/images/svg/bonus-icon.svg') }}" alt="Bonus icon" class="bonus-icon" />
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="input">
                        <label for="">Votre nom dans le jeu
                            <img src="{{ asset('frontend/images/svg/aide-icon.svg') }}" alt="aide-icon" class="aide-icon" />
                        </label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" id="normalInput" />
                        </div>
                    </div>
                    <div class="selector">
                        <label for="">Sélectionnez votre méthode de paiement</label>
                        <div id="selectField" onclick="$('ul.paymentsList').toggle('slow'); $('.input-arrow-payments').toggleClass('active')">
                            @foreach ( $payments as $payment )
                                @if ( $payment->id == $active_payment_id )
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset('frontend/images/payments/'.$payment->svg_name.'.svg') }}" alt="" class="currency ps-2" />
                                        <p id="selectText">{{ $payment->name}}</p>
                                    </div>
                                @endif
                            @endforeach
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow input-arrow-payments" />
                        </div>
                        <ul id="list" class="mt-3 paymentsList">

                            @foreach ( $payments as $payment )
                                
                                <li class="options @if ( $payment->id == $active_payment_id ) d-none @endif" wire:click="change_payment({{ $payment->id }})">
                                    <img src="{{ asset('frontend/images/payments/'.$payment->svg_name.'.svg') }}" alt="" class="currency" />
                                    <p>{{ $payment->name}}</p>
                                </li>

                            @endforeach

                        </ul>
                        <p class="w-75">
                            Vous avez sélectionné
                            <span style="font-weight: 700">{{ $payment_name }}</span> comme méthode de
                            paiement. Des <span class="text-danger">frais</span> de
                            <span class="text-danger">{{ $fees }}%</span> s'appliqueront.
                        </p>
                    </div>
                    <hr />
                    <div class="d-flex align-items-center justify-content-between">
                        <span style="font-weight: 700; font-size: 22px">Total</span>
                        <span style="font-size: 22px">€{{ $total }}</span>
                    </div>
                    <a href="{{ route('frontend.achat.payment') }}" class="">
                        <div class="main-btn mt-3">Suivant</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>