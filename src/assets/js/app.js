gsap.registerPlugin(ScrollTrigger);

$(function () {
  $(".mediaPost__link").hover(
    function () {
      //マウスカーソルが重なった時の処理
      $(this).children(".mediaPost__bottomTurf").addClass("turfAppear");
      $(this).children(".mediaPost__bottomTurf").removeClass("turfHidden");
    },
    function () {
      //マウスカーソルが離れた時の処理
      $(this).children(".mediaPost__bottomTurf").removeClass("turfAppear");
      $(this).children(".mediaPost__bottomTurf").addClass("turfHidden");
    }
  );
});

$(function () {
  $(".comparison__tables").bind("touchstart", function () {
    $(".scrollAssist").animate({ opacity: 0 }, 500);
  });
});

$(function () {
  $(".js-sdgs__list").on("inview", function (event, isInView) {
    if (isInView) {
      $(".sdgs__listWrapper--left").addClass("sdgs__listWrapper--leftAnimate");
      $(".sdgs__listWrapper--right").addClass(
        "sdgs__listWrapper--rightAnimate"
      );
    }
  });
});

$(function () {
  $(".js-sdgs__list").on("inview", function (event, isInView) {
    if (isInView) {
      $(".sdgs__listWrapper--left").addClass("sdgs__listWrapper--leftAnimate");
      $(".sdgs__listWrapper--right").addClass(
        "sdgs__listWrapper--rightAnimate"
      );
    }
  });
});

$(function () {
  $(".js-bounceUpAnimation").on("inview", function (event, isInView) {
    if (isInView) {
      $(this).addClass("bounceUp");
      $(this).removeClass("js-bounceUpAnimation");
    }
  });
});

$(function () {
  $(".js-mouseHover").hover(
    function () {
      $(".mouseCursol").show();
      //マウスカーソルが重なった時の処理
      document.addEventListener("mousemove", (e) => {
        const mouseX = e.clientX;
        const mouseY = e.clientY;

        gsap.to(".mouseCursol", {
          x: mouseX,
          y: mouseY,
          stagger: -0.1,
        });
      });
    },
    function () {
      //マウスカーソルが離れた時の処理
      $(".mouseCursol").hide();
    }
  );
});

$(window).on("load scroll resize", function () {
  if ($(".js-featureSp").length > 0) {
    const featureSpTop =
      $(".js-featureSp").offset().top - $(window).height() / 2;

    if (featureSpTop < $(window).scrollTop()) {
      $(".js-featureSp").addClass("animated");
    }
  }

  if ($(".js-feature__centerImage").length > 0) {
    const featureTop =
      $(".js-feature__centerImage").offset().top - $(window).height() / 1.5;

    if (featureTop < $(window).scrollTop()) {
      $(".js-feature__centerImage").addClass("animated");
      $(".js-line").addClass("animated");
      $(".js-feature__featureImage").addClass("animated");
    }
  }
});

$(window).scroll(function () {
  if ($(".js-dogBounceUpAnimation").length) {
    const scrollY = $(window).scrollTop();
    const dogTop = $(".js-dogBounceUpAnimation").offset().top;

    if (scrollY > dogTop - $(window).height() * 0.7) {
      $(".js-dogBounceUpAnimation").addClass("dogBounceUp");
      $(".js-dogBounceUpAnimation").removeClass("js-dogBounceUpAnimation");
    }
  }
});

const scrollY = window.pageYOffset;
const offsetY = $(".heroSlider__textImage").offset().top;
const dif = offsetY - scrollY;

gsap.to(".js-heroSlider__textImage", {
  scrollTrigger: {
    // トリガー
    trigger: ".js-heroSlider__textImage",
    toggleActions: "play play reverse pause",
    start: "-=50px 300px",
    scrub: true,
    ease: "Power3",
  },
  y: $(".js-heroSlider__textImage").height(),
});
