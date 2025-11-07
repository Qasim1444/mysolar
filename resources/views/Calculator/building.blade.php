@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light min-vh-100 py-5"
       style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=60.556731,-151.2825&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=7fCz9J7iwJ-u6dN5IqiMAqRL5z8='); background-size: cover; background-repeat: no-repeat;">

    <div class="card shadow mx-auto" style="max-width: 820px; border-radius: 8px;">
      <div class="card-body text-center py-4">
        <h1 class="fw-bold fs-2 mb-4">Is this a commercial or residential building?</h1>

        <div class="d-flex flex-column gap-3 mx-auto" style="max-width: 400px;">
          <!-- Plain radio buttons (Bootstrap form-check) -->
          <form>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="building_type" id="residential" value="residential" checked>
              <label class="form-check-label" for="residential">Residential</label>
            </div>
            <div class="form-check mt-2">
              <input class="form-check-input" type="radio" name="building_type" id="commercial" value="commercial">
              <label class="form-check-label" for="commercial">Commercial</label>
            </div>
          </form>
        </div>
      </div>

      <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center px-4">
        <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
          <i class="bi bi-arrow-left me-2"></i> Back
        </button>
        <a href="{{ route('calculator.shade') }}" class="btn text-white d-flex align-items-center" style="background-color: #FFCA2C">
          Next <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>
    </div>

    <!-- Brand/Partner Logos -->
  
  </div>
</div>
@endsection
