<footer class="text-light pt-5 pb-3" style="background-color: #005290;">
  <style>
    /* local footer styles */
    .footer-btn {
      background-color: #F59E0B;
      border-color: #F59E0B;
      color: #fff; /* changed to white */
    }
    .footer-btn:hover {
      opacity: 0.95;
      color: #fff; /* ensure hover text also white */
    }
    .footer-link {
      color: #fff;
      text-decoration: none; /* remove underline */
    }
    .footer-link:hover {
      color: #f3f4f6;
      text-decoration: none; /* ensure no underline on hover */
    }
    .footer-btn.disabled,
    .footer-btn[disabled] {
      opacity: 0.6;
      cursor: not-allowed;
      pointer-events: none;
    }
  </style>

  <div class="container">
    <div class="row gy-4">

      <!-- Quick Links -->
      <div class="col-12 col-md-3">
        <h5 class="text-uppercase mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ route('about') }}" class="footer-link">About Us</a></li>
          <li><a href="{{ route('contact') }}" class="footer-link">Contact Us</a></li>
          <li><a href="{{ route('piracy.policy') }}" class="footer-link">Piracy Policy</a></li>
          <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
        </ul>
      </div>

      <!-- Mission -->
      <div class="col-12 col-md-3">
        <h5 class="text-uppercase mb-3">Mission</h5>
        <p class="mb-0">To accelerate adoption of clean solar energy by providing reliable information and easy access to services. We focus on education, accessibility, and community impact.</p>
      </div>

      <!-- Vision -->
      <div class="col-12 col-md-3">
        <h5 class="text-uppercase mb-3">Vision</h5>
        <p class="mb-0">A sustainable future powered by affordable, accessible solar solutions for every community — enabling energy independence and climate resilience.</p>
      </div>

      <!-- Subscribe -->
      <div class="col-12 col-md-3">
        <h5 class="text-uppercase mb-3">Subscribe</h5>
        <p class="small">Get updates, news, and resources about solar energy. Unsubscribe anytime.</p>
        <form id="footer-subscribe-form" action="{{ url('/subscribe') }}" method="POST" class="d-flex" novalidate>
          @csrf
          <input type="email" name="email" class="form-control me-2" placeholder="Your email" required aria-label="Email address">
          <button type="submit" class="btn footer-btn" disabled aria-disabled="true">Subscribe</button>
        </form>
        <small class="d-block mt-2 text-muted">We respect your privacy — your email will not be shared.</small>
      </div>

    </div>

    <hr class="bg-secondary my-4">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
      <small class="text-muted mb-2 mb-md-0">© {{ date('Y') }} MySolar. All rights reserved.</small>
      <div>
        <a href="#" class="footer-link me-3" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="footer-link me-3" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="footer-link" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('footer-subscribe-form');
    if (!form) return;
    const emailInput = form.querySelector('input[name="email"]');
    const btn = form.querySelector('button[type="submit"]');

    const isValidEmail = (v) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v);

    const updateButtonState = () => {
      const ok = isValidEmail(emailInput.value.trim());
      btn.disabled = !ok;
      btn.setAttribute('aria-disabled', (!ok).toString());
      if (ok) btn.classList.remove('disabled'); else btn.classList.add('disabled');
    };

    emailInput.addEventListener('input', updateButtonState);
    updateButtonState();

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const email = emailInput.value.trim();
      if (!isValidEmail(email)) {
        alert('Please enter a valid email address.');
        return;
      }
      alert('Thanks for subscribing!');
      form.reset();
      updateButtonState();
      // To actually submit to server, use fetch or remove e.preventDefault()
    });
  });
</script>
