<section
    class="vh-100 d-flex flex-column justify-content-center align-items-center text-center text-white position-relative"
    style="background: url('https://cdn.admin-sr.com/Solar%20Estimate/T99qxSFSuE7w7hhRbGJMgp0BcAai0vtqRS75a68G.jpg') no-repeat center center/cover;">

    <!-- Heading -->
    <div class="container">
        <h1 class="fw-bold mb-4" style="font-size: 2rem;">
            See how much it will cost to install solar<br>panels for your home
        </h1>

        <!-- Zip Code + Button -->
        <form class="d-flex justify-content-center align-items-center gap-2 flex-wrap"
            style="max-width: 400px; margin: 0 auto;">
            <input type="text" class="form-control text-center" placeholder="Enter your zip code" maxlength="5"
                style="width: 180px; padding: 12px 16px; border-radius: 6px;">
            <button type="button" onclick="window.location.href='{{ route('calculator.utility-provider') }}'"
                class="btn fw-bold text-white"
                style="background-color: #f97316; border-radius: 6px; padding: 12px 24px;">
                Calculate Cost
            </button>
        </form>
    </div>

    <!-- Bottom Badges -->
    <div class="position-absolute bottom-0 start-0 p-4 text-start">
        <div class="fw-bold mb-1">Our Google Reviews</div>
        <div class="d-flex align-items-center">
            <div class="text-warning me-2">★★★★★</div>
            <div class="fw-bold">4.8</div>
        </div>
        <div class="small opacity-75">from 408 reviews</div>
    </div>

    <div class="position-absolute bottom-0 end-0 p-4 text-end small opacity-75">
        ✅ Verified business on <strong>facebook</strong> & <strong>Google</strong>
    </div>



</section>
