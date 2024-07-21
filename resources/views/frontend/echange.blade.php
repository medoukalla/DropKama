<x-frontend.head />

<x-frontend.min-header message='{{ $message }}' title="{{ $title }}" />

@livewire('echange', ['servers' => $servers])


<x-frontend.footer />