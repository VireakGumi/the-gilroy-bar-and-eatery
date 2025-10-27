<header class="sticky-top bg-light-creamy border-bottom border-gray-200">
  <div class="container-fluid px-4 py-3 d-flex flex-column flex-md-row align-items-center">

    <!-- Mobile Top Row: Calendar Icon + Logo -->
    <div class="d-flex d-md-none align-items-center justify-content-between w-100 mb-3">
      <a href="https://www.nowbookit.com/"
        class="btn custom-book-btn-icon d-flex align-items-center justify-content-center"
        target="_blank" rel="noopener noreferrer"
        aria-label="Book a Table">
        <i class="bi bi-calendar-check"></i>
      </a>

      <a href="/" class="mx-auto">
        <img src="{{ asset('images/logo-no-bg.png') }}" alt="Margaret Logo" class="custom-logo-img">
      </a>

      <!-- Empty div for balance -->
      <div style="width: 48px;"></div>
    </div>

    <!-- Desktop Layout -->
    <div class="d-none d-md-flex position-absolute start-50 translate-middle-x"> 
      <a href="/" class="d-block text-center">
        <img src="{{ asset('images/logo-no-bg.png') }}" alt="Margaret Logo" class="custom-logo-img">
      </a>
    </div>

    <div class="d-none d-md-flex flex-grow-1 justify-content-end">
      <a href="https://www.nowbookit.com/"
          class="btn custom-book-btn text-uppercase fw-bold"
          target="_blank" rel="noopener noreferrer">
        BOOK A TABLE
      </a>
    </div>

  </div>
</header>