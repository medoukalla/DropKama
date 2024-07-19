<section class="acheter-processing bg-not-white">
    <div class="container">
      <div class="row">
        
        <div class="col-12 col-md-6">
          <div class="product-line bg-component-white sticky-top">
            <div class="line">
              <div class="h-step active">
                <div class="i-step">
                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
                </div>
                <div class="t-step">
                  Traitement du paiement en attente
                </div>
              </div>
              <div class="h-step @if ( $order->payed == true && $order->payment_verified == true ) active @endif">
                <div class="i-step">
                  @if ( $order->payed == true && $order->payment_verified == false )                    
                    <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt="" height="30" class="not-ready">
                  @elseif ( $order->payed == true && $order->payment_verified == true )
                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
                  @endif
                </div>
                <div class="t-step">
                  Confirmation du paiement
                </div>
              </div>
              <div class="h-step @if ( $order->payment_verified == true && $order->facturer == true ) active @endif">
                <div class="i-step">
                  @if ( $order->payment_verified == true && $order->facturer == false )                    
                    <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt="" height="30" class="not-ready">
                  @elseif ( $order->payment_verified == true && $order->facturer == true )
                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
                  @endif
                </div>
                <div class="t-step">
                  Coordonnées de facturation
                </div>
              </div>
              <div class="h-step @if ( $order->facturer == true && $order->liviser == true ) active @endif">
                <div class="i-step">
                  @if ( $order->facturer == true && $order->liviser == false )                    
                    <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt="" height="30" class="not-ready">
                  @elseif ( $order->facturer == true && $order->liviser == true )
                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
                  @endif
                </div>
                <div class="t-step">
                  Détails de livraison
                </div>
              </div>
              <div class="h-step @if ( $order->liviser == true && $order->delivered == true ) active @endif">
                <div class="i-step">
                  @if ( $order->liviser == true && $order->delivered == false )                    
                    <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt="" height="30" class="not-ready">
                  @elseif ( $order->liviser == true && $order->delivered == true )
                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
                  @endif
                </div>
                <div class="t-step">
                  Livraison en cours
                </div>
              </div>
              <div class="h-step @if ( $order->delivered == true ) active @endif">
                <div class="i-step">
                  @if ( $order->delivered == false )                    
                    <img src="{{ asset('frontend/images/svg/not-ready.svg') }}" alt="" height="30" class="not-ready">
                  @elseif ( $order->delivered == true )
                    <img src="{{ asset('frontend/images/svg/checked.svg') }}" alt="" height="30" class="ready">
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
          <div class="bg-component-white mb-3">
            <div class="d-flex align-items-center justify-content-center gap-3">
              <img src="{{ asset('frontend/images/svg/payment-verify.svg') }}" alt="" height="30" />
              <h5>Vérification du paiement</h5>
            </div>
            <!-- <a href="#" class="">
                <div class="main-btn mt-3">Suivant</div>
              </a> -->
          </div>
          <!-- Question -->
          <div class="bg-component-white mb-3">
            <p class="d-flex align-items-start gap-3">
              Nous avons enregistré votre paiement pour cette commande. Pour
              vérification, veuillez communiquer votre numéro de commande,
              'numéro de commande', au support disponible via le chat en
              direct situé en bas à droite de la page.
              <img src="{{ asset('frontend/images/svg/question-acheter.svg') }}" alt="" height="50" />
            </p>
          </div>
          <!-- Open ------------------------>

          <!-- Coordonnées de facturation Head-->
          <div class="step-heading bg-component-white mb-3 lock-step">
            <div class="d-flex align-items-center justify-content-center gap-3">
              <img src="{{ asset('frontend/images/svg/facturation.svg') }}" alt="" height="30" />
              <h5>Coordonnées de facturation</h5>
            </div>
            <!-- <a href="#" class="">
                <div class="main-btn mt-3">Suivant</div>
              </a> -->
          </div>
          <!-- Coordonnées de facturation inputs -->
          <div class="step-inputs bg-component-white mb-3 kamas-settings w-100">
            <div class="input">
              <label for="" class="mt-0">Nom et prenom *</label>
              <div class="d-flex align-items-center justify-content-between">
                <input type="text" id="normalInput" />
              </div>
            </div>
            <div class="input mt-3">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <label for="" class="mt-0 mb-0">Email *</label>
                <h6>Lorem ipsum dolor sit amet.</h6>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <input type="text" id="normalInput" />
              </div>
              <label for="" class="mt-3 mb-3">Verfication code *</label>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <input type="text" id="normalInput" placeholder="******" />
            </div>
            <div class="input">
              <label for="" class="mt-3">Discord</label>
              <div class="d-flex align-items-center justify-content-between">
                <input type="text" id="normalInput" />
              </div>
            </div>
            <div class="input">
              <label for="" class="mt-3">Numéro de téléphone *</label>
              <div class="d-flex align-items-center justify-content-between">
                <input type="number" id="normalInput" />
              </div>
            </div>
            <div class="input">
              <label for="" class="mt-3">Ville *</label>
              <div class="d-flex align-items-center justify-content-between">
                <input type="text" id="normalInput" />
              </div>
            </div>
            <div class="email-btn mt-3">
              Suivant
            </div>
          </div>
          <!-- Information de facturation head -->
          <div class="step-heading bg-component-white mb-3 lock-step">
            <div class="d-flex align-items-center justify-content-center gap-3">
              <img src="{{ asset('frontend/images/svg/infos.svg') }}" alt="" height="30" />
              <h5>Information de facturation</h5>
            </div>
          </div>
          <!-- Information de facturation inputs -->
          <div class="step-inputs bg-component-white mb-3 kamas-settings w-100">
            <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
              <div>Lorem, ipsum.</div>
              <div>Lorem</div>
            </div>
            <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
              <div>Lorem, ipsum.</div>
              <div>Lorem</div>
            </div>
            <div class="infos bg-dark-white mb-3 d-flex align-items-center justify-content-between">
              <div>Lorem, ipsum.</div>
              <div>Lorem</div>
            </div>
            <div class="email-btn mt-3">
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
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="info-component">Fallanster 50m pour : LilFoxx</div>
              <div class="info-component">
                24.720 EUR
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="info-component bg-orange">Total</div>
              <div class="info-component bg-orange">
                24.720 EUR
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
</section>