<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name');
          wp_title('|', true, 'left'); ?></title>

  <!--============================================= favicon =============================================-->
  <!-- pc-->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico" id="favicon">
  <!-- sp-->
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-touch-icon-180x180.png">
  <!--============================================= favicon =============================================-->


  <!--============================================= meta description =============================================-->
  <meta name="description" content="<?php echo META_DESCRIPTION ?>" />
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <!--============================================= meta description =============================================-->


  <!--============================================= OGP =============================================-->

  <meta property="og:locale" content="ja_JP" />
  <meta property="og:url" content=<?php echo OG_URL ?> />
  <meta property="og:title" content="<?php echo OG_TITLE ?>" />
  <meta property="og:site_name" content="<?php echo OG_SITE_NAME ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/dist/assets/images/ogp.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:type" content="website" />
  <meta property="og:image:height" content="630" />

  <?php if (is_single()) : ?>
  <meta property="og:type" content="website" />
  <?php else : ?>
  <meta property="og:type" content="article" />
  <?php endif; ?>

  <!--============================================= OGP =============================================-->


  <!--======================================== Liburaries ========================================-->

  <!-- jquery -->
  <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <!-- drawer -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">

  <!-- AOS -->
  <!-- <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/libs/aos.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

  <!-- gsap -->
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/ScrollTrigger.min.js"></script>

  <!-- sticksy -->
  <script defer src="https://cdn.jsdelivr.net/npm/sticksy/dist/sticksy.min.js"></script>
  <!--======================================== Liburaries ========================================-->

  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/app.js"></script>

  <link rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/style.css?ver=<?php echo $version ?>">

  <?php wp_head(); ?>

</head>

