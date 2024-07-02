<section class="acheter-processing bg-not-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="kamas-settings">
                    <div class="selector">
                        <label for="" class="mt-0">Serveur :</label>
                        <div id="selectField">
                            <div class="d-flex align-items-center gap-3">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="" class="dofus-egg" />
                                <p id="selectText">Tiliwan - ( Retro )</p>
                            </div>
                            <img src="{{ asset('frontend/images/svg/input-arrow.svg') }}" alt="Arrow" class="input-arrow" />
                        </div>
                        <ul id="list" class="mt-3">
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="" class="dofus-egg" />
                                <p>Tylezia - ( Retro )</p>
                            </li>
                            <li class="options">
                                <img src="{{ asset('frontend/images/svg/dofus-egg.svg') }}" alt="" class="dofus-egg" />
                                <p>Draconiros - ( Qlassique )</p>
                            </li>
                        </ul>
                    </div>
                    <div class="input">
                        <label for="">Nom en jeu : </label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" id="normalInput" />
                        </div>
                    </div>
                    <div class="selector">
                        <label for="">Methodes de paiement :</label>
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
                            Quantité de kamas | (en millions, par exemple
                            <span class="text-danger">10,3</span> =
                            <span class="text-danger">10 300 000</span> )
                        </p>
                    </div>
                    <div class="input mt-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" id="normalInput" placeholder="100M" />
                        </div>
                    </div>
                    <hr />
                    <div class="">
                        <p>
                            Prix par million : <span class="text-danger">7.857 €</span>
                        </p>
                        <p>Montant total : <span class="text-danger">0 €</span></p>
                    </div>
                    <a href="#" class="">
                        <div class="main-btn mt-3">Suivant</div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="kamas-settings w-100 sticky-top">
                    <div class="input">
                        <label for="">Email du contact :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" id="normalInput" placeholder="Your-email@email.com" />
                        </div>
                    </div>
                    <div class="input">
                        <label for="">Nom et prenoms :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" id="normalInput" placeholder="Your nom et prenoms" />
                        </div>
                    </div>
                    <div class="input">
                        <label for="">Adresse e-mail Paypal :</label>
                        <div class="d-flex align-items-center justify-content-between">
                            <input type="text" id="normalInput" placeholder="Paypal mail ..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>