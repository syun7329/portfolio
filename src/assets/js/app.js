gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.create({
  trigger: "#about",
  start: "top 80%",
  once: true,
  toggleClass: {
    targets: "#about .borderTitleAnimation",
    className: "animated",
  },
});
