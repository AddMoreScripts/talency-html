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
    effect: window.innerWidth > 992 ? 'fade' : 'slide',
    fadeEffect: {
      crossFade: true
    },
    spaceBetween: 15,
    slidesPerView: 'auto',
    navigation: false,
    pagination: false,
    autoHeight: false,
    breakpoints: {
      992: {
        slidesPerView: 1,
        autoHeight: false,
        spaceBetween: 0,
      },
    }
  });


  const diplom = new Swiper('.js-diplomblock-slider', {
    loop: false,
    spaceBetween: 15,
    slidesPerView: 1,
    navigation: {
      prevEl: ".js-diplomblock-slider .ctrl--prev",
      nextEl: ".js-diplomblock-slider .ctrl--next",
    },
  });


  const teamblock = document.querySelector('.teamblock');
  if (teamblock) {
    teamblock.addEventListener('mouseover', (e) => {
      const nameLink = e.target.closest('.teamblock__navlink[data-slide]');
      if(!nameLink) return;
      e.preventDefault();
      teamslider.slideTo(parseInt(nameLink.dataset.slide));
    });
    teamblock.addEventListener('click', (e) => {
      const nameLink = e.target.closest('.teamblock__navlink[data-slide]');
      if(!nameLink) return;
      e.preventDefault();
    });
  }

  //Главная стр.
  new Swiper('.js-front-cat .swiper', {
    loop: false,
    spaceBetween: 20,
    slidesPerView: 'auto',
    navigation: false,
    pagination: false,
    autoHeight: false,
    navigation: {
      prevEl: ".js-front-cat .ctrl--prev",
      nextEl: ".js-front-cat .ctrl--next",
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
      },
    }
  });

}
