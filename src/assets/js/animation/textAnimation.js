const targets = document.querySelectorAll(".js-textAnimation");
const jsText = ".js-textAnimation span";

targets.forEach((target) => {
  target.innerHTML = splitText(target);

  gsap.set(jsText, {
    y: 100,
  });

  gsap.to(jsText, {
    y: 0,
    stagger: 0.05,
    duration: 0.5,
    ease: "power2.out",

    scrollTrigger: {
      trigger: target,
      start: "top center",
      once: true,
      // markers: true,
    },
  });
});

function splitText(el) {
  let splitText = "";
  const text = el.textContent;
  const result = text.split("");

  for (let i = 0; i < result.length; i++) {
    splitText += "<span>" + result[i] + "</span>";
  }

  return splitText;
}
