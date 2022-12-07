const elems = gsap.utils.toArray(".js-borderAnimation");

elems.forEach((elem) => {
  gsap.to(elem, {
    scrollTrigger: {
      trigger: elem,
      start: "top 50%",
      once: true,
      toggleClass: { targets: elem, className: "animate" },
      // markers: true,
    },
  });
});
