!function (a) { "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof exports ? module.exports = a(require("jquery")) : a(jQuery) }(function (a) { function i() { var b, c, d = { height: f.innerHeight, width: f.innerWidth }; return d.height || (b = e.compatMode, (b || !a.support.boxModel) && (c = "CSS1Compat" === b ? g : e.body, d = { height: c.clientHeight, width: c.clientWidth })), d } function j() { return { top: f.pageYOffset || g.scrollTop || e.body.scrollTop, left: f.pageXOffset || g.scrollLeft || e.body.scrollLeft } } function k() { if (b.length) { var e = 0, f = a.map(b, function (a) { var b = a.data.selector, c = a.$element; return b ? c.find(b) : c }); for (c = c || i(), d = d || j(); e < b.length; e++)if (a.contains(g, f[e][0])) { var h = a(f[e]), k = { height: h[0].offsetHeight, width: h[0].offsetWidth }, l = h.offset(), m = h.data("inview"); if (!d || !c) return; l.top + k.height > d.top && l.top < d.top + c.height && l.left + k.width > d.left && l.left < d.left + c.width ? m || h.data("inview", !0).trigger("inview", [!0]) : m && h.data("inview", !1).trigger("inview", [!1]) } } } var c, d, h, b = [], e = document, f = window, g = e.documentElement; a.event.special.inview = { add: function (c) { b.push({ data: c, $element: a(this), element: this }), !h && b.length && (h = setInterval(k, 250)) }, remove: function (a) { for (var c = 0; c < b.length; c++){ var d = b[c]; if (d.element === this && d.data.guid === a.guid) { b.splice(c, 1); break } } b.length || (clearInterval(h), h = null) } }, a(f).on("scroll resize scrollstop", function () { c = d = null }), !g.addEventListener && g.attachEvent && g.attachEvent("onfocusin", function () { d = null }) });



// ===============================================fadeinFromLeft===============================================

/** fadeinFromLeftをclassに指定  **/
function fadeinFromLeft(uniqueClass) {

    var textWrappers = document.querySelectorAll(`.${uniqueClass}`);

    for (var i = 0; i < textWrappers.length; i++) {
      textWrappers[i].innerHTML = textWrappers[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    }

    anime.timeline({loop: true})
    .add({
      targets: `.${uniqueClass} .letter`,
      opacity: [0,1],
      easing: "easeInOutQuad",
      duration: 2250,
      delay: (el, i) => 150 * (i+1)
    }).add({
      targets: `.${uniqueClass}`,
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
    });
}

$('.fadeinFromLeft').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
  // 要素が見えたとき
	if (isInView) {

    const uniqueClass = "fadeinFromLeft-" + getRandomStr() + new Date().getTime().toString();
    $(this).addClass(uniqueClass);
    $(this).animate({
    opacity: 1,
  }, 200)

    fadeinFromLeft(uniqueClass);
	}
});


// ===============================================slideinFromLeftToRight===============================================

/** slideinFromLeftToRightをclassに指定  **/
function slideinFromLeftToRight(uniqueClass) {
// var textWrapper = document.querySelector('.slideinFromLeftToRight');
//   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  
  var textWrappers = document.querySelectorAll(`.${uniqueClass}`);

  for (var i = 0; i < textWrappers.length; i++) {
    textWrappers[i].innerHTML = textWrappers[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  }

anime.timeline({loop: true})
  .add({
    targets: `.${uniqueClass} .letter`,
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  }).add({
    targets: `.${uniqueClass} .letter`,
    translateX: [0,-30],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });
}

$('.slideinFromLeftToRight').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
  // 要素が見えたとき
	if (isInView) {

    const uniqueClass = "slideinFromLeftToRight-" + getRandomStr() + new Date().getTime().toString();
    $(this).addClass(uniqueClass);
    $(this).animate({
    opacity: 1,
  }, 200)

    slideinFromLeftToRight(uniqueClass);
	}
});

