
@extends('layouts.base')
@section('content')

<section class="calculator-client w-100" style="min-height: calc(100vh - 64px); background-color: #f9fafb;">
  <div class="container-fluid py-5">
    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px;">

      <!-- Heading -->
      <div class="text-center border-bottom pb-3 mb-4">
        <h3 class="fw-bold fs-3">Find your roof</h3>
      </div>

      <!-- Map Area -->
      <div class="position-relative overflow-hidden"
           style="height: 375px; background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=35.389089,-118.983059&zoom=16&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=o8tZaYMjtXEHklJGgKooRzzaGac='); background-size: cover; background-repeat: no-repeat;">
        <div class="position-absolute w-100" style="bottom: 80px;">
          <div class="container">
            <input type="text" id="addressInput" class="form-control form-control-lg shadow-sm mx-auto" placeholder="Enter address" autocomplete="off" required
                   style="border-radius: 0; max-width: 500px;">
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="d-flex justify-content-between align-items-center mt-4">
        <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
          <i class="bi bi-arrow-left me-2"></i> Back
        </button>
        <button id="nextBtn" class="btn btn-warning text-white d-flex align-items-center" onclick="validateAndProceed()">
          Next <i class="bi bi-arrow-right ms-2"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .calculator-client .position-relative {
        transition: opacity 0.5s ease-in;
        opacity: 1;
    }
</style>

<script>
    let input = document.querySelector('#addressInput');
    let autocomplete = new google.maps.places.Autocomplete(input);

    function validateAndProceed() {
        if (input.value.trim() === '') {
            alert('Please enter an address before proceeding.');
            return;
        }
        window.location.href = "{{ route('calculator.map') }}";
    }
</script>

@endsection
