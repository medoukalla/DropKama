<x-frontend.head />

<div class="authentication signup-section">
  <div class="auth-body">
    <form action="{{ route('register') }}" method="POST">

        @csrf

        <div class="auth-section">
          
          <div class="auth-logo">
            <a href="{{ route('frontend.index') }}">
              <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
            </a>
          </div>

          <div class="auth-heading">S'inscrire</div>
          <div class="auth-inputs">
            <div class="email">
              <label for="">Nom du personnage *</label>
              <input name="username" type="text" class="mt-2 mb-3" value="{{ old('username') }}" />
            </div>
            <div class="email">
              <label for="">Nom et Prenom *</label>
              <input type="text" name="name" class="mt-2" value="{{ old('name') }}" required />
            </div>
            <div class="email mt-3">
              <label for="">Email *</label>
              <input type="email" name="email" value="{{ old('email') }}" required class="mt-2 mb-3" />
            </div>
            <div class="password">
              <label for="">Mot de passe *</label>
              <input type="password" id="password"  name="password" required autocomplete="new-password" class="mt-2" />
            </div>
            <div class="password mt-3">
              <label for="">Confirmez votre mot de passe*</label>
              <input type="password" id="password_confirmation" class="mt-2"  name="password_confirmation" required autocomplete="new-password" />
            </div>
          </div>
          <div class="remember-me d-flex align-items-center justify-content-between w-100">
            <div>
              <input type="radio" name="drone" checked />
              <label for="huey">J'ai lu les conditions de bookamas et je suis d'accord.</label>
            </div>
          </div>

          <div class="alert alert-danger w-100 @if ( $errors->count() == 0 ) d-none @endif ">
              {{ $errors->first() }}
          </div>
          
          <button class="main-btn w-50 py-4" type="submit">S'INSCRIRE</button>

          <a href="{{ route('login') }}">
            <p class="create-acc">
              Vous avez déjà un compte ? Connectez-vous !
            </p>
          </a>

        </div>
    </form>
  </div>
</div>


{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
  <x-input-label for="name" :value="__('Name')" />
  <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
    autocomplete="name" />
  <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
  <x-input-label for="email" :value="__('Email')" />
  <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
    autocomplete="username" />
  <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
  <x-input-label for="password" :value="__('Password')" />

  <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
    autocomplete="new-password" />

  <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
  <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

  <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
    required autocomplete="new-password" />

  <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
  <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
    href="{{ route('login') }}">
    {{ __('Already registered?') }}
  </a>

  <x-primary-button class="ml-4">
    {{ __('Register') }}
  </x-primary-button>
</div>
</form>
</x-guest-layout> --}}