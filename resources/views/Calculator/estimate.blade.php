@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5"
       style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4');
              background-size: cover; background-repeat: no-repeat; min-height: 100vh;">

    <!-- Main Card -->
    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px;">
      <div class="text-center border-bottom pb-3 mb-4">
        <h1 class="fw-bold fs-2">Show online estimate as</h1>
      </div>

      <!-- Hidden input to store answer -->
      <input type="hidden" id="payment_answer" value="">

      <!-- Payment Options -->
      <div class="row justify-content-center mb-5">
        @php
          $paymentOptions = [
            ['value' => 'cash',  'label' => 'Cash payment', 'img' => 'pxYA9y3Iib2KDgoo0mxe4i4JgkMMENpRY25Ode9B.png'],
            ['value' => 'loan',  'label' => 'Monthly lease or loan payment (zero down)', 'img' => 'n60ibdbGrS8Ar5qct1FN6uqaiExTeAVXTKdGBtSP.png'],
          ];
        @endphp

        @foreach ($paymentOptions as $opt)
          <div class="col-md-6 text-center mb-4">
            <label class="payment-option border rounded shadow-sm p-3 h-100 d-flex flex-column align-items-center justify-content-center cursor-pointer position-relative transition-all"
                   data-value="{{ $opt['value'] }}">
              <input type="radio" name="payment_preference" value="{{ $opt['value'] }}" class="d-none"
                     onchange="selectPayment('{{ $opt['value'] }}')">
              <img src="https://cdn.admin-sr.com/Solar Estimate/{{ $opt['img'] }}"
                   class="img-fluid mb-3" alt="{{ $opt['label'] }}" style="max-width: 250px;">
              <p class="fw-bold mb-0">{{ $opt['label'] }}</p>
              <div class="checkmark position-absolute top-50 start-50 translate-middle opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 24 24">
                  <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                </svg>
              </div>
            </label>
          </div>
        @endforeach
      </div>

      <!-- Navigation Buttons -->
      <div class="d-flex justify-content-between align-items-center mt-3">
        <a href="javascript:history.back()" class="btn btn-outline-secondary d-flex align-items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
          </svg>
          Back
        </a>

        <button id="nextBtn" class="btn d-flex align-items-center gap-2" disabled
                style="background-color: #FFCA2C; color: #f8f8f8; border: none;">
          Next
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Logos Section -->
    <div class="text-center mt-5">
      <h3 class="fw-bold fs-4 mb-4">Our estimates used by</h3>
      <div class="row justify-content-center align-items-center g-4">
        <div class="col-6 col-sm-4 col-md-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/Iy1pKP4xbA3mQbwm7clQcZIaWkDEcK7rrkQ6y4L1.png" class="img-fluid" alt="Logo 1">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/B8FSIaTn7ByZGfLtnWaZUXqLUplzSrSgDP2WjcDa.png" class="img-fluid" alt="Logo 2" style="max-width: 50px;">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/qWtoLk1mFNDT4SFawzQ8m9sIR2jRaatLF0RgcYfw.png" class="img-fluid" alt="Logo 3">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/t4EkSmyLp3obrDsZblQqZORtfvrINlisaSC1zsmL.png" class="img-fluid" alt="Logo 4">
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/aZKBa3XFRK5ZMq3GSZ1dapjM7HRI6zjvozegagox.png" class="img-fluid" alt="Logo 5">
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .payment-option {
    border: 2px solid #dee2e6 !important;
    background-color: #fff;
    transition: all 0.2s ease;
    cursor: pointer;
  }

  .payment-option:hover {
    border-color: #007bff !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  .payment-option:has(input[type="radio"]:checked) {
    border-color: #007bff !important;
    background-color: rgba(0, 123, 255, 0.05);
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
  }

  .payment-option .checkmark {
    transition: opacity 0.2s ease;
    background-color: #007bff;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .payment-option:has(input[type="radio"]:checked) .checkmark {
    opacity: 1;
  }

  .transition-all {
    transition: all 0.2s ease;
  }
</style>

<script>
  function selectPayment(value) {
    // Store answer
    document.getElementById('payment_answer').value = value;

    // Enable Next button
    const nextBtn = document.getElementById('nextBtn');
    nextBtn.disabled = false;

    // Build next URL
    const baseUrl = "{{ route('calculator.interested') }}";
    const separator = baseUrl.includes('?') ? '&' : '?';
    const nextUrl = `${baseUrl}${separator}payment=${value}`;

    nextBtn.onclick = () => {
      window.location.href = nextUrl;
    };
  }

  // Click anywhere on card
  document.querySelectorAll('.payment-option').forEach(card => {
    card.addEventListener('click', function(e) {
      if (e.target.tagName === 'INPUT') return;
      const radio = this.querySelector('input[type="radio"]');
      radio.checked = true;
      selectPayment(radio.value);
    });
  });
</script>

@endsection
