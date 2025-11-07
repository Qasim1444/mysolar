@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5">
    <div class="card shadow mx-auto" style="max-width:820px; border-radius:8px;">
      <div class="card-body text-center py-4">
        <h1 class="fw-bold fs-2 mb-4">Does the roof have shading?</h1>

        <div class="d-flex flex-column gap-3 mx-auto" style="max-width:400px;">
          <form>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="shade" id="shade_yes" value="yes">
              <label class="form-check-label" for="shade_yes">Yes</label>
            </div>
            <div class="form-check mt-2">
              <input class="form-check-input" type="radio" name="shade" id="shade_no" value="no" checked>
              <label class="form-check-label" for="shade_no">No</label>
            </div>
          </form>
        </div>
      </div>

      <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center px-4">
       <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
          <i class="bi bi-arrow-left me-2"></i> Back
        </button>
        <a href="{{ route('calculator.prepare') }}" class="btn" style="background-color: #FFCA2C; color: #ece4e4;">
          Next <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</div>

@endsection
