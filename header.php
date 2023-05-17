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

  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/jquery.scrollify.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/jquery.easing.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/jquery.inview.min.js"></script>
  <!--======================================== Liburaries ========================================-->

  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/app.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/scrollify-admin.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/flying.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/comment.js"></script>

  <link rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/style.css?ver=<?php echo $version ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/assets/sass/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body class="drawer drawer--right" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/">

  <!--============================================= header-pc =============================================-->


  <header class="header">

    <div class="header__inner">

      <nav class="header__menu">

        <a class="header__menu-logo" href="">
          <svg version="1.1" id="レイヤー_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 139.9 139.9" style="enable-background:new 0 0 139.9 139.9;" xml:space="preserve">
            <g>
              <g>
                <path d="M69.9,10c28.8,0,52.2,23.4,52.2,52.2s-23.4,52.2-52.2,52.2S17.7,91,17.7,62.2S41.1,10,69.9,10 M69.9,0
                  C35.6,0,7.7,27.9,7.7,62.2s27.9,62.2,62.2,62.2c34.4,0,62.2-27.9,62.2-62.2S104.3,0,69.9,0L69.9,0z"/>
              </g>
              <g>
                <rect x="26" y="49.7" width="87.9" height="25"/>
              </g>
              <g>
                <rect x="57.4" y="18.3" width="25" height="87.9"/>
              </g>
              <g>
                <rect x="57.4" y="119.2" width="25" height="20.7"/>
              </g>
            </g>
          </svg>
        </a>

        <div class="header__menu-link">

          <a href="">
            <span>A</span>ABOUT
          </a>
          <a href="">
            <span>W</span>WORKS
          </a>
          <a href="">
            <span>C</span>CONTACT
          </a>

        </div>

        <div></div>

      </nav>

      <div class="header__comment">

        <p class="header__comment-text"></p>

      </div>

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

  </nav>

  <!--============================================= hamberger-sp =============================================-->

  <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/common/cursol.svg" alt="" class="mouseCursol">