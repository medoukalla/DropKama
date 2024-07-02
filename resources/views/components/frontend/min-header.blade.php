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


        <div class="row hero-banner align-items-star" style="z-index: 100">
            <div class="col-12 col-md-6">
              <div class="page-title">Vendre Kamas</div>
            </div>
            <div class="col-12 col-md-6">
              <div class="client-notifs">
                <p>
                  Bonjour <span>User</span> , merci de remplir les champs
                  ci-dessous.
                </p>
              </div>
            </div>
        </div>
        
      </div>
    </div>
</header>
<!-- End section -->