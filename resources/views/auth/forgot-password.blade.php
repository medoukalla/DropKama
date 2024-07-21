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
                        <x-input-label for="email"  />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"  required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                </div>
                <div class="alert alert-danger w-100 @if ( $errors->count() == 0 ) d-none @endif ">
                    {{ $errors->first() }}
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

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