
@extends('layouts.base')
@section('content')


<section class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5">

    <!-- Main Card -->
    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px;">
      <!-- Heading -->
      <div class="text-center border-bottom pb-3 mb-4">
        <h3 class="fw-bold fs-3">Find your roof</h3>
      </div>

      <!-- Map Section -->
      <div class="position-relative rounded overflow-hidden"
           style="height: 375px; background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=35.389089,-118.983059&zoom=16&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=o8tZaYMjtXEHklJGgKooRzzaGac='); background-size: cover; background-repeat: no-repeat;">
        <div class="position-absolute w-100" style="bottom: 80px;">
          <div class="container">
            <input type="text" class="form-control form-control-lg shadow-sm" placeholder="Enter address" autocomplete="off">
          </div>
        </div>
      </div>

      <!-- Navigation Buttons -->
      <div class="d-flex justify-content-between align-items-center mt-4">
        <button class="btn btn-outline-secondary d-flex align-items-center">
          <i class="bi bi-arrow-left me-2"></i> Back
        </button>
        <button class="btn btn-warning text-white d-flex align-items-center">
          Next <i class="bi bi-arrow-right ms-2"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Trusted By Section -->
  
  </div>
</section>

<!-- Bootstrap Icons (Optional for arrows) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
@endsection
