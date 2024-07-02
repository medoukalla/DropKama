@extends('layouts.frontend')

<x-frontend.min-header message='{{ $message }}' title="{{ $title }}" />

<x-frontend.game-section />

@livewire('get-servers', ['map' => null])
