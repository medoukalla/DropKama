@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing'))

@section('content')

<section class="section-py first-section-pt">
    <div class="container">

        {{ $slot }}

    </div>
</section>


@stop