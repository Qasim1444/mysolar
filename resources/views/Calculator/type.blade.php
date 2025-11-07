
@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5" style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4'); background-size: cover; background-repeat: no-repeat; min-height: 100vh;">

    <!-- Card -->
    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px;">
      <div class="text-center border-bottom pb-3 mb-4">
        <h1 class="fw-bold fs-2">Select System Type</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4 fw-bold text-center">
        <div class="col">
          <div class="border rounded shadow-sm p-3 h-100 d-flex flex-column align-items-center justify-content-center hover-shadow">
            <img src="https://cdn.admin-sr.com/Solar Estimate/8RKDmEA9q6bQ8dlz6U1JPfrjirBusbixFEOFid87.jpg" class="img-fluid mb-2" alt="Solar">
            <div class="text-muted small">Solar</div>
          </div>
        </div>
        <div class="col">
          <div class="border rounded shadow-sm p-3 h-100 d-flex flex-column align-items-center justify-content-center hover-shadow">
            <img src="https://cdn.admin-sr.com/Solar Estimate/APHh5dOsHZScUv5un9Dw05MENFcCB3EGG71UnlHB.jpg" class="img-fluid mb-2" alt="Solar with battery storage">
            <div class="text-muted small">Solar with battery storage</div>
          </div>
        </div>
      </div>

      <div class="text-start mt-4">
        <button class="btn btn-outline-secondary d-flex align-items-center gap-2" onclick="history.back()">
          <i class="bi bi-arrow-left"></i> Back
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
          <img src="https://cdn.admin-sr.com/Solar Estimate/B8FSIaTn7ByZGfLtnWaZUXqLUplzSrSgDP2WjcDa.png" class="img-fluid" alt="Logo 2">
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

@endsection
