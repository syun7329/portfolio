const jsText = ".js-textAnimation span";
const targets = gsap.utils.toArray(".js-textAnimation");

targets.forEach((target) => {

  target.innerHTML = splitText(target);

  const q = gsap.utils.selector(target)
  const span = q('span')

  gsap.set(span, {
    y: 200,
  });

  gsap.to(span, {
    y: 0,
    stagger: 0.05,
    duration: 0.5,
    ease: "power2.out",

    scrollTrigger: {
      trigger: target,
      start: "top center",
      once: true,
      markers: true,
    },
  });
});

function splitText(e) {
  let splitText = "";
  const text = e.textContent;
  const result = text.split("");

  for (let i = 0; i < result.length; i++) {
    splitText += "<span>" + result[i] + "</span>";
  }

  return splitText;
}
