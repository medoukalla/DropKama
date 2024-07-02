@extends('layouts.frontend')

<x-frontend.min-header :message='$message' title="{{ $title }}" />

@php
    $order = null; // order will get it using slug in prodction phase
@endphp
@livewire('achat-payment', ['order' => $order] )
