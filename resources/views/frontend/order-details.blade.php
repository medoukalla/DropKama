<x-frontend.head />

<x-frontend.min-header :message='$message' title="{{ $title }}" />

@livewire('order-details', ['order' => $order] )


<x-frontend.footer />