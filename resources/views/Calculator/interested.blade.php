@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid py-5"
       style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4');
              background-size: cover; background-repeat: no-repeat; min-height: 100vh;">

    <!-- White Card -->
    <div class="bg-white rounded shadow mx-auto p-4" style="max-width: 820px;">

      <!-- Title -->
      <div class="text-center border-bottom pb-3 mb-4">
        <h1 class="fw-bold fs-3">
          Are you interested in any other energy efficiency projects?
        </h1>
      </div>

      <!-- Hidden input to store selection -->
      <input type="hidden" name="energy_efficiency_interest" id="energy-efficiency-selection" value="">

      <!-- Options Grid -->
      <div class="row row-cols-2 row-cols-md-4 g-4 text-center justify-content-center fw-bold">
        @foreach(['Windows', 'HVAC', 'Insulation', 'No'] as $option)
          @php
            $imgMap = [
              'Windows'    => 'VkEUD2eAsNVK1YNqIXexqVyqIQfm73SydSfiDu77.png',
              'HVAC'       => 'HCkf4ybVQbiHiy05IwgDwmuMDfD6SWBBPTSR2jYP.png',
              'Insulation' => 'MkTFNakImLcJlFzbfuHkneOwyGFDDV5g7tDbic1B.png',
              'No'         => '14C2a1MVz3Y1sDOrkJViywaZ5wFw1wQ8DY9rIk7V.png',
            ];
            $src = 'https://cdn.admin-sr.com/Solar Estimate/' . $imgMap[$option];
          @endphp

          <div class="col">
            <div class="card border rounded-3 shadow-sm p-3 h-100 d-flex flex-column align-items-center justify-content-center hover-shadow option-card"
                 data-value="{{ strtolower($option) }}"
                 style="cursor: pointer; transition: all 0.2s;">
              <img src="{{ $src }}" class="img-fluid mb-2" alt="{{ $option }}" style="max-width:100px;">
              <p class="text-secondary small mb-0">{{ $option }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Navigation Buttons -->
      <div class="d-flex justify-content-between align-items-center mt-4">
        <button type="button" class="btn btn-outline-secondary d-flex align-items-center gap-2" onclick="history.back()">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
          </svg>
          Back
        </button>

        <form id="next-form" action="{{ route('calculator.report') }}" method="GET">
          @csrf
          <button type="submit" id="next-btn" class="btn d-flex align-items-center gap-2"
                  style="background-color: #ffca2c; border-color: #ffca2c; color: #f7f3f3;" disabled>
            Next
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<style>
  .option-card.selected {
    border-color: #0d6efd !important;
    background-color: #f8f9fa;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
  }
  .option-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const cards   = document.querySelectorAll('.option-card');
  const hidden  = document.getElementById('energy-efficiency-selection');
  const nextBtn = document.getElementById('next-btn');
  const form    = document.getElementById('next-form');

  cards.forEach(card => {
    card.addEventListener('click', function () {
      // Deselect all
      cards.forEach(c => c.classList.remove('selected'));

      // Select this one
      this.classList.add('selected');

      const value = this.dataset.value;
      hidden.value = value;

      // Enable button + add query param
      nextBtn.disabled = false;
      const url = new URL(form.action);
      url.searchParams.set('energy_interest', value);
      form.action = url.toString();
    });
  });
});
</script>
@endsection
