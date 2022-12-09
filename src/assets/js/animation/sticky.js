if (window.matchMedia("(min-width: 800px)").matches) {
  const svg = document.getElementById("stickySvg");

  if (svg) {
    const svgHeight = svg.clientHeight;
    const position = window.innerHeight * 0.25;

    ScrollTrigger.create({
      trigger: ".js-stickyContainer",
      start: `top +${position}px`,
      end: `bottom +${position + svgHeight}px`,
      pin: ".js-sticky",
    });
  }
} else if (window.matchMedia("(max-width:800px)").matches) {
}
