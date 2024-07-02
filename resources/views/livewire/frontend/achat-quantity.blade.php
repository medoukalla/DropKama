<section class="acheter-processing bg-not-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="sticky-top">
                    <div class="processing-heading">
                        Acheter Kamas <br />
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
                        <div id="selectField">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                <p id="selectText">Dofus Retro</p>
                            </div>
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow" />
                        </div>
                        <ul id="list" class="mt-3">
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                <p>Dofus Touch</p>
                            </li>
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                <p>Dofus Classique</p>
                            </li>
                        </ul>
                    </div>
                    <div class="selector">
                        <label for="">Sélectionnez le serveur</label>
                        <div id="selectField">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                <p id="selectText">Boune</p>
                            </div>
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow" />
                        </div>
                        <ul id="list" class="mt-3">
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                <p>Tylezia</p>
                            </li>
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg')  }}" alt="" class="dofus-egg" />
                                <p>Draconiros</p>
                            </li>
                        </ul>
                    </div>
                    <div class="input">
                        <label for="">Combien de kamas avez-vous besoin ?</label>
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <div id="inputField">
                                <input type="text" placeholder="0" />
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
                        <div id="selectField">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('frontend/images/svg/logos_paypal.svg') }}" alt="" class="currency ps-2" />
                                <p id="selectText">Paypal</p>
                            </div>
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow" />
                        </div>
                        <ul id="list" class="mt-3">
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/Usdt.svg') }}" alt="" class="currency" />
                                <p>Usdt</p>
                            </li>
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/Bitcoin.svg') }}" alt="" class="currency" />
                                <p>Bitcoin</p>
                            </li>
                        </ul>
                        <p class="w-75">
                            Vous avez sélectionné
                            <span style="font-weight: 700">PayPal</span> comme méthode de
                            paiement. Des <span class="text-danger">frais</span> de
                            <span class="text-danger">3%</span> s'appliqueront.
                        </p>
                    </div>
                    <hr />
                    <div class="d-flex align-items-center justify-content-between">
                        <span style="font-weight: 700; font-size: 22px">Total</span>
                        <span style="font-size: 22px">€8.75</span>
                    </div>
                    <a href="{{ route('frontend.achat.payment') }}" class="">
                        <div class="main-btn mt-3">Suivant</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>