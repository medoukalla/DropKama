<!-- Hero section -->
<div class="shine-light">
    <img src="{{ asset('frontend/images/svg/shine-light.svg') }}" alt="Shine light" />
</div>
<header>
    <div class="container">
      <div class="hero-section">

        <!-- Mobile menu -->
        <x-frontend.mobile-menu />

        <!-- Desktop menu -->
        <x-frontend.desktop-menu />


        <div class="row align-items-center" style="z-index: 100">
          <div class="col-12 col-md-6">
            <div class="headline mb-3">
              <span>Acheter et vendre</span>
              des <br />
              <span> kamas rapidement </span>.
            </div>
            <p class="subline mb-4">
              Acheter et vendre des kamas en toute sécurité rapidement.
            </p>
            <div class="hero-buttons d-flex align-items-center gap-3">
              <a href="{{ route('frontend.achat') }}">
                <div class="main-btn">Acheter Kamas</div>
              </a>
              <a href="{{ route('frontend.vendre') }}">
                <div class="main-btn">Vendre kamas</div>
              </a>
              <a href="{{ route('frontend.echange') }}">
                <div class="main-btn">Echanger Kamas</div>
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6 hero-background">
            <div class="hero-background-box">
              <img src="{{ asset('frontend/images/svg/hero-background.svg') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- End section -->