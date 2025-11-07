@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5">

    <!-- Map Background -->
    <div class="d-flex align-items-center justify-content-center"
         style="min-height: 100vh;
                background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=vw_MERtE37usXnRjVVW7IUlE5qk=');
                background-size: cover; background-repeat: no-repeat;">

      <!-- Main Card -->
      <div class="card shadow-lg border-0 rounded-4 bg-white w-100 mx-3" style="max-width: 820px;">
        <div class="card-body text-center p-4">

          <!-- Title -->
          <h1 class="fw-bold mb-4 fs-3">Please describe this home</h1>

          <!-- Hidden field to keep the answer in the DOM -->
          <input type="hidden" id="home_type_answer" value="">

          <!-- Options (real radios, hidden) -->
          <div class="d-grid gap-3 mx-auto" style="max-width: 500px;">
            @foreach ([
                ['value' => 'freestanding', 'label' => 'Freestanding'],
                ['value' => 'condo',        'label' => 'Condo'],
                ['value' => 'mobile_home',  'label' => 'Mobile Home'],
            ] as $opt)
              <label class="option-item border rounded p-3 d-flex align-items-center text-decoration-none cursor-pointer
                             {{ $loop->first ? 'border-primary bg-light text-primary' : 'border-secondary' }}"
                     data-value="{{ $opt['value'] }}">
                <input type="radio" name="home_type" value="{{ $opt['value'] }}" class="d-none"
                       onchange="selectHomeType('{{ $opt['value'] }}')">
                <div class="radio-circle me-3"></div>
                <span>{{ $opt['label'] }}</span>
              </label>
            @endforeach
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="border-top py-3 px-4 d-flex justify-content-between align-items-center">
          <a href="javascript:history.back()" class="btn btn-outline-secondary d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" class="me-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
            </svg>
            Back
          </a>

          <button id="nextBtn" class="btn d-flex align-items-center" disabled
                  style="background-color: #FFCA2C; border-color: #FFCA2C; color: #c5bfbf;">
            Next
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" class="ms-2">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Logos Section -->
    <div class="text-center mt-5">
      <h3 class="fw-bold mb-4">Our estimates used by</h3>
      <div class="row justify-content-center g-4 px-4">
        <div class="col-6 col-sm-4 col-lg-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/Iy1pKP4xbA3mQbwm7clQcZIaWkDEcK7rrkQ6y4L1.png"
               class="img-fluid" alt="Logo 1">
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/B8FSIaTn7ByZGfLtnWaZUXqLUplzSrSgDP2WjcDa.png"
               class="img-fluid" alt="Logo 2">
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/qWtoLk1mFNDT4SFawzQ8m9sIR2jRaatLF0RgcYfw.png"
               class="img-fluid" alt="Logo 3">
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/t4EkSmyLp3obrDsZblQqZORtfvrINlisaSC1zsmL.png"
               class="img-fluid" alt="Logo 4">
        </div>
        <div class="col-6 col-sm-4 col-lg-2">
          <img src="https://cdn.admin-sr.com/Solar Estimate/aZKBa3XFRK5ZMq3GSZ1dapjM7HRI6zjvozegagox.png"
               class="img-fluid" alt="Logo 5">
        </div>
      </div>
    </div>

  </div>
</div>

<style>
  .radio-circle {
    width: 22px;
    height: 22px;
    border: 2px solid #6c757d;
    border-radius: 50%;
    transition: all .2s;
  }

  /* selected state */
  .option-item:has(input[type=radio]:checked) {
    background-color: rgba(0,123,255,.1) !important;
    border-color: #007bff !important;
  }
  .option-item:has(input[type=radio]:checked) .radio-circle {
    border-color: #007bff;
    background: #007bff;
    position: relative;
  }
  .option-item:has(input[type=radio]:checked) .radio-circle::after {
    content: '';
    width: 10px;
    height: 10px;
    background: #fff;
    border-radius: 50%;
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
  }
</style>

<script>
  function selectHomeType(value) {
    // store answer
    document.getElementById('home_type_answer').value = value;

    // enable Next button
    const nextBtn = document.getElementById('nextBtn');
    nextBtn.disabled = false;

    // build URL with answer
    const base = "{{ route('calculator.roof') }}";
    const url = `${base}${base.includes('?') ? '&' : '?'}home_type=${value}`;

    nextBtn.onclick = () => location.href = url;
  }

  // allow clicking the whole label
  document.querySelectorAll('.option-item').forEach(item => {
    item.addEventListener('click', function (e) {
      // avoid double-trigger when clicking the hidden radio itself
      if (e.target.tagName === 'INPUT') return;

      const radio = this.querySelector('input[type=radio]');
      radio.checked = true;
      selectHomeType(radio.value);
    });
  });
</script>

@endsection
