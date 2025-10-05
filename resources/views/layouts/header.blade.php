<nav class="custom-dark-bg">
    <a href="https://www.nowbookit.com/" class="custom-gold-text">
        <i class="far fa-calendar-plus"></i>
    </a>

    <a class="custom-gold-text custom-logo-script" href="/">G</a>

    <button id="menu-ham" class="custom-gold-text bg-none">
        <i class="fas fa-bars"></i>
    </button>
</nav>

<!-- Fullscreen Overlay (hidden by default) -->
<div class="menu-overlay" id="menu-overlay">
    <div class="menu-content">
        <div class="logo">
            <img src="{{ asset('images/logo-no-bg.png') }}" alt="Site Logo" class="img-fluid" style="max-width: 180px;">
        </div>

        <div class="menu-section">
            <h3>OUR SPACES</h3>
            <ul>
                <li><a href="/ground-floor-area">GROUND FLOOR AREA</a></li>
                <li><a href="/cocktail-dining-area">COCKTAIL DINING AREA</a></li>
                <li><a href="/rooftop-terrace">ROOFTOP TERRACE</a></li>
                <li><a href="/private-dining">PRIVATE DINING</a></li>
            </ul>
        </div>

        <div class="menu-section">
            <h3>QUICK LINKS</h3>
            <ul>
                <li><a href="/menu">MENU</a></li>
                <li><a href="/drink-menu">DRINK MENU</a></li>
                <li><a href="/private-events">PRIVATE EVENTS</a></li>
                <li><a href="/about-us">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">CAREER</a></li>
            </ul>
        </div>
    </div>

    <div class="close-btn" id="close-btn">&times;</div>
</div>

<script>
 document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('menu-ham');
    const overlay = document.getElementById('menu-overlay');
    const closeBtn = document.getElementById('close-btn');

    // Open overlay
    menuBtn.addEventListener('click', function(e) {
        e.preventDefault();
        overlay.classList.add('active');
    });

    // Close overlay
    closeBtn.addEventListener('click', function() {
        overlay.classList.remove('active');
    });

    // Optional: Close overlay when clicking outside content
    overlay.addEventListener('click', function(e) {
        if (e.target === overlay) {
            overlay.classList.remove('active');
        }
    });
});

</script>
