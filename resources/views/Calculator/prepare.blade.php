@extends('layouts.base')
@section('content')

<div class="calculator-client w-100" style="min-height: calc(100vh - 64px);">
  <div class="container-fluid bg-light py-5">

    <!-- Background Section -->
    <div class="d-flex justify-content-center align-items-center"
      style="min-height: 75vh; background-image: url('https://maps.googleapis.com/maps/api/staticmap?center=61.5961817,-149.1092071&zoom=18&size=640x350&scale=2&maptype=satellite&key=AIzaSyAVYjBxZNyTTzsqf1QmpFIsp6GW2SLebE4&signature=vw_MERtE37usXnRjVVW7IUlE5qk='); background-size: cover; background-repeat: no-repeat;">

      <!-- Main Card -->
      <div class="card shadow-lg border-0 rounded-3 w-100" style="max-width: 820px;">
        <div class="card-body text-center p-4">

          <!-- Question -->
          <h1 class="fw-bold mb-4">
            Are you prepared to trim trees to increase solar production from your system?
          </h1>

          <!-- Hidden input to store answer -->
          <input type="hidden" name="tree_trimming" id="tree_trimming_answer" value="">

          <!-- Options -->
          <div class="d-grid gap-3 mx-auto" style="max-width: 400px;">
            <label class="option-item border border-primary rounded p-3 d-flex align-items-center justify-content-start bg-light text-primary bg-opacity-25"
              style="cursor: pointer;" data-value="yes">
              <input type="radio" name="tree_trimming" value="yes" class="d-none" onchange="handleOption('yes')">
              <div class="radio-circle me-3"></div>
              <span>Yes</span>
            </label>

            <label class="option-item border rounded p-3 d-flex align-items-center justify-content-start"
              style="cursor: pointer;" data-value="no">
              <input type="radio" name="tree_trimming" value="no" class="d-none" onchange="handleOption('no')">
              <div class="radio-circle me-3"></div>
              <span>No</span>
            </label>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="card-footer bg-transparent border-0 d-flex justify-content-between align-items-center px-4">
          <button class="btn btn-outline-secondary d-flex align-items-center" onclick="history.back()">
            <i class="bi bi-arrow-left me-2"></i> Back
          </button>
          <button id="nextBtn" class="btn" style="background-color: #FFCA2C; color: #e9e1e1;" disabled>
            Next <i class="bi bi-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .radio-circle {
    width: 22px;
    height: 22px;
    border: 2px solid #ccc;
    border-radius: 50%;
    transition: all 0.2s;
  }

  input[type="radio"]:checked + .radio-circle {
    border-color: #007bff;
    background-color: #007bff;
    position: relative;
  }

  input[type="radio"]:checked + .radio-circle::after {
    content: '';
    width: 10px;
    height: 10px;
    background: white;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .option-item {
    transition: all 0.2s;
  }

  .option-item:has(input[type="radio"]:checked) {
    background-color: rgba(0, 123, 255, 0.1) !important;
    border-color: #007bff !important;
  }
</style>

<script>
  function handleOption(answer) {
    console.log('Selected:', answer);
    document.getElementById('tree_trimming_answer').value = answer;

    // Enable Next button
    document.getElementById('nextBtn').disabled = false;

    // Update Next button href with answer
    const nextUrl = `{{ route('calculator.currently') }}?tree_trimming=${answer}`;
    document.getElementById('nextBtn').onclick = () => {
      window.location.href = nextUrl;
    };
  }

  // Optional: Allow clicking entire label
  document.querySelectorAll('.option-item').forEach(item => {
    item.addEventListener('click', function() {
      const radio = this.querySelector('input[type="radio"]');
      if (radio) {
        radio.checked = true;
        handleOption(radio.value);
      }
    });
  });
</script>

@endsection
