import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export const initSliders = () => {
  //слайдер отзывов
  new Swiper('.js-review-slider .swiper', {
    loop: false,
    spaceBetween: 10,
    slidesPerView: 'auto',
    navigation: {
      prevEl: ".js-review-slider .ctrl--prev",
      nextEl: ".js-review-slider .ctrl--next",
    },
    pagination: false,
    breakpoints: {
      767 : {
        slidesPerView: 3,
      },
      1199: {
        spaceBetween: 30,
        slidesPerView: 6,
      },
    },
  });

  new Swiper('.js-team-slider', {
    loop: false,
    spaceBetween: 0,
    slidesPerView: 1,
    navigation: false,
    pagination: false,
  });
}
