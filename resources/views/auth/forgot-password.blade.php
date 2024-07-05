<x-frontend.head />
<div class="authentication login-section">
    <div class="auth-body">
        <form method="POST" action="{{ route('password.email') }}" >
            @csrf
            <div class="auth-section">
                <div class="auth-logo">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
                    </a>
                </div>
                <div class="auth-heading">Mot de passe oublié?</div>
                <p class="text-light">
                    Aucun problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.
                </p>
                <div class="auth-inputs">
                    <div class="email">
                        <label for="">{{ __('Email') }}</label>
                        <input type="email" id="email" name="email" :value="old('email')" required autofocus class="mt-2 mb-3" />
                    </div>
                </div>
                <div class="alert alert-danger w-100 @if ( $errors->count() == 0 ) d-none @endif ">
                    {{ $errors->first() }}
                </div>
                <button class="main-btn px-0 py-4 w-50" role="button" type="submit">
                    {{ __('Email Password Reset Link') }}
                </button>
                
                <a href="{{ route('login') }}">
                    <p class="create-acc">Connectez-vous !</p>
                </a>
            </div>
        </form>
    </div>
</div>