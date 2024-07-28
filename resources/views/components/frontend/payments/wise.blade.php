<div class="steps-line mt-5 mb-5">
    <div class="step">
        <div class="step-head">
            Étape 1
        </div>
        <div class="step-content">
            Veuillez envoyer le montant <span>{{ $total_with_fees }} Euro</span> ( <span>frais inclus</span> ) <span role="button" data-bs-toggle="modal" data-bs-target="#infoModal">clique ici</span> pour voir les information
            bancaire
        </div>
    </div>
    <div class="step">
        <div class="step-head">
            Étape 2
        </div>
        <div class="step-content">
            Une fois le paiement terminé, veuillez cliquer sur le bouton ci-dessous. Un de nos agents examinera votre
            paiement et traitera votre commande, merci.
            J'ai effectué le paiement
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
                <p>Wise email : <span>{{ setting('methodes-de-payement-infos.wise-email')  }}</span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                
            </div>
        </div>
    </div>
</div>
