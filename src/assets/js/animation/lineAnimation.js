$(function () {
  $(".underLine").on("inview", function (event, isInView) {
    if (isInView) {
      //表示領域に入った時
      $(this).addClass("lineAnimation");
    }
  });

  $(".historyGraph__line").on("inview", function (event, isInView) {
    if (isInView) {
      //表示領域に入った時
      $(this).addClass("lineAnimationVertical");
    }
  });

  $(".js-lineAnimationToAfterElem").on("inview", function (event, isInView) {
    if (isInView) {
      //表示領域に入った時
      $(this).addClass("lineAnimationAfterElement");
    }
  });
});
