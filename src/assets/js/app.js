gsap.registerPlugin(ScrollTrigger);

// about

gsap.set(".js-a", {
  strokeDashoffset: 1535,
  strokeDashArray: 1535,
  stroke: "#000",
  fill: "transparent",
});

gsap.set(".js-bout", {
  stroke: "#000",
  fill: "transparent",
  transform: "matrix(0.407, 0.914, -0.914, 0.407, 1860.03, -1456.55)",
});

const aboutTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#about",
    start: "top 50%",
    once: true,
    markers: true,
  },
});

aboutTimeline
  .to(".js-a", {
    strokeDashoffset: 0,
    duration: 1,
    ease: "power2.out",
  })
  .to(".js-a", {
    fill: "#000",
    duration: 1,
    ease: "power2.out",
  })
  .to(".js-bout", {
    fill: "#000",
    strokeDashoffset: 0,
    strokeDashArray: 0,
  })
  .to(".js-bout", {
    transform: "matrix(0.407, 0.914, -0.914, 0.407, 1934.03, -1277.55)",
    delay: 0.2,
    duration: 0.5,
    ease: "power2.out",
  });

// business

gsap.set(".js-business", {
  strokeDashoffset: 600,
});

gsap.set(".js-usiness", {
  transform: "translate(126px, 177px)",
});

const businessTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#business",
    start: "top 50%",
    once: true,
    // markers: true,
  },
});

businessTimeline.to(".js-usiness", {
  transform: "translate(126px, 107px)",
  duration: 1,
  ease: "power2.out",
});

// column
gsap.set(".js-column", {
  strokeDasharray: 1700,
  strokeDashoffset: 1700,
  stroke: "#000",
  fill: "transparent",
});

gsap.set(".js-columnBox", {
  stroke: "transparent",
});

gsap.set(".js-olumn", {
  transform: "translate(-30px, 284px)",
});

const clientTimeline = gsap.timeline({
  scrollTrigger: {
    trigger: "#column",
    start: "top 20%",
    once: true,
    // markers: true,
  },
});

clientTimeline
  .to(".js-column", {
    strokeDashoffset: 0,
    duration: 1,
    ease: "power2.out",
  })
  .to(".js-column", {
    fill: "#000",
    duration: 1,
    ease: "power2.out",
  })
  .to(".js-olumn", {
    transform: "translate(220px, 284px)",
    duration: 1,
    ease: "power2.out",
  });
