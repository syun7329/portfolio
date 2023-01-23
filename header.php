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
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/CustomEase.min.js"></script>

  <!-- sticksy -->
  <script defer src="https://cdn.jsdelivr.net/npm/sticksy/dist/sticksy.min.js"></script>
  <!--======================================== Liburaries ========================================-->

  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/app.js"></script>

  <link rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/style.css?ver=<?php echo $version ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/assets/sass/style.css?ver=<?php echo $version ?>">

  <?php wp_head(); ?>

</head>

<body class="drawer drawer--right" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">

  <!--============================================= header-pc =============================================-->


  <header class="header">

    <div class="header__inner">

      <a href="<?php echo home_url('contact') ?>" class="header__contact">CONTACT</a>

      <a href="<?php echo home_url() ?>" class="header__logoArea js-header__logoArea">
        <svg class="header__logo js-header__logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.14 34.32">
          <defs>
            <style>
              .cls-1 {
               fill: none;
              }

              .cls-2 {
                fill: #172a88;
              }
            </style>
          </defs>
          <g id="_グループ_2657" data-name="グループ 2657">
            <g id="_パス_12" data-name="パス 12">
              <path class="cls-1" d="m45.34,21c-2.1,6.5-9.2,10.1-15.7,7.9-6.5-2.1-10.1-9.2-7.9-15.7,2.1-6.5,9.2-10.1,15.7-7.9,3.8,1.2,6.7,4.2,7.9,7.9h4.8C48.04,4,38.84-1.7,29.64.5c-9.2,2.1-14.9,11.3-12.7,20.5s11.3,14.9,20.5,12.7c6.3-1.5,11.2-6.4,12.7-12.7h-4.8Z"/>
              <path class="cls-2" d="m33.54,33.7c1.9,0,3.8-.3,5.6-1,1.7-.6,3.3-1.5,4.8-2.7,2.7-2.2,4.7-5.2,5.6-8.5h-3.8c-.9,2.4-2.4,4.5-4.5,6-2.2,1.6-4.9,2.5-7.7,2.5-3.5,0-6.7-1.3-9.2-3.8-2.4-2.4-3.8-5.7-3.8-9.2s1.3-6.7,3.8-9.2c2.4-2.4,5.7-3.8,9.2-3.8,2.8,0,5.4.9,7.7,2.5,2.1,1.5,3.6,3.6,4.5,6h3.8c-.9-3.3-2.9-6.3-5.6-8.5-1.4-1.2-3-2.1-4.8-2.7s-3.7-1-5.6-1c-4.4,0-8.6,1.7-11.7,4.8-3.1,3.1-4.8,7.3-4.8,11.7s1.7,8.6,4.8,11.7,7.3,5.2,11.7,5.2m0,.5c-9.4,0-17.1-7.6-17.1-17.1S24.04,0,33.54,0c8.1,0,14.8,5.6,16.6,13.2h-4.8c-1.6-5-6.3-8.6-11.8-8.6-6.9,0-12.4,5.6-12.4,12.4s5.6,12.4,12.4,12.4c5.5,0,10.2-3.6,11.8-8.6h4.8c-1.7,7.7-8.5,13.4-16.6,13.4Z"/>
            </g>
            <path id="_合体_1" data-name="合体 1" class="cls-2" d="m0,17.17C0,7.76,7.6.17,17.1.17c7.9,0,14.8,5.5,16.6,13.2h-4.8c-2.1-6.5-9.2-10.1-15.7-7.9-6.5,2.1-10.1,9.2-7.9,15.7s9.2,10.1,15.7,7.9c.1,0,.2-.1.2-.1,1.2,1.3,2.6,2.3,4.1,3.2-8.2,4.6-18.6,1.6-23.2-6.7-1.3-2.6-2.1-5.5-2.1-8.3Zm25.3,9.3c1.7-1.5,2.9-3.4,3.6-5.5h-7.2c-.5-1.5-.7-3.2-.6-4.8h13c0,.8,0,1.6-.1,2.4v.4c-.1.6-.2,1.2-.3,1.9v.1h0c-.1.3-.2.7-.3,1-.8,2.6-2.1,4.9-4,6.9-1.5-.5-2.9-1.4-4.1-2.4h0Z"/>
          </g>
        </svg>
      </a>

      <?php
      if (is_front_page()) {
        $hambugerBarColor = "black";
      } else {
        $hambugerBarColor = "white";
      }
      ?>

      <button class="header__hamburger hamburger drawer-toggle" aria-label="ドロワーメニューを開くボタン">
        <span class="js-hambuger hamburger__bar hamburger__bar--top"
          style="background: <?php echo $hambugerBarColor ?>"></span>
        <span class="js-hambuger hamburger__bar hamburger__bar--middle"
          style="background: <?php echo $hambugerBarColor ?>"></span>
        <span class="js-hambuger hamburger__bar hamburger__bar--bottom"
          style="background: <?php echo $hambugerBarColor ?>"></span>
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
          <span class="drawerNav__text">TOP</span>
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
          <span class="drawerNav__text">RESTAURANTS</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("mail-order"); ?>#headOffice">
          <span class="drawerNav__text">MAIL ORDER</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("real-estate"); ?>#headOffice">
          <span class="drawerNav__text">REAL ESTATE</span>
          <img class="drawerNav__arrow"
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/circle-arrow.svg" alt="矢印">
        </a>
      </li>

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("event"); ?>#headOffice">
          <span class="drawerNav__text">EVENT</span>
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

      <li class="drawerNav__item drawer-menu-item">
        <a class="drawerNav__link" href="<?php echo home_url("adoption"); ?>">
          <span class="drawerNav__text">ADOPTION</span>
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

    </ul>


    <!-- <div class="drawerNav__buttons">

      <a href="<? echo home_url('contact'); ?>" class="button button--drawerNav c:green bg:white" target="_blank"
        rel="noopener noreferrer">
        <div class="button__contents">
          <div class="button__text">法人の方は<span class="indentWord">こちら</span></div>
        </div>
      </a>

      <a href="<? echo home_url('contact'); ?>" class="button button--drawerNav c:white bg:green" target="_blank"
        rel="noopener noreferrer">
        <div class="button__contents">
          <div class="button__text">お問い合わせは<span class="indentWord">こちら</span></div>
        </div>
      </a>

    </div> -->

    <small class="drawerNav__copyRight">Copyright GC Co., Ltd All rights reserved.</small>

  </nav>

  <!--============================================= hamberger-sp =============================================-->

  <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/common/cursol.svg" alt="" class="mouseCursol">