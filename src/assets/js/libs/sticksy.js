// stickyさせたい要素
const stickyElems = [".js-business__sticky"];

const arr = [];

stickyElems.map((e) => {
  arr.push(
    new Sticksy(e, {
      topSpacing: calcMiddlePosition(e),
    })
  );
});

arr.map((e) => {
  e.onStateChanged = function (state) {
    if (state === "fixed") e.nodeRef.classList.add("widget--fixed");
    else e.nodeRef.classList.remove("widget--fixed");
  };
});

// オブジェクトが上下中央に配置されるtopの位置を取得
function calcMiddlePosition(selector) {
  const elem = document.querySelector(selector);
  let windowHalfYoffset = 0;

  if (elem) {
    const elemHeight = elem.clientHeight;
    windowHalfYoffset = (window.innerHeight - elemHeight) / 2;
  }

  return windowHalfYoffset;
}
