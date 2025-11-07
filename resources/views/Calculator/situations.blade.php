@extends('layouts.base')
@section('content')
<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5">

    <!-- Map Background -->
    <div class="d-flex justify-content-center align-items-center"
      style="min-height: 75vh; background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=vw_MERtE37usXnRjVVW7IUlE5qk='); background-size: cover; background-repeat: no-repeat;">

      <!-- Main Card -->
      <div class="card shadow-lg border-0 rounded-4 bg-white w-100" style="max-width: 820px; margin-top: 40px; margin-bottom: 40px;">
        <div class="card-body text-center p-4">

          <!-- Title -->
          <h1 class="fw-bold fs-4 mb-4">Describe your current solar situation and need</h1>

          <!-- Option Group 1 -->
          <div class="d-grid gap-3 mx-auto mb-4" style="max-width: 550px;">
            <a href="{{ route('calculator.describe') }}" class="d-flex align-items-center border rounded p-3 text-decoration-none text-body hover-border-primary">
              <div class="border rounded-circle me-3" style="width: 22px; height: 22px;"></div>
              <span>Currently only for hot water, looking for PV</span>
            </a>

            <a href="{{ route('calculator.describe') }}" class="d-flex align-items-center border rounded p-3 text-decoration-none text-body hover-border-primary">
              <div class="border rounded-circle me-3" style="width: 22px; height: 22px;"></div>
              <span>I am looking for battery storage</span>
            </a>
          </div>

          <!-- Option Group 2 -->
          <div class="d-grid gap-3 mx-auto" style="max-width: 550px;">
            <a href="{{ route('calculator.describe') }}" class="d-flex align-items-center border rounded p-3 text-decoration-none text-body hover-border-primary">
              <div class="border rounded-circle me-3" style="width: 22px; height: 22px;"></div>
              <span>I want to expand my solar system size</span>
            </a>

            <a href="{{ route('calculator.describe') }}" class="d-flex align-items-center border rounded p-3 text-decoration-none text-body hover-border-primary">
              <div class="border rounded-circle me-3" style="width: 22px; height: 22px;"></div>
              <span>Curious about current prices but I don't need to speak to a solar company</span>
            </a>
          </div>

        </div>

        <!-- Navigation Buttons -->
        <div class="border-top py-3 px-4">
          <div class="row g-2">
            <div class="col-4">
              <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
                <i class="bi bi-arrow-left me-2"></i> Back
              </button>
            </div>

            <div class="col-4"></div>

            <div class="col-4 text-end"> <!-- Align to the right -->
              <button id="nextBtn" class="btn" style="background-color: #FFCA2C; color: #e9e6e6; d-flex align-items-center justify-content-center w-100;">
                Next
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" class="ms-2">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
