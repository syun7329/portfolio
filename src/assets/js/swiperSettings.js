// how to use swiper.js
// https://swiperjs.com/get-started

// ====================================
// swiper setting of heroSlider
// ====================================
function initHeroSlider() {
  const swiper = new Swiper(".heroSlider", {
    loop: true,
    slidesPerView: 1,
    centeredSlides: false,

    autoplay: {
      delay: 4000,
    },

    // Navigation arrows
    navigation: {
      nextEl: ".slideNavigations__button--next",
      prevEl: ".slideNavigations__button--prev",
    },

    scrollbar: {
      el: ".slideNavigations__scrollBar",
    },

    on: {
      // スライド初期化時
      init: function () {
        const didLoading = sessionStorage.getItem("didLoading");

        if (didLoading) {
          // 初回読み込み時以外

          const activeSlider = $(".swiper-slide-active");

          const sliderImg = $(".swiper-slide-active")
            .find(".heroSlider__slideImage")
            .addClass("animated");

          const sliderAnim = async () => {
            if (activeSlider.find(".big")) {
              const shibaAnim = await shibaAnimation();
            }
            const textAnim = await textAnimation();
            return;
          };

          sliderAnim();

          // テキストのアニメーション
          async function textAnimation() {
            const heroSliderTexts = activeSlider
              .find(".heroSlider__row")
              .find(".js-slidew0t100");

            setTimeout(() => {
              heroSliderTexts[0].classList.add("animated");
              setTimeout(() => {
                heroSliderTexts[1].classList.add("animated");
              }, 500);
            }, 500);
          }

          // 芝のアニメーション
          async function shibaAnimation() {
            $(".swiper-slide-active").find(".big").addClass("animated");
            return;
          }
        }
      },
      afterInit: function () {
        setTimeout(() => {
          renderScrollBar(0);
        }, 500);
      },
    },
  });

  // 切り替わりのアニメーションが終了したとき
  swiper.on("slideChangeTransitionEnd", function (swiper) {
    $(".big, .js-slidew0t100, .heroSlider__slideImage").removeClass("animated");
    const activeSlider = $(".swiper-slide-active");

    const sliderImg = $(".swiper-slide-active")
      .find(".heroSlider__slideImage")
      .addClass("animated");

    const sliderAnim = async () => {
      if (activeSlider.find(".big")) {
        const shibaAnim = await shibaAnimation();
      }
      const textAnim = await textAnimation();
      return;
    };

    sliderAnim();

    // テキストのアニメーション
    async function textAnimation() {
      const heroSliderTexts = activeSlider
        .find(".heroSlider__row")
        .find(".js-slidew0t100");

      setTimeout(() => {
        heroSliderTexts[0].classList.add("animated");
        setTimeout(() => {
          heroSliderTexts[1].classList.add("animated");
        }, 500);
      }, 500);
    }

    // 芝のアニメーション
    async function shibaAnimation() {
      $(".swiper-slide-active").find(".big").addClass("animated");
      return;
    }
  });

  swiper.on("slideChange", function (swiper) {
    renderScrollBar(swiper.realIndex);
  });
}

initHeroSlider();

// ====================================
// swiper setting of blog
// ====================================
const blogSwiper = new Swiper(".js-blog", {
  slidesPerView: "auto",
  loop: false,
  spaceBetween: 32,

  pagination: {
    el: ".blogSlider__pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },

  navigation: {
    nextEl: ".js-blogSlider__button--next",
    prevEl: ".js-blogSlider__button--prev",
  },
});

const blogSpSwiper = new Swiper(".js-blogSp", {
  slidesPerView: "auto",
  loop: false,
  spaceBetween: 32,

  pagination: {
    el: ".blogSlider__pagination--sp",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },

  navigation: {
    nextEl: ".js-blogSlider__button--nextSp",
    prevEl: ".js-blogSlider__button--prevSp",
  },

  on: {
    afterInit: function () {
      renderPgination("blogSlider__pagination--sp");
    },
  },
});

blogSpSwiper.on("slideChange", function (swiper) {
  renderPgination("blogSlider__pagination--sp");
});

// ====================================
// swiper setting of mediaSlider
// ====================================
const mediaSlider = new Swiper(".js-mediaSlider", {
  loop: false,
  spaceBetween: 32,

  pagination: {
    el: ".mediaSlider__pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },

  navigation: {
    nextEl: ".mediaSlider__button--next",
    prevEl: ".mediaSlider__button--prev",
  },

  on: {
    firstInit: function () {
      $(".mediaSlider__button--prev").hide();
    },
    afterInit: function () {
      renderPgination("mediaSlider__pagination");
    },
  },
});

mediaSlider.on("slideChange", function () {
  renderPgination("mediaSlider__pagination");
});

function renderPgination(className) {
  $(`.${className} .js-pDot`).remove();

  if ($(`.${className} .swiper-pagination-bullet`).length <= 5) {
    return;
  }

  $(`.${className} .swiper-pagination-bullet`).css("display", "none");
  $(`.${className} .swiper-pagination-bullet-active`).css("display", "flex");
  $(`.${className} .swiper-pagination-bullet:first-of-type`).css(
    "display",
    "flex"
  );
  $(`.${className} .swiper-pagination-bullet:last-of-type`).css(
    "display",
    "flex"
  );

  const dotHtml = '<span class="js-pDot p-dot">...</span>';

  // アクティブなナビゲーションの数字取得
  const activeIndex = Number(
    $(`.${className} .swiper-pagination-bullet-active`).text()
  );
  const lastIndex = Number(
    $(`.${className} .swiper-pagination-bullet:last-of-type`).text()
  );

  if (activeIndex == 1) {
    $(`.${className} .swiper-pagination-bullet-active`)
      .next()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`)
      .next()
      .next()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`)
      .next()
      .next()
      .after(dotHtml);
    $(`.${className} .swiper-pagination-bullet:last-of-type`).css(
      "display",
      "flex"
    );
  } else if (activeIndex == 2) {
    $(`.${className} .swiper-pagination-bullet-active`)
      .next()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet:last-of-type`).before(dotHtml);
  } else if (activeIndex == lastIndex - 1) {
    $(`.${className} .swiper-pagination-bullet-active`)
      .prev()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`).prev().before(dotHtml);
  } else if (activeIndex == lastIndex) {
    $(`.${className} .swiper-pagination-bullet-active`)
      .prev()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`)
      .prev()
      .prev()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`)
      .prev()
      .prev()
      .before(dotHtml);
  } else {
    $(`.${className} .swiper-pagination-bullet-active`)
      .prev()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`).prev().before(dotHtml);
    $(`.${className} .swiper-pagination-bullet-active`)
      .next()
      .css("display", "flex");
    $(`.${className} .swiper-pagination-bullet-active`).next().after(dotHtml);
  }
}

function renderScrollBar(activeIndex) {
  const heroScrollBarWidth = $(".js-heroScrollBar").width();
  const oneItemWidth = heroScrollBarWidth / 3;
  $(".js-heroScrollBar .swiper-scrollbar-drag").css({
    width: oneItemWidth,
    transform: `translate3d(${oneItemWidth * activeIndex}px, 0px, 0px)`,
  });
}

var timer = 0;

$(window).resize(function () {
  renderPgination("mediaSlider__pagination");
  renderPgination("blogSlider__pagination--sp");
});
