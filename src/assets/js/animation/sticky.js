const svg = document.getElementById('stickySvg')
const svgHeight = svg.clientHeight
const position = window.innerHeight * 0.25

ScrollTrigger.create({
  trigger: ".js-stickyContainer",
  start: `top +${position}px`, 
  end: `bottom +${position + svgHeight}px`,
	pin: ".js-sticky",
});