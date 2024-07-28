<div class="steps-line mt-5 mb-5">
    <div class="step">
        <div class="step-head">
            Étape 1
        </div>
        <div class="step-content">
            Vous avez un compte binance ou bien vous avez des USDT sur votre wallet et vous voulez effectuer le paiement
            via la cryptomonnaie premierement vous devez acceder a se site <a
                href="https://fr.beincrypto.com/convertir/eur-to-tether/" target="__blank">CLIQUER ICI</a> pour voir le
            taux du change de
            votre commande mettez le montant de votre commande ( <span>DE EUR</span> ) á ( <span>USDT</span> )
        </div>
    </div>
    <div class="step">
        <div class="step-head">
            Étape 2
        </div>
        <div class="step-content">
            Veuillez envoyer le montant <span>{{ $total_with_fees }}</span> euro ( <span>frais inclus</span> ) En USDT ,
            Il suffit de mettre notre
            adresse de retrait
            <span role="button" data-bs-toggle="modal" data-bs-target="#infoModal">clique ici</span> pour voir l'adresse et de nous
            envoyer le montant, avec le taux que vous avez vu sur le site de
            conversion
        </div>
    </div>
    <div class="step">
        <div class="step-head">
            Etape 3
        </div>
        <div class="step-content">
            Une fois le paiement terminé, veuillez cliquer sur le bouton ci-dessous. Un de nos agents examinera votre
            paiement et traitera votre commande, merci.
        </div>
    </div>
</div>


{{-- Model --}}
<div class="modal" tabindex="-1" id="infoModal" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $payment_name }} détails</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Adresse de l'USDT : <span>{{ setting('methodes-de-payement-infos.usdt-address') }}</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                
            </div>
        </div>
    </div>
</div>
