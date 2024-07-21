<!-- FAQ section -->
<section class="faq-section" id="faq">
  <div class="container">
    <div class="faq-head text-center position-relative">
      <div class="section-headline">
        <span>Questions</span> fréquemment posées
      </div>
      <p class="section-subline">Questions & Réponses</p>
      <img src="{{ asset('frontend/images/svg/question-icon.svg') }}" alt="Faq question icon" id="faqQuestion" />
    </div>
    <ul class="faq-accordions">

      @foreach ( $faqs as $key => $faq )
          
        <li>
          <input type="radio" name="accordion" id="first{{ $key }}" @if ( $key == 0 ) checked @endif />
          <label for="first{{ $key }}">{{ $faq->question }}</label>
          <div class="acc-content">
            <p>{{ $faq->answer }}</p>
          </div>
        </li>

      @endforeach

      
      
    </ul>
  </div>
</section>
<!-- End section -->