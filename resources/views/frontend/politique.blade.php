@extends('layouts.frontend')

<x-frontend.min-header message='{{ $message }}' title="{{ $title }}" />


<section class="acheter-processing bg-not-white">

    <div class="container ">
        <div class="row">
            <div class="col-12 ">
                <div class="kamas-settings w-100 sticky-top">
                    
                    
                    {!! setting('site.politique') !!}

    
                </div>
            </div>
        </div>
    </div>

</section>