@extends('layouts.base')
@section('content')

<section class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5">
    <div class="bg-white shadow rounded mx-auto p-4" style="max-width: 820px;">
      <div class="text-center">
        <img src="{{ asset('map.jpg') }}"
             alt="Map" class="img-fluid rounded" style="width:100%; height:auto; object-fit:cover;">
      </div>

      <div class="d-flex justify-content-between align-items-center mt-4">
        <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
          <i class="bi bi-arrow-left me-2"></i> Back
        </button>
        <a href="{{ route('calculator.building') }}" class="btn d-flex align-items-center gap-2" style="background-color: #FFCA2C; color: white;">
          Next <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
