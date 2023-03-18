import ScrollReveal from 'scrollreveal'

function initScrollAnimation() {
  ScrollReveal().reveal(document.querySelectorAll(".js-slide-bot"), {
    delay: 0,
    distance: "50px",
    duration: 1000,
    origin: "bottom",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-right"), {
    delay: 0,
    distance: "100px",
    duration: 1000,
    origin: "right",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-left"), {
    delay: 0,
    distance: "100px",
    duration: 1000,
    origin: "left",
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 100,
      top: 100,
    },
  });

  ScrollReveal().reveal(document.querySelectorAll(".js-slide-interval"), {
    distance: "30px",
    duration: 400,
    useDelay: "always",
    origin: "bottom",
    interval: 100,
    reset: false,
    mobile: false,
    viewOffset: {
      bottom: 0,
      top: -500,
    },
  });
}

export default initScrollAnimation;
