// Global declaration for Swiper loaded via script tag
declare const Swiper: any;

document.addEventListener('DOMContentLoaded', (): void => {
  // Initialize Swiper for all elements with class .swiper
  if (typeof Swiper === 'undefined') {
    return; // Swiper library not loaded
  }

  const sliders = document.querySelectorAll<HTMLElement>('.swiper');

  sliders.forEach((sliderEl: HTMLElement): void => {
    // Avoid double-initializing if Swiper was already attached
    const anySlider = sliderEl as any;
    if (anySlider.swiper) return;

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
