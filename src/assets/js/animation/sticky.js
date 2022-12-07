gsap.fromTo(
  ".js-sticky",
  {},
  {
    scrollTrigger: {
      trigger: ".js-sticky",
      start: "top 25%",
      end: "50% top",
      scrub: true,
      markers: true,
      pin: true,
      anticipatePin: 1,
      invalidateOnRefresh: true,
    },
  }
);
