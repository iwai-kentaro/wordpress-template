/* -------------------------------------------*/
/* script.js
/* -------------------------------------------*/

window.addEventListener("DOMContentLoaded", function(){
    const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        spaceBetween: 42,
        loop: true,
        centeredSlides: true,
        pagination: {
          el: '.p-top-achievements__swiper-pagination',
          clickable: true,
        },
        navigation: {
          prevEl: '.p-top-achievements__swiper-prev',
          nextEl: '.p-top-achievements__swiper-next',
        }, 
        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 1.7,
          },
          1440: {
            slidesPerView: 1.9,

          },
          1840: {
            slidesPerView: 2.1,
          },
        },
      })
});