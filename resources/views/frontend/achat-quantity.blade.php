<x-frontend.head />

<x-frontend.min-header :message='$message' title="{{ $title }}" />

@livewire('achat-quantity', ['server' => $server, 'servers' => $servers, 'maps' => $maps, 'payments' => $payments] )

<x-frontend.footer />