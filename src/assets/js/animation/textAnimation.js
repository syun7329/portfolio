const jsText = ".js-textAnimation span";
const targets = gsap.utils.toArray(".js-textAnimation");

targets.forEach((target) => {
  target.innerHTML = splitText(target);

  const q = gsap.utils.selector(target);
  const span = q("span");

  gsap.set(span, {
    y: "100%",
  });

  gsap.to(span, {
    y: 0,
    stagger: 0.05,
    duration: 1,
    ease: "power2.out",

    scrollTrigger: {
      trigger: target,
      start: "top 75%",
      once: true,
      // markers: true,
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
