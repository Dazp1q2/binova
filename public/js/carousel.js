// public/js/carousel.js
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.carousel-images');
    const images = document.querySelectorAll('.carousel-images img');
    let index = 0;

    function moveCarousel() {
        index = (index + 1) % images.length;
        carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    setInterval(moveCarousel, 3000);  // Cambiar imagen cada 3 segundos
});
