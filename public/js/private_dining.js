const carousel = document.getElementById('terraceCarousel');

function scrollCarouselLeft() {
    const itemWidth = carousel.querySelector('.flex-shrink-0').offsetWidth + 12; // 12 = gap
    carousel.scrollBy({ left: -itemWidth, behavior: 'smooth' });
}

function scrollCarouselRight() {
    const itemWidth = carousel.querySelector('.flex-shrink-0').offsetWidth + 12;
    carousel.scrollBy({ left: itemWidth, behavior: 'smooth' });
}