// ===============================================slideinFromBottomToTop===============================================
/** slideinFromBottomToTopをclassに指定  **/
function slideinFromBottomToTop(targetClass) {

  var textWrappers = document.querySelectorAll(`.${targetClass}`);

  for (var i = 0; i < textWrappers.length; i++) {

    //textWrappers[i]の要素のy座標と、現在のy座標の位置が一緒なら実行
    textWrappers[i].innerHTML = textWrappers[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  }

  anime.timeline({loop: false})
  .add({
    targets: `.${targetClass} .letter`,
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 100 + 30 * i
  })
}

$('.slideinFromBottomToTop').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
  // 要素が見えたとき

  const uniqueClass = "slideinFromBottomToTop-" + getRandomStr() + new Date().getTime().toString();
  $(this).addClass(uniqueClass);
  $(this).animate({
    opacity: 1,
  }, 200)
   
	if (isInView) {
    slideinFromBottomToTop(uniqueClass);
	}
});

// ===============================================slideinFromTopAndFadeout===============================================

/** slideinFromTopAndFadeoutをclassに指定  **/
function slideinFromTopAndFadeout(uniqueClass) {
// var textWrapper = document.querySelector('.slideinFromTopAndFadeout');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  var textWrappers = document.querySelectorAll(`.${uniqueClass}`);
  for (var i = 0; i < textWrappers.length; i++) {
    textWrappers[i].innerHTML = textWrappers[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  }

anime.timeline({loop: true})
  .add({
    targets: `.${uniqueClass} .letter`,
    translateY: [-100,0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i
  }).add({
    targets: `.${uniqueClass}`,
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
}

$('.slideinFromTopAndFadeout').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
  // 要素が見えたとき
	if (isInView) {

    const uniqueClass = "slideinFromTopAndFadeout-" + getRandomStr() + new Date().getTime().toString();
    $(this).addClass(uniqueClass);
    $(this).animate({
    opacity: 1,
  }, 200)

    slideinFromTopAndFadeout(uniqueClass);
	}
});

// ===============================================fadeinOneChar===============================================

/** fadeinOneCharをclassに指定  **/
function fadeinOneChar(uniqueClass) {

  var textWrappers = document.querySelectorAll(`.${uniqueClass}`);
  for (var i = 0; i < textWrappers.length; i++) {
    textWrappers[i].innerHTML = textWrappers[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
  }

anime.timeline({loop: true})
  .add({
    targets: `.${uniqueClass} .letter`,
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: `.${uniqueClass}`,
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
}

$('.fadeinOneChar').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
  // 要素が見えたとき
	if (isInView) {

    const uniqueClass = "fadeinOneChar-" + getRandomStr() + new Date().getTime().toString();
    $(this).addClass(uniqueClass);
    $(this).animate({
    opacity: 1,
  }, 200)

    fadeinOneChar(uniqueClass);
	}
});

// ===============================================passingCoverView===============================================

/** passingCoverViewをclassに指定  **/
$('.passingCoverView').on('inview', function (event, isInView, visiblePartX, visiblePartY) {
  // 要素が見えたとき
	if (isInView) {
		$(this).addClass('clipText')
    $(this).animate({
    opacity: 1,
  }, 200)
	}
});

//================================================multiTextAnimation==============================================

$('.multiTextAnimation').on('inview', function (event, isInView, visiblePartX, visiblePartY) {

  $(this).addClass('multiTextFadeinFromLeft')
  $(this).addClass('multiTextAnimation--animation')
  $(this).addClass('multiTextFadeinFromLeft')


    if (isInView) {
        var text = document.getElementById('text');
        text.style.opacity = 1;
        var newDom = '';
        var animationDelay = 6;

        for(let i = 0; i < text.innerText.length; i++)
        {
            newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i])+ '</span>';
        }

        text.innerHTML = newDom;
        var length = text.children.length;

        for(let i = 0; i < length; i++)
        {
            text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
        }
	}

});


function getRandomStr() {
  const str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  let randstr = '';
  const n = 12;
  
  for(let i=0; i<n; i++){
      randstr += str[~~(Math.random() * str.length)];
  }

  return randstr;
}
