<header class="sticky-top bg-light-creamy border-bottom mg-footer">
    <div class="container-fluid px-4 py-1 d-flex align-items-center justify-content-between">

        {{-- <!-- Hamburger Button -->
    <button class="btn p-0 border-0 bg-transparent" type="button" id="menuToggle">
      <i class="bi bi-list custom-hamburger-size"></i>
    </button> --}}

        <!-- Logo -->
        <div class="">
            <a href="/" class="d-block text-center">
                <img src="{{ asset('images/logo-no-bg.png') }}" alt="Margaret Logo" class="custom-logo-img">
            </a>
        </div>

        <!-- Book Button (Desktop only) -->
        <div class="d-lg-flex">
            <a href="https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00"
                class="btn custom-book-btn text-uppercase fw-bold d-none d-lg-block" target="_blank"
                rel="noopener noreferrer">
                BOOK A TABLE
            </a>

            <a href="" class="far fa-calendar-plus d-lg-none d-md-block pe-3 fs-2"></a>
        </div>

    </div>

    {{-- <!-- Slide Down Menu -->
  <div class="slide-down-menu px-4" id="slideDownMenu">
    <div class="container-fluid">
      <ul class="list-unstyled mb-0 py-3">
        <li><a href="/" class="d-block py-2 text-dark text-decoration-none">Home</a></li>
        <li><a href="/about" class="d-block py-2 text-dark text-decoration-none">About</a></li>
        <li><a href="/events" class="d-block py-2 text-dark text-decoration-none">Events</a></li>
        <li><a href="/what-on" class="d-block py-2 text-dark text-decoration-none">What's On</a></li>
        <li><a href="/gift_voucher" class="d-block py-2 text-dark text-decoration-none">Gift Vouchers</a></li>
        <!-- BOOK BUTTON for Mobile & Tablet - Now styled as regular link -->
        <li class="d-lg-none">
          <a href="https://bookings.nowbookit.com/?accountid=6b8a8752-7eb2-49d7-8095-168dc2fdddc3&venueid=14008&theme=light&colors=hex,33691e,ffea00"
            class="d-block py-2 text-dark text-decoration-none custom-book-btn"
            target="_blank" rel="noopener noreferrer">
            Book A Table
          </a>
        </li>
      </ul>
    </div>
  </div> --}}
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const slideDownMenu = document.getElementById('slideDownMenu');
        if (menuToggle && slideDownMenu) {
            menuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                slideDownMenu.classList.toggle('active');
            });

            const menuLinks = slideDownMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    slideDownMenu.classList.remove('active');
                });
            });

            document.addEventListener('click', function(e) {
                if (!slideDownMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                    slideDownMenu.classList.remove('active');
                }
            });
        }
    });
</script>
