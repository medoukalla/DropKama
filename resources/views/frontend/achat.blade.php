<x-frontend.head />

<x-frontend.min-header :message="$message" title="{{ $title }}" />

<x-frontend.game-section />

@livewire('get-servers', ['map' => $map])

<x-frontend.footer />