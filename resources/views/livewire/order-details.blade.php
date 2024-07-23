<section class="acheter-processing bg-not-white">
    <div class="container">
        <div class="row" wire:poll.keep-alive>

            <div class="col-12 col-md-6">
                <div class="product-line bg-component-white sticky-top">
                    <div class="line">
                        <div class="h-step @if ( !is_null($order->deleted_at) ) rejected @endif active">
                            <div class="i-step">
                                
                                @if ( !is_null( $order->deleted_at ) )
                                    <img src="{{ asset('frontend/images/svg/reject-icon.svg') }}" alt="" height="30" class="rejecting">
                                @else 
                                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
                                @endif

                            </div>
                            <div class="t-step ">
                                Traitement du paiement en attente
                            </div>
                        </div>
                        <div class="h-step @if ( !is_null($order->deleted_at) ) rejected @endif @if ($order->payed == true && $order->payment_verified == true) active @endif">
                            <div class="i-step">
                                @if ( !is_null( $order->deleted_at ) )
                                    <img src="{{ asset('frontend/images/svg/reject-icon.svg') }}" alt="" height="30" class="rejecting">
                                @else 
                                    @if ($order->payed == true && $order->payment_verified == false)
                                        <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt=""
                                            height="30" class="not-ready">
                                    @elseif ($order->payed == true && $order->payment_verified == true)
                                        <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt=""
                                            height="30" class="ready">
                                    @endif
                                @endif
                            </div>
                            <div class="t-step">
                                Confirmation du paiement
                            </div>
                        </div>
                        <div class="h-step @if ( !is_null($order->deleted_at) ) rejected @endif @if ($order->payment_verified == true && $order->facturer == true) active @endif">
                            <div class="i-step">
                                @if ( !is_null( $order->deleted_at ) )
                                    <img src="{{ asset('frontend/images/svg/reject-icon.svg') }}" alt="" height="30" class="rejecting">
                                @else 
                                    @if (($order->payment_verified == true && $order->facturer == false) || $order->payment_verified == false)
                                        <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt=""
                                            height="30" class="not-ready">
                                    @elseif ($order->payment_verified == true && $order->facturer == true)
                                        <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt=""
                                            height="30" class="ready">
                                    @endif
                                @endif
                            </div>
                            <div class="t-step">
                                Coordonnées de facturation
                            </div>
                        </div>
                        <div class="h-step @if ( !is_null($order->deleted_at) ) rejected @endif @if ($order->facturer == true && $order->liviser == true) active @endif">
                            <div class="i-step">
                                @if ( !is_null( $order->deleted_at ) )
                                    <img src="{{ asset('frontend/images/svg/reject-icon.svg') }}" alt="" height="30" class="rejecting">
                                @else 
                                    @if (($order->facturer == true && $order->liviser == false) || $order->facturer == false)
                                        <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt=""
                                            height="30" class="not-ready">
                                    @elseif ($order->facturer == true && $order->liviser == true)
                                        <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt=""
                                            height="30" class="ready">
                                    @endif
                                @endif
                            </div>
                            <div class="t-step">
                                Détails de livraison
                            </div>
                        </div>
                        <div class="h-step @if ( !is_null($order->deleted_at) ) rejected @endif @if ($order->liviser == true && $order->delivered == true) active @endif">
                            <div class="i-step">
                                @if ( !is_null( $order->deleted_at ) )
                                    <img src="{{ asset('frontend/images/svg/reject-icon.svg') }}" alt="" height="30" class="rejecting">
                                @else 
                                    @if (($order->liviser == true && $order->delivered == false) || $order->liviser == false)
                                        <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt=""
                                            height="30" class="not-ready">
                                    @elseif ($order->liviser == true && $order->delivered == true)
                                        <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt=""
                                            height="30" class="ready">
                                    @endif
                                @endif
                            </div>
                            <div class="t-step">
                                Livraison en cours
                            </div>
                        </div>
                        <div class="h-step @if ( !is_null($order->deleted_at) ) rejected @endif @if ($order->delivered == true) active @endif">
                            <div class="i-step">
                                @if ( !is_null( $order->deleted_at ) )
                                    <img src="{{ asset('frontend/images/svg/reject-icon.svg') }}" alt="" height="30" class="rejecting">
                                @else 
                                    @if ($order->delivered == false)
                                        <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt=""
                                            height="30" class="not-ready">
                                    @elseif ($order->delivered == true)
                                        <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt=""
                                            height="30" class="ready">
                                    @endif
                                @endif
                            </div>
                            <div class="t-step">
                                Livré
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex flex-column">
                <!-- OPEN ------------------------>
                <!-- Vérification du paiement Head -->
                <div class="bg-component-white mb-3 @if ( !is_null( $order->deleted_at ) ) lock-step @endif @if ($order->payed == true && $order->payment_verified == false) @else lock-step @endif">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="{{ asset('frontend/images/svg/payment-verify.svg') }}" alt=""
                            height="30" />
                        <h5>Vérification du paiement</h5>
                    </div>
                    <!-- <a href="#" class="">
                <div class="main-btn mt-3">Suivant</div>
              </a> -->
                </div>
                <!-- Question -->
                <div class="bg-component-white mb-3 @if ( !is_null( $order->deleted_at ) ) d-none @endif @if ($order->payed == true && $order->payment_verified == false || !is_null( $order->deleted_at )) @else d-none @endif">
                    <p class="d-flex align-items-start gap-3">
                        Nous avons enregistré votre paiement pour cette commande. Pour
                        vérification, veuillez communiquer votre numéro de commande,
                        'numéro de commande', au support disponible via le chat en
                        direct situé en bas à droite de la page.
                        <img src="{{ asset('frontend/images/svg/question-acheter.svg') }}" alt=""
                            height="50" />
                    </p>
                </div>
                <!-- Open ------------------------>

                <!-- Coordonnées de facturation Head-->
                <div
                    class="step-heading bg-component-white mb-3 @if ( !is_null( $order->deleted_at ) ) lock-step @endif @if ($order->payment_verified == true && $order->facturer == false ) @else lock-step @endif">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="{{ asset('frontend/images/svg/facturation.svg') }}" alt="" height="30" />
                        <h5>Coordonnées de facturation</h5>
                    </div>
                    <!-- <a href="#" class="">
                <div class="main-btn mt-3">Suivant</div>
              </a> -->
                </div>

                <!-- Coordonnées de facturation inputs -->
                <div
                    class="step-inputs bg-component-white mb-3 kamas-settings w-100 @if ( !is_null( $order->deleted_at ) ) d-none @endif @if ($order->payment_verified == true && $order->facturer == false) @else d-none @endif">


                    <div class="input mt-0 @if ($facturation_steps > 2) d-none @endif">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <label for="" class="mt-0 mb-0">Email *</label>
                            <h6>Lorem ipsum dolor sit amet.</h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <input wire:model.defer="email" type="email" id="normalInput" value="youssef@gmail.com"
                                disabled />
                        </div>
                    </div>



                    <div class="input mt-3 @if ($facturation_steps != 2) d-none @endif ">
                        <div class="alert alert-success">
                            Merci de consulter vos emails! nous vous avons envoyé un code de validation <br>
                            <label for="" class="mt-3 mb-3">Le code de vérification *</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model="code" type="text" id="normalInput" placeholder="******"
                                    @if ($facturation_steps > 2) disabled @endif />
                            </div>
                            @error('code')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="@if ($facturation_steps < 3) d-none @endif ">
                        <div class="input">
                            <label for="" class="mt-3">Nom et prenom *</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model.defer="nom_et_prenom" type="text" id="normalInput" />
                            </div>
                            @error('nom_et_prenom')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input">
                            <label for="" class="mt-3">Discord</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model.defer="discord" type="text" id="normalInput" />
                            </div>
                            @error('discord')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input">
                            <label for="" class="mt-3">Numéro de téléphone *</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model.defer="telephone" type="number" id="normalInput" />
                            </div>
                            @error('telephone')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input">
                            <label for="" class="mt-3">Ville *</label>
                            <div class="d-flex align-items-center justify-content-between">
                                <input wire:model.defer="ville" type="text" id="normalInput" />
                            </div>
                            @error('ville')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- First step call to action  --}}
                    <div wire:click="send_validation()"
                        class="email-btn mt-3 @if ($facturation_steps != 1) d-none @endif ">
                        Envoyez-moi le code
                    </div>
                    <div wire:loading wire:target="send_validation" class="alert alert-info mt-3">
                        Envoi du code de validation ! S'il vous plaît, attendez...
                    </div>


                    {{-- Validate the validation code  --}}
                    <div wire:click="validate_code()"
                        class="email-btn mt-3 @if ($facturation_steps != 2) d-none @endif ">
                        Validez le code
                    </div>
                    <div wire:loading wire:target="validate_code" class="alert alert-info mt-3">
                        S'il vous plaît, attendez! nous vérifions le code de validation pour vous.
                    </div>

                    {{-- Save the user personal info ( finish the facturation details )  --}}
                    <div wire:click="finish_facturation()"
                        class="email-btn mt-3 @if ($facturation_steps != 3) d-none @endif ">
                        Suivant
                    </div>
                    <div wire:loading wire:target="finish_facturation" class="alert alert-info mt-3">
                        S'il vous plaît, attendez! nous sauvegardons ces données pour votre commande
                    </div>

                </div>

                <!-- Information de facturation head -->
                <div
                    class="step-heading bg-component-white mb-3 @if ( !is_null( $order->deleted_at ) ) lock-step @endif @if ($order->facturer == true && $order->liviser == false) @else lock-step @endif">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="{{ asset('frontend/images/svg/infos.svg') }}" alt="" height="30" />
                        <h5>Détails de livraison</h5>
                    </div>
                </div>
                <!-- Information de facturation inputs -->
                <div
                    class="step-inputs bg-component-white mb-3 kamas-settings w-100 @if ( !is_null( $order->deleted_at ) ) d-none @endif  @if ($order->facturer == true && $order->liviser == false) @else d-none @endif">
                    <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
                        <div>Nom de personnage : </div>
                        <div>{{ $order->user->username }}</div>
                    </div>
                    <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
                        <div>Jeu : </div>
                        <div>{{ $order->server->map->name }}</div>
                    </div>
                    <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
                        <div>Serveur :</div>
                        <div>{{ $order->server->name }}</div>
                    </div>
                    <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
                        <div>Quantité :</div>
                        <div>{{ $order->quantity }}</div>
                    </div>
                    <div wire:click="accept_livraison()" class="email-btn mt-3">
                        J'accepte
                    </div>
                </div>
                <!-- Détails de la commande -->
                <div class="step-heading bg-component-white mb-3">
                    <div class="d-flex align-items-center justify-content-center gap-3">
                        <img src="{{ asset('frontend/images/svg/details.svg') }}" alt="" height="20" />
                        <h5>Détails de la commande</h5>
                    </div>
                </div>
                <!-- Détails de la commande inputs -->
                <div class="step-inputs bg-component-white">
                    @if ( !is_null( $order->deleted_at ) )
                        <div class="alert alert-danger ">
                            Nous regrettons de vous informer que votre commande récente a été rejetée. N'hésitez pas à passer une nouvelle commande à votre convenance. Si vous avez besoin d'aide, nous sommes là pour vous assister.
                        </div>
                    @elseif($order->liviser == true && $order->order_completed == false)
                        <div class="alert alert-success ">
                            S'il vous plaît, attendez ! nous vous contacterons dans moins de 5 minutes. <br>
                            Si cela prend plus que cela, veuillez nous contacter dans le chat ci-dessous, merci
                        </div>
                    @elseif ( $order->order_completed == true )
                        <div class="alert alert-success ">
                            Nous avons le plaisir de vous informer que votre commande a été remplie et complétée avec succès. Merci d'avoir choisi nos services. Si vous avez des questions ou besoin d'aide supplémentaire, n'hésitez pas à nous contacter.
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between mb-3 gap-3">
                        <div class="info-component">{{ $order->server->name }} {{ $order->quantity * 1 }} M pour :
                            {{ $order->user->username }}</div>
                        <div class="info-component">
                            {{ $order->total }} {{ strtoupper(Session::get('currency')) }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-3 gap-3">
                        <div class="info-component">Référence</div>
                        <div class="info-component">
                            {{ $order->reference }}
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="info-component bg-orange">Total</div>
                        <div class="info-component bg-orange">
                            {{ $order->total }} {{ strtoupper(Session::get('currency')) }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
