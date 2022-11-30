gsap.registerPlugin(ScrollTrigger);

const aboutTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#about",
    start: "top 50%",
    once: true,
    markers: true,
  }
});

gsap.set('.js-about', {
  strokeDashoffset: 1535,
})

gsap.set('.js-bout', {
  transform: 'matrix(0.407, 0.914, -0.914, 0.407, 1860.03, -1456.55)',
})

aboutTimeline
  .to('.js-about', {
    strokeDashoffset: 0,
    fill: 'transparent',
    duration: 1,
  })
  .to('.js-about', {
    strokeDashoffset: 0,
    fill: '#000',
    delay: 0.2,
    duration: 0.2,
  })
  .to('.js-bout', {
    transform: 'matrix(0.407, 0.914, -0.914, 0.407, 1934.03, -1277.55)',
    delay: 0.2,
    duration: 0.2,
  });

gsap.set('.js-usiness', {
  transform: 'translate(126px, 177px)',
});

const businessTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#business",
    start: "top 50%",
    once: true,
    markers: true,
  }
});

businessTimeline.to('.js-usiness', {
  transform: 'translate(126px, 107px)',
  duration: .4,
});

gsap.set('.js-column', {
  strokeDasharray: 1700,
  strokeDashoffset: 1700,
  stroke: '#000',
  fill: 'transparent',
});

gsap.set('.js-olumnBox', {
  stroke: 'transparent',
});

gsap.set('.js-olumn', {
  transform: 'translate(-30px, 284px)',
});

const clientTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#column",
    start: "top 20%",
    once: true,
    markers: true,
  }
});

clientTimeline
  .to('.js-column', {
    strokeDashoffset: 0,
    duration: 0.5,
  })
  .to('.js-column', {
    fill: '#000',
    duration: 0.5,
  })
  .to('.js-olumn', {
    transform: 'translate(220px, 284px)',
    duration: 0.2,
  });