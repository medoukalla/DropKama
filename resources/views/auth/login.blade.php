<x-frontend.head />
<div class="authentication login-section">
    <div class="auth-body">
        <form method="post" action="{{ route('login') }}">
            @csrf
            
            <div class="auth-section">
                <div class="auth-logo">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
                    </a>
                </div>
                <div class="auth-heading">Se connecter</div>

                <x-auth-session-status class="mb-4" :status="session('status')" />
                    
                <div class="auth-inputs">
                    <div class="email">
                        <label for="">Email</label>
                        <input type="email" id="email" name="email" :value="old('email')" required autofocus class="mt-2 mb-3" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="password">
                        <label for="">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-2" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="remember-me d-flex align-items-center justify-content-between w-100">
                    <div>
                        <input id="remember_me" type="checkbox" name="remember" checked />
                        <label for="huey">Se souvenir de moi</label>
                    </div>   
                    @if (Route::has('password.request')) 
                        <a href="{{ route('password.request') }}" class="forgot-pass">
                            <p>Vous avez oublié votre mot de passe ?</p>
                        </a>
                    @endif
                </div>

                <button class="main-btn px-0 py-4 w-50" role="button" type="submit">
                    SE CONNECTER
                </button>


                <a href="{{ route('register') }}" >
                    <p class="create-acc">Pas de compte ? Créez-en un</p>
                </a>

            </div>

        </form>
    </div>
</div>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
