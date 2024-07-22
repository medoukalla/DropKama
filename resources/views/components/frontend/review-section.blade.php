<!-- Reviews section -->
<section class="review-section">
    <div class="container">
        <div class="section-headline text-center">
            Des centaines d'avis <span>positifs</span> !
        </div>
        <div class="trustpilot d-flex align-items-center justify-content-center gap-3">
            <p class="t-head">Trustpilot</p>
            <img src="{{ asset('frontend/images/svg/trustpilot-icon.svg') }}" alt="Trustpilot icon"
                class="trustpilot-icon" />
            <p class="section-subline">4.9 <span class="on-five">/5</span></p>
            <img src="{{ asset('frontend/images/svg/stars.svg') }}" alt="Stars" class="stars" />
        </div>
        <!-- Swiper -->
        <div class="swiper mySwiper mt-5">
            <div class="swiper-wrapper">

                @foreach ($testimonials as $testimonial)
                    <!-- Slide -->

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend/images/svg/quote.svg') }}" alt="Quote icon" />
                        <p class="review-content">
                            {{ $testimonial->testimonial }}
                        </p>
                        <div class="quote-profile d-flex align-items-center gap-2">
                            <div class="profile-box">
                                <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="profile" />
                            </div>
                            <div class="profile-name">{{ $testimonial->name }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>
    </div>
</section>
<!-- End section -->
