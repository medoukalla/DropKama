<x-fr.head title="{{ setting('site.title') . ' : checkout' }}" />
<script src="https://js.stripe.com/v3/"></script>
<link rel="stylesheet" href="{{ asset('css/stripe.css') }}">

<!-- Qui sommes start  -->
<div class="wrapper bg-dark">
    {{-- header --}}
    <x-fr.header_menu :langLink="$langLink" />
    {{-- Quisommes --}}
    <div class="QuiSommes">
        <div class="container">
            <p class="text-center">
                <a href="{{ route('frontend.index') }}">Acceuil</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="">Services</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="javascript:void(0)">Checkout</a>
                <img src="{{ asset('img/arrowRgiht.svg') }}" alt="img" class="img-fluid" />

                <a href="">Complété</a>
            </p>
            <h2 class="text-center">Merci</h2>
        </div>
    </div>
</div>
<!-- Qui sommes end -->

<!-- main start  -->
@php
    $amount = $appartement->first_payment + $appartement->Frais_service;
@endphp
@livewire('booking-fr', ['item_id' => $appartement->id, 'appartement' => $appartement, 'amount' => $amount])
<!-- main end -->


<x-fr.footer />


<!-- Condition button valider & Select payment method -->
<script>
    // Condition button valider & Select payment method
    // Condition button valider
    var disableHints = document.getElementById("swiperWrapper");

    function validBtn() {
        document.getElementById("submitBtn").style =
            "background-color:#dddddd; color: black";
        document.getElementById("submitBtn").innerHTML = "Faite!";
        if (disableHints) {
            disableHints.style.filter = "grayscale(100%)";
        }
    }
    // Select payment method
    function selectPayment() {
        var select = document.getElementsByClassName("stripeSelectMethod");
        select.classList.add("selected");
    }

    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
            },
        },
    });
</script>
<script>
    $(document).ready(function() {
        $('input[type="text"], input[type="radio"] , input[type="number"]').on(
            "change",
            function() {
                if (
                    $("#input1").val().length != 0 &&
                    $("#input2").val().length != 0 &&
                    $("#input3").val().length != 0 &&
                    $("#input4").val().length != 0 &&
                    ($("#maleRadio").is(":checked") ||
                        $("#femaleRadio").is(":checked"))
                ) {
                    $("#submitBtn").prop("disabled", false);
                } else {
                    $("#submitBtn").prop("disabled", true);
                }
            }
        );

        $("#maleRadio, #femaleRadio").on("change", function() {
            if (
                $("#input1").val().length != 0 &&
                $("#input2").val().length != 0 &&
                $("#input3").val().length != 0 &&
                $("#input4").val().length != 0 &&
                ($("#maleRadio").is(":checked") || $("#femaleRadio").is(":checked"))
            ) {
                $("#submitBtn").prop("disabled", false);
            } else {
                $("#submitBtn").prop("disabled", true);
            }
        });
    });
</script>

{{-- Stripe js code  --}}
<script src="{{ asset('js/stripe-fr.js') }}"></script>
