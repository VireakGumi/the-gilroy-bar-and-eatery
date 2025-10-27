@extends('layouts.app')
@section('title', 'Venue Group Homepage')

@section('content')
    <section class="venue-grid-section bg-light px-4">
        @include('home_components.venue-grid')
        {{-- @include('home_components.mobile-tablet-slider') --}}
    </section>

    @include('home_components.about-banner')
    @include('home_components.about-content')
    @include('home_components.chef-banner')
    @include('home_components.whats-on-section')
    @include('home_components.private-events')
    @include('home_components.venues')
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const expandableRows = document.querySelectorAll('.event-row-expandable');
    expandableRows.forEach(row => {
        row.addEventListener('click', function() {
            const eventIndex = this.dataset.eventIndex;
            const detailsRow = document.getElementById('event-details-' + eventIndex);
            if(!detailsRow) return;

            const isActive = this.classList.contains('active');
            expandableRows.forEach(other => {
                const idx = other.dataset.eventIndex;
                const otherDetails = document.getElementById('event-details-' + idx);
                if(other !== this) other.classList.remove('active');
                if(otherDetails && otherDetails !== detailsRow) otherDetails.classList.remove('active');
            });

            if(!isActive){
                this.classList.add('active');
                detailsRow.classList.add('active');
            } else {
                this.classList.remove('active');
                detailsRow.classList.remove('active');
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    // Get references to the key elements
    const sliderContent = document.getElementById('venueSliderContent');
    const prevBtn = document.getElementById('slidePrev');
    const nextBtn = document.getElementById('slideNext');
    
    // Check if elements exist and if the slider is visible (d-lg-none means screen width < 992px)
    // We only enable JS navigation for screens where the slider is expected to be visible.
    if (!sliderContent || !prevBtn || !nextBtn || window.innerWidth >= 992) {
        // Hide buttons if JS is not running or if we are on desktop
        if (prevBtn) prevBtn.style.display = 'none';
        if (nextBtn) nextBtn.style.display = 'none';
        return;
    } else {
        // Ensure buttons are block elements so they can be positioned
        prevBtn.style.display = 'block';
        nextBtn.style.display = 'block';
    }


    /**
     * Scrolls the container by one full slide width using smooth behavior.
     * @param {number} direction - -1 for previous, 1 for next.
     */
    const scrollOneSlide = (direction) => {
        const firstSlide = sliderContent.querySelector('.venue-slide');
        if (!firstSlide) return;
        
        // Calculate the distance to scroll: slide width (85vw) + margin (20px)
        const slideWidth = firstSlide.offsetWidth;
        const marginSize = 20; 
        const scrollDistance = slideWidth + marginSize; 
        
        sliderContent.scrollBy({
            left: direction * scrollDistance, 
            behavior: 'smooth'
        });
        
        // Update button visibility shortly after the scroll starts
        setTimeout(updateNavButtons, 400); 
    };

    /**
     * Updates the opacity and disabled state of the navigation buttons
     * based on the current scroll position.
     */
    const updateNavButtons = () => {
        const { scrollLeft, scrollWidth, clientWidth } = sliderContent;
        const tolerance = 5; // A small tolerance for floating point errors
        
        // 1. Check for beginning (Prev button logic)
        if (scrollLeft <= tolerance) {
            prevBtn.style.opacity = '0';
            prevBtn.disabled = true;
        } else {
            prevBtn.style.opacity = '1';
            prevBtn.disabled = false;
        }
        
        // 2. Check for end (Next button logic)
        const isScrollable = scrollWidth > clientWidth;
        
        // We are at the end if the scroll left + client width equals or exceeds the total scroll width
        if (!isScrollable || scrollLeft + clientWidth >= scrollWidth - tolerance) { 
            nextBtn.style.opacity = '0';
            nextBtn.disabled = true;
        } else {
            nextBtn.style.opacity = '1';
            nextBtn.disabled = false;
        }
    };

    // Attach event listeners for arrow button clicks
    prevBtn.addEventListener('click', () => scrollOneSlide(-1));
    nextBtn.addEventListener('click', () => scrollOneSlide(1));

    // Listen for manual user scrolling (dragging/swiping) to update button visibility
    sliderContent.addEventListener('scroll', updateNavButtons);
    
    // Initial check on load
    updateNavButtons();
    
    // Recheck on window resize (e.g., orientation change on mobile)
    window.addEventListener('resize', () => {
         if (window.innerWidth < 992) {
            // Re-show buttons if they were hidden by the initial desktop check
            prevBtn.style.display = 'block';
            nextBtn.style.display = 'block';
            updateNavButtons();
        } else {
            // Hide buttons when resized to desktop view
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        }
    });

});

</script>
@endsection
