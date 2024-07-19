@extends('layouts.frontend')

<x-frontend.min-header :message='$message' title="{{ $title }}" />

@livewire('order-details', ['order' => $order] )
