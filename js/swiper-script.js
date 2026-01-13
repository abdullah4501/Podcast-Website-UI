document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper for all elements with class .swiper
    if (typeof Swiper === 'undefined') {
        return; // Swiper library not loaded
    }

    var sliders = document.querySelectorAll('.swiper');

    sliders.forEach(function (sliderEl) {
        // Avoid double-initializing if Swiper was already attached
        if (sliderEl.swiper) return;

        new Swiper(sliderEl, {
            loop: true,
            speed: 800,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            // Enable pagination if a pagination element exists inside
            pagination: {
                el: sliderEl.querySelector('.swiper-pagination'),
                clickable: true,
            },
        });
    });
});
