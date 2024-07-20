<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    

    @switch(\Request::segment(1))

        @case(null)
            @php $page_title = setting('titres-des-pages-seo.index') @endphp
        @break
        

        @case('achat')
            @php $page_title = setting('titres-des-pages-seo.vendre') @endphp
        @break
        @case('achat-classique')
            @php $page_title = setting('titres-des-pages-seo.vendre') @endphp
        @break
        @case('achat-touch')
            @php $page_title = setting('titres-des-pages-seo.vendre') @endphp
        @break
        @case('achat-retro')
            @php $page_title = setting('titres-des-pages-seo.vendre') @endphp
        @break

        @case('acheter')
            @php $page_title = setting('titres-des-pages-seo.achat') @endphp
        @break

        @case('vendre')
            @php $page_title = setting('titres-des-pages-seo.vendre') @endphp
        @break

        @case('echange')
            @php $page_title = setting('titres-des-pages-seo.echange') @endphp
        @break

        @case('payment')
            @php $page_title = setting('titres-des-pages-seo.payment') @endphp
        @break

        @case('order_details')
            @php $page_title = setting('titres-des-pages-seo.order-details') @endphp
        @break

        @case('conditions_general_utilisation')
            @php $page_title = setting('titres-des-pages-seo.cgu') @endphp
        @break

        @case('conditions_general_de_vente')
            @php $page_title = setting('titres-des-pages-seo.cgv') @endphp
        @break

        @case('politique_de_confidentialite')
            @php $page_title = setting('titres-des-pages-seo.politique') @endphp
        @break

    @endswitch

    <title>{{ $page_title }}</title>

    @livewireStyles
    
  </head>

<body>