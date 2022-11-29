// stickyさせたい要素
const stickyElems = [".js-business__sticky", ".js-clients__sticky"];
const arr = [];

if (stickyElems) {
  stickyElems.map((e) => {
    arr.push(
      new Sticksy(e, {
        topSpacing: calcMiddlePosition(e),
      })
    );
  });
}

arr.map((e) => {
  e.onStateChanged = function (state) {
    if (state === "fixed") e.nodeRef.classList.add("widget--fixed");
    else e.nodeRef.classList.remove("widget--fixed");
  };
});

// オブジェクトが上下中央に配置されるtopの位置を取得
function calcMiddlePosition(e) {
  let elemHeight = document.querySelector(e).clientHeight;
  let windowHalfYoffset = (window.innerHeight - elemHeight) / 2;

  return windowHalfYoffset;
}
