<x-frontend.head />

<x-frontend.min-header message='{{ $message }}' title="{{ $title }}" />

@livewire('vendre', [ 'servers' => $servers,  'payments' => $payments] )

<x-frontend.footer />