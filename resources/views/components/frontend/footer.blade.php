<!-- Footer section -->
<footer>
  <div class="container">
    <div class="row">
      
      @livewire('newsletter')

      <div class="col-12 col-md-4">
        <div class="links">
          <div class="links-title">Liens utiles</div>
          <ul class="p-0">
            <li><a href="{{ route('frontend.index') }}">Accueil</a></li>
            <li><a href="{{ route('frontend.achat') }}">Acheter Kamas</a></li>
            <li><a href="{{ route('frontend.echange') }}">Echange Kamas</a></li>
            <li><a href="{{ route('frontend.vendre') }}">Vendre Kamas</a></li>
            <li><a href="{{ route('frontend.index') }}#procedure">Procedure</a></li>
            <li><a href="{{ route('frontend.index') }}#faq">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="policies-links">
          <div class="links-title">Aide</div>
          <ul class="p-0">
            <li><a href="{{ route('frontend.cgu') }}">CONDITIONS GÉNÉRAL D'UTILISATION</a></li>
            <li><a href="{{ route('frontend.cgv') }}">CONDITIONS GÉNÉRALES DE VENTE</a></li>
            <li><a href="{{ route('frontend.politique') }}">POLITIQUE DE CONFIDENTIALITÉ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr />
    <div class="row mt-5">
      <div class="col-12 col-md-4">
        <div class="links-title">Solutions de paiement</div>
        <div class="payment-box">
          <img src="{{ asset('frontend/images/payments/skrill.svg') }}" alt="skrill" />
          <img src="{{ asset('frontend/images/payments/revolute.svg') }}" alt="revolut" />
          <img src="{{ asset('frontend/images/payments/crypto.svg') }}" alt="bitcoin" />
          <img src="{{ asset('frontend/images/payments/paypal.svg') }}" alt="paypal" />
          <img src="{{ asset('frontend/images/payments/mastercard.svg') }}" alt="mastercard" />
          <img src="{{ asset('frontend/images/payments/bancontact.svg') }}" alt="bancontact" />
          <img src="{{ asset('frontend/images/payments/giropay.svg') }}" alt="giropay" />
          <img src="{{ asset('frontend/images/payments/wise.svg') }}" alt="wise" />
          <img src="{{ asset('frontend/images/payments/ideal.svg') }}" alt="ideal" />
          <img src="{{ asset('frontend/images/payments/lydia.svg') }}" alt="lydia" />
          <img src="{{ asset('frontend/images/payments/usdt.svg') }}" alt="usdt" />
          <img src="{{ asset('frontend/images/payments/visa.svg') }}" alt="visa" />
        </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="links-title">Contactez-nous</div>
        <div class="social-media">
          <a href="{{  setting('site.whatsapp') }}" target="_blanck">
            <img src="{{ asset('frontend/images/svg/whatsapp.svg') }}" alt="whatsapp" />
          </a>
          <a href="{{ setting('site.facebook') }}" target="_blanck">
            <img src="{{ asset('frontend/images/svg/facebook.svg') }}" alt="facebook" />
          </a>
          <a href="{{ setting('site.discord') }}" target="_blanck">
            <img src="{{ asset('frontend/images/svg/discord.svg') }}" alt="discord" />
          </a>
        </div>
      </div>
    </div>
    <hr />
    <div class="row mt-1">
      <div class="copyright">
        <p class="text-center">
          © 2024 <span><a style="color: var(--orange-clr)" href="{{ route('frontend.index') }}">Dropkamas</a></span>.
          All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- End section -->

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  // Swipper script

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      "@0.75": {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      "@1.50": {
        slidesPerView: 4,
        spaceBetween: 50,
      },
    },
  });
</script>
<!-- Bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@livewireScripts
</body>

</html>