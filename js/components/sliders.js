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
        slidesPerView: 5,
      },
      1600: {
        spaceBetween: 30,
        slidesPerView: 6,
      },
    },
  });

  const teamslider = new Swiper('.js-team-slider', {
    loop: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    spaceBetween: 0,
    slidesPerView: 1,
    navigation: false,
    pagination: false,
  });

  const teamblock = document.querySelector('.teamblock');
  if (teamblock) {
    teamblock.addEventListener('mouseover', (e) => {
      const nameLink = e.target.closest('.teamblock__navlink[data-slide]');
      if(!nameLink) return;
      e.preventDefault();
      // document.querySelectorAll('.teamblock__navlink.is-active').forEach(el => {
      //   el.classList.remove('is-active');
      // });
      // nameLink.classList.add('is-active');
      teamslider.slideTo(parseInt(nameLink.dataset.slide));
    });
    teamblock.addEventListener('click', (e) => {
      const nameLink = e.target.closest('.teamblock__navlink[data-slide]');
      if(!nameLink) return;
      e.preventDefault();
    });
  }

}
