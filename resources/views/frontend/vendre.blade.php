@extends('layouts.frontend')

@auth
    @php
        $message = 'Bonjour <span>User</span>, merci de remplir les champs ci-dessous.';
    @endphp
@endauth
@guest
    @php
        $message = 'Bonjour, pour acheter ou vendre des kamas vous devez se connecter ou bien créer un compte'
    @endphp
@endguest
<x-frontend.min-header :message='$message' />

@livewire('vendre')