
new Swiper('.slider__blog', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
        delay: 3000,
    },
    slidesPerView: 1,
    spaceBetween: 40,
    navigation: {
        nextEl: '.slider__blog__next',
        prevEl: '.slider__blog__pev',
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 40
        }
    }
});

// swiper
// swiper-wrapper
// swiper-slide
// https://picsum.photos
// https://jsonplaceholder.typicode.com

