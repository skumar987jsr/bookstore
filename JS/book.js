var swiper = new Swiper(".books-slider", {
    // slidesPerView: 1,
    // spaceBetween: 10,
    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    // },
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 1900,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            // spaceBetween: 10,
        },
        712: {
            slidesPerView: 2,
            // spaceBetween: 20,
        },
        1024: {
            slidesPerView: 3,
            // spaceBetween: 50,
        },
    },
});