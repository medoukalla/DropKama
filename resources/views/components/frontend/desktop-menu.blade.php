<div class="menu d-flex justify-content-between align-items-center mt-5" >
    <div class="logo">
      <img src="{{ asset('frontend/images/logo.png') }}" alt="Logo" />
    </div>
    <nav>
      <ul class="mb-0">
        <li><a href="{{ route('frontend.index') }}">Accueil</a></li>
        <li><a href="/acheter.html">Acheter Kamas</a></li>
        <li><a href="{{ route('frontend.vendre') }}">Vendre Kamas</a></li>
        <li><a href="#">Echanger Kamas</a></li>
        <li><a href="{{ route('frontend.index') }}#procedure">Procedure</a></li>
        <li><a href="{{ route('frontend.index') }}#faq">FAQ</a></li>
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