@extends('layouts.base')
@section('content')


<section class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5"
       style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=35.389089,-118.983059&zoom=16&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=o8tZaYMjtXEHklJGgKooRzzaGac=');
              background-size: cover; background-repeat: no-repeat;">

    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px;">
      <!-- Heading -->
      <div class="text-center border-bottom pb-3 mb-4">
        <h1 class="fw-bold fs-2">What is your most recent utility bill?</h1>
      </div>

      <!-- Slider Section -->
      <div class="text-center py-4">
        <h2 id="billValue" class="fw-bold fs-1 text-primary">$150</h2>

        <div class="d-flex align-items-center justify-content-center mt-4">
          <span class="fw-bold text-secondary me-3">$50</span>
          <input id="billRange" type="range" min="50" max="600" step="10" value="150" class="form-range w-50">
          <span class="fw-bold text-secondary ms-3">$600+</span>
        </div>
      </div>

      <!-- Buttons -->
      <div class="d-flex justify-content-between align-items-center mt-5">
        <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
          <i class="bi bi-arrow-left me-2"></i> Back
        </button>
        <a href="{{ route('calculator.address') }}" class="btn btn-warning text-white d-flex align-items-center">
          Next <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Trusted By Section -->
  <div class="container text-center py-5">
    <h3 class="fw-bold mb-5">Our estimates used by</h3>
    <div class="row g-4 justify-content-center">
      <div class="col-6 col-md-3 col-lg-2">
        <img src="https://cdn.admin-sr.com/Solar Estimate/Iy1pKP4xbA3mQbwm7clQcZIaWkDEcK7rrkQ6y4L1.png" class="img-fluid" alt="Logo 1">
      </div>
      <div class="col-6 col-md-3 col-lg-2">
        <img src="https://cdn.admin-sr.com/Solar Estimate/B8FSIaTn7ByZGfLtnWaZUXqLUplzSrSgDP2WjcDa.png" class="img-fluid" alt="Logo 2" style="max-width: 60px;">
      </div>
      <div class="col-6 col-md-3 col-lg-2">
        <img src="https://cdn.admin-sr.com/Solar Estimate/qWtoLk1mFNDT4SFawzQ8m9sIR2jRaatLF0RgcYfw.png" class="img-fluid" alt="Logo 3">
      </div>
      <div class="col-6 col-md-3 col-lg-2">
        <img src="https://cdn.admin-sr.com/Solar Estimate/t4EkSmyLp3obrDsZblQqZORtfvrINlisaSC1zsmL.png" class="img-fluid" alt="Logo 4">
      </div>
      <div class="col-6 col-md-3 col-lg-2">
        <img src="https://cdn.admin-sr.com/Solar Estimate/aZKBa3XFRK5ZMq3GSZ1dapjM7HRI6zjvozegagox.png" class="img-fluid" alt="Logo 5">
      </div>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  const billRange = document.getElementById('billRange');
  const billValue = document.getElementById('billValue');

  billRange.addEventListener('input', function () {
    billValue.textContent = `$${this.value}`;
  });
</script>

@endsection
