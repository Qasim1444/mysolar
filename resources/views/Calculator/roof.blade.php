@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5"
       style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4');
              background-size: cover; background-repeat: no-repeat; min-height: 100vh;">

    <!-- Card -->
    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px; border-radius: 10px;">
      <div class="text-center border-bottom pb-3 mb-4">
        <h1 class="fw-bold fs-2">Select your roof type</h1>
      </div>

      <!-- Hidden input to store answer -->
      <input type="hidden" id="roof_type_answer" value="">

      <!-- Roof Types Grid -->
      <div class="row row-cols-2 row-cols-md-3 g-4 text-center">
        @php
          $roofTypes = [
            ['value' => 'metal',            'label' => 'Metal',            'img' => 'LMWWIIF52RNlh2BjPdstTndvgO2q0y0CwHCAMdHL.jpg'],
            ['value' => 'shingles',         'label' => 'Shingles',         'img' => 'mZmEfdd3PoA0e5OxYe2sYKytrpSTSz3q6eqQSkCa.jpg'],
            ['value' => 'concrete_tiles',   'label' => 'Concrete tiles',   'img' => 'H2U4r06xFgMngOXycXb5zAMszaFauc0vQGtl0zZf.jpg'],
            ['value' => 'clay_terracotta',  'label' => 'Clay or terracotta','img' => '6ub3LBhVHXg4aYza5EPMoMuzQRutrgEC1kQcYMH5.jpg'],
            ['value' => 'ground_mount',     'label' => 'Ground mount',     'img' => '77lJCzIJLZB3lelbkP7W2ZW1j6pDhjIbkUBeLKkX.jpg'],
            ['value' => 'other',            'label' => 'Other',            'img' => 'e8WyOTM2lwI4Y00RIqkUtaIkkYtQjrNJNVi5Bswe.png'],
          ];
        @endphp

        @foreach ($roofTypes as $roof)
          <div class="col">
            <label class="roof-option border rounded shadow-sm p-3 h-100 d-flex flex-column align-items-center justify-content-center cursor-pointer transition-all"
                   data-value="{{ $roof['value'] }}">
              <input type="radio" name="roof_type" value="{{ $roof['value'] }}" class="d-none"
                     onchange="selectRoofType('{{ $roof['value'] }}')">
              <img src="https://cdn.admin-sr.com/Solar Estimate/{{ $roof['img'] }}"
                   class="img-fluid mb-2 rounded" alt="{{ $roof['label'] }}" style="height: 80px; object-fit: cover;">
              <div class="text-muted small fw-bold">{{ $roof['label'] }}</div>
              <div class="checkmark position-absolute top-50 start-50 translate-middle opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white"
                     viewBox="0 0 24 24">
                  <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                </svg>
              </div>
            </label>
          </div>
        @endforeach
      </div>

      <!-- Navigation Buttons -->
      <div class="d-flex justify-content-between align-items-center mt-4">
        <button class="btn btn-outline-secondary d-flex align-items-center gap-2" onclick="history.back()">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
          </svg>
          Back
        </button>

        <button id="nextBtn" class="btn d-flex align-items-center gap-2" disabled
                style="background-color: #FFCA2C; color: #ffffff; border: none;">
          Next
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Logos Section -->

  </div>
</div>

<style>
  .roof-option {
    position: relative;
    transition: all 0.2s ease;
    cursor: pointer;
    border: 2px solid #dee2e6 !important;
    background-color: #fff;
  }

  .roof-option:hover {
    border-color: #007bff !important;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  .roof-option:has(input[type="radio"]:checked) {
    border-color: #007bff !important;
    background-color: rgba(0, 123, 255, 0.05);
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
  }

  .roof-option .checkmark {
    transition: opacity 0.2s ease;
  }

  .roof-option:has(input[type="radio"]:checked) .checkmark {
    opacity: 1;
    background-color: #007bff;
    border-radius: 50%;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .transition-all {
    transition: all 0.2s ease;
  }
</style>

<script>
  function selectRoofType(value) {
    // Store answer
    document.getElementById('roof_type_answer').value = value;

    // Enable Next button
    const nextBtn = document.getElementById('nextBtn');
    nextBtn.disabled = false;

    // Build next URL with parameter
    const baseUrl = "{{ route('calculator.repairs') }}";
    const separator = baseUrl.includes('?') ? '&' : '?';
    const nextUrl = `${baseUrl}${separator}roof_type=${value}`;

    nextBtn.onclick = () => {
      window.location.href = nextUrl;
    };
  }

  // Allow clicking anywhere on the card
  document.querySelectorAll('.roof-option').forEach(card => {
    card.addEventListener('click', function(e) {
      // Prevent double-trigger if clicking the hidden radio
      if (e.target.tagName === 'INPUT') return;

      const radio = this.querySelector('input[type="radio"]');
      radio.checked = true;
      selectRoofType(radio.value);
    });
  });
</script>

@endsection
