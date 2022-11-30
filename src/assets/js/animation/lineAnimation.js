// $(function () {
//   $(".js-animateBorder").on("inview", function (event, isInView) {
//     if (isInView) {
//       //表示領域に入った時
//       $(this).addClass("lineAnimation");
//       console.log("inview");
//     }
//   });

//   $(".historyGraph__line").on("inview", function (event, isInView) {
//     if (isInView) {
//       //表示領域に入った時
//       $(this).addClass("lineAnimationVertical");
//     }
//   });

//   $(".js-lineAnimationToAfterElem").on("inview", function (event, isInView) {
//     if (isInView) {
//       //表示領域に入った時
//       $(this).addClass("lineAnimationAfterElement");
//     }
//   });
// });

// const elem1 = document.querySelector(".class1");
// const elem2 = document.querySelector(".class2");
// const events = ["load", "scroll", "resize"];

// events.map((event) => {
//   window.addEventListener(event, () => {
//     // 画面の下端
//     const windowBottom = window.pageXOffset + window.innerHeight;

//     // elem2の要素の上端のY座標
//     const targetElemTop = elem2.getBoundingClientRect().top;

//     // 画面の下端がelem2の上端を越したか判断する
//     const isPassfooterTop = windowBottom > targetElemTop;

//     isPassFooterTop ? hide(lineAt) : show(lineAt);
//   });
// });
