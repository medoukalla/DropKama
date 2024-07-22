<x-frontend.head />

<!-- Hero section -->
<div class="shine-light">
    <img src="{{ asset('frontend/images/svg/shine-light.svg') }}" alt="Shine light" />
</div>
<header class="second-header">
    <div class="container">
        <div class="hero-section">

            <!-- Mobile menu -->
            <x-frontend.mobile-menu />

            <!-- Desktop menu -->
            <x-frontend.desktop-menu />


            <div class="row hero-banner align-items-star" style="z-index: 100">
                <div class="col-12 col-md-12">
                    <div class="page-title text-center">
                        {{ $title }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- End section -->



<section class="acheter-processing bg-not-white">

    <div class="container ">
        <div class="row">
            <div class="col-12 ">
                <div class="kamas-settings w-100 sticky-top">


                    {!! setting('site.cgu') !!}


                </div>
            </div>
        </div>
    </div>

</section>


<x-frontend.footer />
