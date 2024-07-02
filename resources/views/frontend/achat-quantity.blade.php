@extends('layouts.frontend')

<x-frontend.min-header :message='$message' title="{{ $title }}" />

@php
    $server = null; // server will get it using slug in prodction phase
@endphp
@livewire('achat-quantity', ['server' => $server] )
