<div class="menu d-flex justify-content-between align-items-center mt-5">
    <a href="{{ route('frontend.index') }}">
        <div class="logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="DropKamas Logo" />
        </div>
    </a>
    <nav>
        <ul class="mb-0">
            <li><a href="{{ route('frontend.index') }}">Accueil</a></li>
            <li><a href="{{ route('frontend.achat') }}">Acheter Kamas</a></li>
            <li><a href="{{ route('frontend.vendre') }}">Vendre Kamas</a></li>
            <li><a href="{{ route('frontend.echange') }}">Echanger Kamas</a></li>
            <li><a href="{{ route('frontend.index') }}#procedure">Procedure</a></li>
            <li><a href="{{ route('frontend.index') }}#faq">FAQ</a></li>
        </ul>
    </nav>
    <div class="auth d-flex align-items-center gap-3">
      @guest
          
        <a href="{{ route('register') }}">
          <div class="sign-up">
            <img src="{{ asset('frontend/images/svg/signup.svg') }}" alt="DropKamas Signup" />
            S'inscrire
          </div>
        </a>
        <a href="{{ route('login') }}">
          <div class="login">
            <img src="{{ asset('frontend/images/svg/login.svg') }}" alt="DropKamas Login" />
            Connexion
          </div>
        </a>

      @endguest
      @auth
      
        <a href="{{ route('voyager.dashboard') }}">
          <div class="sign-up">
            {{-- <img src="{{ asset('frontend/images/svg/signup.svg') }}" alt="" /> --}}
            Tableau de bord
          </div>
        </a>
      @endauth
    </div>
</div>
