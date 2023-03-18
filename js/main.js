import 'hystmodal/css';
import '@fancyapps/ui/dist/fancybox.css';
import HystModal from 'hystmodal';
import LazyLoad from 'vanilla-lazyload';
import { Fancybox } from '@fancyapps/ui';

import initScrollTop from './components/scrollTop';
import initScrollTo from './components/scrollTo';
import { initSliders } from './components/sliders';
import { startAccordeons } from './components/accordeons';
import initVideoReviews from './components/videoreview';
import '../styles/app.scss';
import initScrollAnimation from './components/scrollAnimation';

initSliders();
startAccordeons();
initVideoReviews();
initScrollTo();
initScrollTop();
initScrollAnimation();


/**
 * Галерея FancyBox
 * см. https://fancyapps.com/fancybox/
 */
Fancybox.bind('[data-fancybox]', {
  Toolbar: {
    display: ['close'],
  },
  Image: {
    zoom: false,
  },
  compact: true,
  animated: false,
  preload: 0,
  template: {
    buttons: '',
  },
});


/**
 * Модальные окна
 * см. https://addmorescripts.github.io/hystModal/index_ru.html
 */
window.modalInstance = new HystModal({
  linkAttributeName: "data-hystmodal",
  waitTransitions: false,
});



/**
 * Ленивая подгрузка картинок
 * см. https://github.com/verlok/vanilla-lazyload
 */
new LazyLoad();
