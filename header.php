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

      <a href="<?php echo home_url() ?>" class="header__logoArea js-header__logoArea">
        <svg class="header__logo js-header__logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 206.07">
          <g id="グループ_2670" data-name="グループ 2670" transform="translate(-489.5 -296.965)">
            <g id="パス_12" data-name="パス 12" transform="translate(46.459 -30.1)" fill="none" stroke-miterlimit="10">
              <path class="js-c"
                d="M716.259,453.438a74.811,74.811,0,1,1,0-46.677h28.778a102.535,102.535,0,1,0,0,46.677Z"
                stroke="none" />
              <path class="js-c"
                d="M 645.2052612304688 531.635009765625 C 656.9758911132812 531.635009765625 668.5086059570312 529.6383666992188 679.4829711914062 525.7005615234375 C 690.0880737304688 521.895263671875 699.9374389648438 516.36865234375 708.757568359375 509.2742004394531 C 717.4977416992188 502.2440490722656 724.9720458984375 493.8822326660156 730.9728393554688 484.4210205078125 C 736.8556518554688 475.1458435058594 741.158935546875 465.0647888183594 743.7732543945312 454.4383544921875 L 716.97998046875 454.4383544921875 C 714.5286865234375 461.6710510253906 711.0018920898438 468.4769287109375 706.4910888671875 474.6771545410156 C 701.892578125 480.9978637695312 696.372314453125 486.5530700683594 690.0836181640625 491.1884765625 C 683.718017578125 495.8805541992188 676.7039184570312 499.5259399414062 669.2362670898438 502.0234375 C 661.5128784179688 504.6063842773438 653.4276733398438 505.9160766601562 645.2052612304688 505.9160766601562 C 634.9703369140625 505.9160766601562 625.041015625 503.911376953125 615.693115234375 499.9576416015625 C 611.200439453125 498.0574340820312 606.8672485351562 495.7055053710938 602.8140258789062 492.9672546386719 C 598.799560546875 490.2552185058594 595.0245361328125 487.1406860351562 591.5938720703125 483.7101135253906 C 588.1632690429688 480.2796020507812 585.048583984375 476.5047302246094 582.3364868164062 472.4904174804688 C 579.59814453125 468.4373779296875 577.2462158203125 464.1044311523438 575.345947265625 459.6119079589844 C 571.3922119140625 450.2645874023438 569.387451171875 440.3359680175781 569.387451171875 430.1018676757812 C 569.387451171875 419.8668823242188 571.3921508789062 409.9375610351562 575.345947265625 400.5896911621094 C 577.2462158203125 396.0969543457031 579.59814453125 391.7637939453125 582.3364868164062 387.7105407714844 C 585.048583984375 383.6960754394531 588.1632080078125 379.9210815429688 591.5938720703125 376.4904174804688 C 595.0245361328125 373.0597534179688 598.7994995117188 369.9451293945312 602.8140258789062 367.2330017089844 C 606.8672485351562 364.4946899414062 611.2003784179688 362.1427612304688 615.693115234375 360.2424926757812 C 625.0409545898438 356.2886962890625 634.9702758789062 354.2839660644531 645.2052612304688 354.2839660644531 C 653.4275512695312 354.2839660644531 661.5127563476562 355.5938415527344 669.2363891601562 358.1771850585938 C 676.7039184570312 360.6748657226562 683.7180786132812 364.3205261230469 690.0840454101562 369.0129699707031 C 696.372802734375 373.6484680175781 701.8934326171875 379.2037658691406 706.4925537109375 385.5244445800781 C 711.0037841796875 391.724365234375 714.53125 398.5298156738281 716.9833984375 405.7617797851562 L 743.7732543945312 405.7617797851562 C 741.158935546875 395.1353454589844 736.8556518554688 385.0542602539062 730.9728393554688 375.779052734375 C 724.9720458984375 366.31787109375 717.4977416992188 357.9560241699219 708.757568359375 350.9258728027344 C 699.9374389648438 343.8313903808594 690.0880737304688 338.3047485351562 679.4829711914062 334.4994812011719 C 668.5086059570312 330.5616455078125 656.9758911132812 328.5650024414062 645.2052612304688 328.5650024414062 C 638.31591796875 328.5650024414062 631.4312133789062 329.2590637207031 624.7422485351562 330.6278991699219 C 618.2238159179688 331.9618530273438 611.8120727539062 333.9522705078125 605.68505859375 336.5438537597656 C 599.6690063476562 339.0885314941406 593.866455078125 342.2381896972656 588.4385986328125 345.9053344726562 C 583.0619506835938 349.5378112792969 578.0059814453125 353.7095031738281 573.4111328125 358.3045043945312 C 568.8162231445312 362.8995056152344 564.6445922851562 367.9556274414062 561.01220703125 373.3323669433594 C 557.3450927734375 378.7604675292969 554.1954956054688 384.563232421875 551.6508178710938 390.5794677734375 C 549.0592041015625 396.706787109375 547.06884765625 403.1188354492188 545.73486328125 409.6376037597656 C 544.3660278320312 416.3269348144531 543.6719970703125 423.2120971679688 543.6719970703125 430.1018676757812 C 543.6719970703125 436.9911804199219 544.3660278320312 443.8759155273438 545.73486328125 450.5648803710938 C 547.0687866210938 457.0832824707031 549.0592041015625 463.4950561523438 551.6508178710938 469.6221008300781 C 554.1954956054688 475.6380920410156 557.3450927734375 481.4406127929688 561.01220703125 486.8685302734375 C 564.6445922851562 492.2451171875 568.8162231445312 497.3010864257812 573.4111328125 501.8959655761719 C 578.0059814453125 506.4908752441406 583.0619506835938 510.6624450683594 588.4385986328125 514.2948608398438 C 593.8665161132812 517.9619750976562 599.6690063476562 521.111572265625 605.68505859375 523.6561889648438 C 611.8120727539062 526.247802734375 618.2238159179688 528.2382202148438 624.7422485351562 529.5721435546875 C 631.4312133789062 530.9409790039062 638.31591796875 531.635009765625 645.2052612304688 531.635009765625 M 645.2052612304688 532.635009765625 C 588.57958984375 532.635009765625 542.6719970703125 486.7276000976562 542.6719970703125 430.1018676757812 C 542.6719970703125 373.472412109375 588.57958984375 327.5650024414062 645.2052612304688 327.5650024414062 C 693.80322265625 327.5650024414062 734.472900390625 361.3838195800781 745.0409545898438 406.7617797851562 L 716.2628784179688 406.7617797851562 C 706.4497680664062 376.8818969726562 678.369384765625 355.2839660644531 645.2052612304688 355.2839660644531 C 603.88427734375 355.2839660644531 570.387451171875 388.7808227539062 570.387451171875 430.1018676757812 C 570.387451171875 471.4192504882812 603.88427734375 504.9160766601562 645.2052612304688 504.9160766601562 C 678.369384765625 504.9160766601562 706.4497680664062 483.32177734375 716.2593994140625 453.4383544921875 L 745.0409545898438 453.4383544921875 C 734.472900390625 498.8162841796875 693.80322265625 532.635009765625 645.2052612304688 532.635009765625 Z"
                stroke="none" fill="#fff" />
            </g>
            <path class="js-g" id="合体_1" data-name="合体 1"
              d="M-3352,2485.537A102.536,102.536,0,0,1-3249.467,2383a102.551,102.551,0,0,1,99.836,79.2h-28.781a74.812,74.812,0,0,0-71.055-51.478,74.817,74.817,0,0,0-74.818,74.818,74.816,74.816,0,0,0,74.818,74.813,74.474,74.474,0,0,0,24.814-4.235,102.85,102.85,0,0,0,24.768,19.173,102.058,102.058,0,0,1-49.582,12.782A102.535,102.535,0,0,1-3352,2485.537Zm152.1,55.91a75.067,75.067,0,0,0,14.4-17.266,75.252,75.252,0,0,0,7.158-15.616q-21.594.005-43.185.018l0-.014-.007-.014a69.223,69.223,0,0,1-3.309-13.923,69.181,69.181,0,0,1-.326-14.858h78.249a111.593,111.593,0,0,1-.368,14.385c-.043.493-.083.987-.133,1.495-.021.2-.028.393-.053.6-.018.168-.047.315-.065.48a101.817,101.817,0,0,1-1.85,11.155c-.046.214-.082.458-.129.669h-.021c-.458,1.983-.962,4-1.578,6.072a103.828,103.828,0,0,1-24.013,41.5A74.531,74.531,0,0,1-3199.9,2541.447Z"
              transform="translate(3842 -2085.535)" fill="#000" stroke="#fff" stroke-width="1" />
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
        <a class="drawerNav__link" href="<?php echo home_url("real-estate"); ?>#headOffice">
          <span class="drawerNav__text">REAL ESTATE</span>
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
        <a class="drawerNav__link" href="<?php echo home_url("event"); ?>#headOffice">
          <span class="drawerNav__text">EVENT</span>
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