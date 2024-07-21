<div class="mobile-menu">
    <a href="{{ route('frontend.index') }}">
        <div class="mobile-logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="Mobile logo" />
        </div>
    </a>
    <div class="mobile-nav">
        <div class="hamburger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
{{-- Overlay menu --}}
<div class="mobile-menu-overlay">
    <div class="close-btn">
        <img src="{{ asset('frontend/images/black-close-btn.svg') }}" alt="Close button">
    </div>
    <a href="{{ route('frontend.index') }}">
        <div class="overlay-mobile-logo">
            <img src="{{ asset('frontend/images/logo.png') }}" alt="Mobile logo" />
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
    <div class="mobile-auth">
        {{-- @guest
            <a href="{{ route('register') }}">
                <div class="sign-up">Inscrire</div>
            </a>
            <a href="{{ route('login') }}">
                <div class="login">Connexion</div>
            </a>
        @endguest --}}
        {{-- @auth --}}
        <a href="{{ route('login') }}">
            <div class="dash-btn">Tableau de bord
                <img src="{{ asset('frontend/images/svg/dashboard.svg') }}" alt="Dashboard icon" height="15">
            </div>
        </a>
        {{-- @endauth --}}
    </div>
</div>
