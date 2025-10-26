<header class="sticky-top bg-light-creamy border-bottom border-gray-200">
  <div class="container-fluid px-5 py-3 d-flex align-items-center justify-content-between">

    <!-- Hamburger Button -->
    <button class="btn p-0 border-0 bg-transparent" type="button" id="menuToggle">
      <i class="bi bi-list custom-hamburger-size"></i>
    </button>

    <!-- Logo -->
    <div class="position-absolute start-50 translate-middle-x"> 
      <a href="/" class="d-block text-center">
        <img src="{{ asset('images/logo-no-bg.png') }}" alt="Margaret Logo" class="custom-logo-img">
      </a>
    </div>

    <!-- Book Button -->
    <div class="d-none d-md-flex">
      <a href="https://www.nowbookit.com/"
         class="btn custom-book-btn text-uppercase fw-bold"
         target="_blank" rel="noopener noreferrer">
        BOOK A TABLE
      </a>
    </div>

  </div>

  <!-- Slide Down Menu -->
  <div class="slide-down-menu" id="slideDownMenu">
    <div class="container-fluid">
      <ul class="list-unstyled mb-0 py-3">
        <li><a href="/" class="d-block py-2 text-dark text-decoration-none">Home</a></li>
        <li><a href="/about" class="d-block py-2 text-dark text-decoration-none">About</a></li>
        <li><a href="/menu" class="d-block py-2 text-dark text-decoration-none">Menu</a></li>
        <li><a href="/contact" class="d-block py-2 text-dark text-decoration-none">Contact</a></li>
        <li class="d-md-none mt-3">
          <a href="https://www.nowbookit.com/" class="btn custom-book-btn text-uppercase fw-bold w-100 text-center" target="_blank">
            BOOK A TABLE
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>
<script>
document.addEventListener('DOMContentLoaded', function() {    
    const menuToggle = document.getElementById('menuToggle');
    const slideDownMenu = document.getElementById('slideDownMenu');
    if (menuToggle && slideDownMenu) {
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('Hamburger clicked!');
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
        
    } else {
        console.error('Menu elements not found!');
    }
});
</script>
