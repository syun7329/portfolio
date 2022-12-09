// const stickyContainerHeight = document.querySelector(
//   ".js-stickyContainer"
// ).offsetHeight;

// const stickyTargetElemHeight = document.querySelector(
//   ".js-business__sticky"
// ).offsetHeight;

// console.log(stickyContainerHeight);
// console.log(stickyTargetElemHeight);

// const stickyStopPosition = stickyContainerHeight - stickyTargetElemHeight / 2;

// console.log(stickyStopPosition);

// if (window.matchMedia("(min-width: 800px)").matches) {
//   // pc
//   ScrollTrigger.create({
//     trigger: ".js-sticky",
//     start: "top 25%",
//     endTrigger: ".js-stickyContainer",
//     end: `${stickyStopPosition}px center`,
//     scrub: true,
//     pin: true,
//     anticipatePin: 1,
//     invalidateOnRefresh: true,
//     markers: true,
//   });
// }