<body class="drawer drawer--right" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">

  <!--============================================= header-pc =============================================-->

  <?php

  $fill =  is_front_page() ? "#00000" : "#ffffff";
  // $fill = "#ffffff";

  ?>

  <header class="header">

    <div class="header__inner">

      <a href="<?php echo home_url('contact') ?>" class="header__contact">CONTACT</a>

      <a class="header__logoArea" href="<?php echo home_url(); ?>">

        <svg class="header__logo" xmlns="http://www.w3.org/2000/svg" width="50.137" height="34.101"
          viewBox="0 0 50.137 34.101">

          <g id="GC" data-name="GC" transform="translate(-614.932 -27)">
            <g id="C" data-name="C" transform="translate(88.744 -300.565)" fill="none" stroke-miterlimit="10">
              <path stroke="<?php echo $fill ?>"
                d="M571.538,348.5a12.44,12.44,0,1,1,0-7.762h4.786a17.051,17.051,0,1,0,0,7.762Z" />
              <path stroke="none" fill="none"
                d="M 559.7223510742188 361.1662902832031 C 561.6411743164062 361.1662902832031 563.5210571289062 360.8408508300781 565.3097534179688 360.1990661621094 C 567.0382690429688 359.5788269042969 568.6436767578125 358.6780090332031 570.0813598632812 357.5215759277344 C 572.7943725585938 355.3393859863281 574.7662353515625 352.3307189941406 575.6815795898438 348.9966125488281 L 571.8948364257812 348.9966125488281 C 571.0245971679688 351.4194946289062 569.470458984375 353.5042724609375 567.38330078125 355.042724609375 C 565.15185546875 356.6875 562.5027465820312 357.556884765625 559.7223510742188 357.556884765625 C 556.2655639648438 357.556884765625 553.0156860351562 356.2107543945312 550.5712890625 353.7664794921875 C 548.126953125 351.322265625 546.7808227539062 348.0725402832031 546.7808227539062 344.615966796875 C 546.7808227539062 341.1591186523438 548.126953125 337.9092102050781 550.5712890625 335.4648742675781 C 553.015625 333.0205688476562 556.2655639648438 331.6744079589844 559.7223510742188 331.6744079589844 C 562.5026245117188 331.6744079589844 565.1517333984375 332.5438842773438 567.3833618164062 334.1887817382812 C 569.4705200195312 335.7272644042969 571.0248413085938 337.81201171875 571.8954467773438 340.2347106933594 L 575.6815795898438 340.2347106933594 C 574.7662353515625 336.9006042480469 572.7943725585938 333.8919067382812 570.0813598632812 331.709716796875 C 568.6436767578125 330.5532836914062 567.0382690429688 329.6524353027344 565.3097534179688 329.0322265625 C 563.5210571289062 328.3904113769531 561.6411743164062 328.0649719238281 559.7223510742188 328.0649719238281 C 555.3016967773438 328.0649719238281 551.1455688476562 329.7865600585938 548.0195922851562 332.9126281738281 C 544.8935546875 336.0387573242188 543.1719970703125 340.195068359375 543.1719970703125 344.615966796875 C 543.1719970703125 349.0365600585938 544.8935546875 353.1926879882812 548.0195922851562 356.3186950683594 C 551.1456298828125 359.4447021484375 555.3017578125 361.1662902832031 559.7223510742188 361.1662902832031 M 559.7223510742188 361.6662902832031 C 550.3060302734375 361.6662902832031 542.6719970703125 354.0322875976562 542.6719970703125 344.615966796875 C 542.6719970703125 335.198974609375 550.3060302734375 327.5649719238281 559.7223510742188 327.5649719238281 C 567.8037719726562 327.5649719238281 574.5667724609375 333.1887817382812 576.3241577148438 340.7347106933594 L 571.5386352539062 340.7347106933594 C 569.9068603515625 335.7659301757812 565.2373046875 332.1744079589844 559.7223510742188 332.1744079589844 C 552.85107421875 332.1744079589844 547.2808227539062 337.74462890625 547.2808227539062 344.615966796875 C 547.2808227539062 351.4866638183594 552.85107421875 357.056884765625 559.7223510742188 357.056884765625 C 565.2373046875 357.056884765625 569.9068603515625 353.4659423828125 571.5380249023438 348.4966125488281 L 576.3241577148438 348.4966125488281 C 574.5667724609375 356.0425415039062 567.8037719726562 361.6662902832031 559.7223510742188 361.6662902832031 Z" />
            </g>
            <path id="G" data-name="G" fill="<?php echo $fill ?>"
              d="M0,17.051A17.05,17.05,0,0,1,33.652,13.17H28.866a12.438,12.438,0,1,0-7.69,15.618A17.1,17.1,0,0,0,25.3,31.976,17.051,17.051,0,0,1,0,17.051Zm25.292,9.3a12.472,12.472,0,0,0,3.584-5.468l-7.181,0v0a11.494,11.494,0,0,1-.6-4.786H34.1a18.556,18.556,0,0,1-.061,2.392c-.007.082-.014.164-.022.249,0,.034,0,.065-.009.1s-.008.052-.011.08a16.936,16.936,0,0,1-.308,1.855c-.008.036-.014.076-.021.111h0c-.076.33-.16.665-.262,1.01a17.266,17.266,0,0,1-3.993,6.9A12.394,12.394,0,0,1,25.292,26.348Z"
              transform="translate(614.932 27)" />
          </g>
        </svg>

      </a>

      <button class="header__hamburger hamburger drawer-toggle" aria-label="ドロワーメニューを開くボタン">
        <span class="hamburger__bar hamburger__bar--top" style="background: <?php echo $fill ?>"></span>
        <span class="hamburger__bar hamburger__bar--middle" style="background: <?php echo $fill ?>"></span>
        <span class="hamburger__bar hamburger__bar--bottom" style="background: <?php echo $fill ?>"></span>
      </button>

    </div>

  </header>
  <!--============================================= header-pc =============================================-->


  <!--============================================= hamberger-sp =============================================-->
  <!-- open時 -->
  <nav class="drawerNav drawer-nav drawer-close" role="navigation">

    <ul class="drawerNav__list drawer-menu">

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url(); ?>">
          <span class="drawerNav__text">HOME</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("about-us"); ?>#agency">
          <span class="drawerNav__text">ABOUT US</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("restaurant"); ?>#headOffice">
          <span class="drawerNav__text">RESTAURANT</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("contact"); ?>">
          <span class="drawerNav__text">CONTACT</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("column"); ?>">
          <span class="drawerNav__text">COLUMN</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

    </ul>


    <div class="drawerNav__buttons">

      <!-- <a href="<? echo home_url('contact'); ?>" class="button button--drawerNav c:green bg:white" target="_blank"
        rel="noopener noreferrer">
        <div class="button__contents">
          <div class="button__text">法人の方は<span class="indentWord">こちら</span></div>
        </div>
      </a> -->

      <!-- <a href="<? echo home_url('contact'); ?>" class="button button--drawerNav c:white bg:green" target="_blank"
        rel="noopener noreferrer">
        <div class="button__contents">
          <div class="button__text">お問い合わせは<span class="indentWord">こちら</span></div>
        </div>
      </a> -->

    </div>

    <small class="drawerNav__copyRight">Copyright GC Co., Ltd All rights reserved.</small>

  </nav>

  <!--============================================= hamberger-sp =============================================-->

  <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/common/cursol.svg" alt="" class="mouseCursol">