@extends('layouts.base')
@section('content')
    <section class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
        <div class="container-fluid px-4 py-5"
            style="background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=35.389089,-118.983059&zoom=16&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=o8tZaYMjtXEHklJGgKooRzzaGac=');
              background-size: cover; background-repeat: no-repeat; min-height: 100vh;">

            <div class="bg-white rounded-3 mx-auto p-4 shadow-sm" style="max-width: 820px;">
                <div class="text-center mb-4">
                    <h1 class="fw-bold">Select your utility provider</h1>
                </div>

                <div class="row justify-content-center g-4 text-center">
                    <div class="col-6 col-md-4">
                        <a href="{{ route('calculator.utility-bill') }}" class="text-decoration-none">
                            <div class="card border-0 shadow-sm h-100 cursor-pointer hover-shadow">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://d3skrlqoqnneot.cloudfront.net/main/images/UtilityLogos/14328.jpg"
                                        class="img-fluid rounded mb-2" alt="Pacific Gas & Electric Co">
                                    <p class="text-muted small mb-0">Pacific Gas & Electric Co</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 col-md-4">
                        <a href="{{ route('calculator.utility-bill') }}" class="text-decoration-none">
                            <div class="card border-0 shadow-sm h-100 cursor-pointer hover-shadow">
                                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                                    <img src="https://d3skrlqoqnneot.cloudfront.net/main/images/UtilityLogos/OTHER.jpg"
                                        class="img-fluid rounded mb-2" alt="Other">
                                    <p class="text-muted small mb-0">Other</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="text-start mt-4">
                    <button onclick="window.history.back()" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Back
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
