<!-- Hero section -->
<div class="shine-light">
    <img src="{{ asset('frontend/images/svg/shine-light.svg') }}" alt="Shine light" />
</div>
<header>
    <div class="container">
      <div class="hero-section">
        <!-- Mobile menu -->
        <div class="mobile-menu">
          <div class="mobile-logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="Mobile logo" />
          </div>
          <div class="mobile-nav">
            <div class="hamburger-menu">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <!-- Desktop menu -->
        <div
          class="menu d-flex justify-content-between align-items-center mt-5"
        >
          <div class="logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo" />
          </div>
          <nav>
            <ul class="mb-0">
              <li><a href="index.html">Accueil</a></li>
              <li><a href="/acheter.html">Acheter Kamas</a></li>
              <li><a href="#">Vendre Kamas</a></li>
              <li><a href="#">Echanger Kamas</a></li>
              <li><a href="#">Procedure</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </nav>
          <div class="auth d-flex align-items-center gap-3">
            <a href="#">
              <div class="sign-up">
                <img src="{{ asset('frontend/images/svg/signup.svg') }}" alt="" />
                S'inscrire
              </div>
            </a>
            <a href="#">
              <div class="login">
                <img src="{{ asset('frontend/images/svg/login.svg') }}" alt="" />
                Connexion
              </div>
            </a>
          </div>
        </div>
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
              <a href="#">
                <div class="main-btn">Acheter Kamas</div>
              </a>
              <a href="#">
                <div class="main-btn">Vendre kamas</div>
              </a>
              <a href="#">
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