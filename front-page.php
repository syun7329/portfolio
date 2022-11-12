<?php

$postService = new PostService();
$tagService = new TagService();

$postsResult = $postService->renderPostsForFrontPage(50);
$media = $postService->renderMedia('media', -1);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner">

    <section class="top">

      <div class="top__inner">
        <div class="top__marquee marquee">
          <div class="marquee__text">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <span>SMILE A LITTLE FURTHER INTO THE FUTURE</span>
            <?php endfor; ?>
          </div>

          <div class="marquee__text marquee__text--2">
            <?php for ($i = 0; $i < 5; $i++) : ?>
              <span>SMILE A LITTLE FURTHER INTO THE FUTURE</span>
            <?php endfor; ?>
          </div>

        </div>

        <nav class="top__nav topNav">
          <ul class="topNav__list">
            <li class="li topNav__item">
              <a href="<?php echo home_url() ?>" class="topNav__link">TOP</a>
            </li>
            <li class="li topNav__item">
              <a href="<?php echo home_url('about-us') ?>" class="topNav__link">ABOUT US</a>
            </li>
            <li class="li topNav__item">
              <a href="<?php echo home_url('restaurants') ?>" class="topNav__link">RESTAURANTS</a>
            </li>
            <li class="li topNav__item">
              <a href="<?php echo home_url('adoption') ?>" class="topNav__link">ADOPTION</a>
            </li>
            <li class="li topNav__item">
              <a href="<?php echo home_url('blog') ?>" class="topNav__link">BLOG</a>
            </li>
            <li class="li topNav__item">
              <a href="<?php echo home_url('contact') ?>" class="topNav__link">CONTACT</a>
            </li>
          </ul>
        </nav>

        <picture class="top__img">
          <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top-img.webp" type="image/webp" />
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top-img.jpg" />
        </picture>

        <div class="top__scrollNavigator scrollNavigator">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/arrow.svg" alt="" class="scrollNavigator__arrow">
          <p class="scrollNavigator__text">SCROLL</p>
          <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/arrow.svg" alt="" class="scrollNavigator__arrow">
        </div>

      </div>

    </section>

    <section class="about">

      <div class="about__inner">

        <div class="about__title sectionTitle">

          <svg xmlns="http://www.w3.org/2000/svg" width="394.535" height="338.18" viewBox="0 0 394.535 338.18">
            <g id="グループ_2663" data-name="グループ 2663" transform="translate(-1658.575 1452.18)">
              <path id="パス_589" data-name="パス 589" d="M138.471-260.033,192.4-135.272H87.287ZM-11.425-6.4V0H74.948V-6.4H34.275L85-128.874h109.68L247.694-6.4h-42.5V0H358.745V-6.4h-39.3L175.488-338.18H163.149L26.963-6.4Z" transform="translate(1670 -1114)" />
              <path id="パス_590" data-name="パス 590" d="M17.082-16.692q0-2.574.273-5.538a23.342,23.342,0,0,1,1.131-5.46,10.173,10.173,0,0,1,2.574-4.134,6.388,6.388,0,0,1,4.6-1.638,6.061,6.061,0,0,1,3.354.858A6.177,6.177,0,0,1,31.2-29.8a17.941,17.941,0,0,1,1.209,5.187,75.184,75.184,0,0,1,.351,7.917q0,3.822-.195,6.9a23.413,23.413,0,0,1-.858,5.265,7.268,7.268,0,0,1-1.95,3.354A4.964,4.964,0,0,1,26.286,0a7.29,7.29,0,0,1-5.109-1.677,10.553,10.553,0,0,1-2.769-4.212,19.41,19.41,0,0,1-1.131-5.46Q17.082-14.274,17.082-16.692ZM7.566-55.146V-1.092H2.418V0H16.926V-5.772h.156A11.383,11.383,0,0,0,20.553-.741a8.974,8.974,0,0,0,5.733,1.755A15.975,15.975,0,0,0,33.228-.468a16.891,16.891,0,0,0,5.343-3.939,18.216,18.216,0,0,0,3.471-5.655A18.289,18.289,0,0,0,43.29-16.77a19.664,19.664,0,0,0-.975-5.85,18.121,18.121,0,0,0-3.042-5.772A16.842,16.842,0,0,0,34.008-32.8a15.838,15.838,0,0,0-7.722-1.755,9.246,9.246,0,0,0-5.694,1.638A10.229,10.229,0,0,0,17.238-28h-.156V-56.238H2.418v1.092ZM67.938,0A7.173,7.173,0,0,1,63.18-1.443a8.481,8.481,0,0,1-2.535-3.783,20.217,20.217,0,0,1-1.014-5.382q-.2-3.042-.195-6.162t.195-6.123a20.118,20.118,0,0,1,1.014-5.343,8.481,8.481,0,0,1,2.535-3.783,7.173,7.173,0,0,1,4.758-1.443A7.173,7.173,0,0,1,72.7-32.019a8.481,8.481,0,0,1,2.535,3.783,20.118,20.118,0,0,1,1.014,5.343q.195,3,.195,6.123t-.195,6.162a20.217,20.217,0,0,1-1.014,5.382A8.481,8.481,0,0,1,72.7-1.443,7.173,7.173,0,0,1,67.938,0Zm0-34.554a19.412,19.412,0,0,0-7.527,1.443,19.878,19.878,0,0,0-6.045,3.861A17.4,17.4,0,0,0,50.349-23.6a16.577,16.577,0,0,0-1.443,6.825,16.761,16.761,0,0,0,1.443,6.9,17.4,17.4,0,0,0,4.017,5.655A19.3,19.3,0,0,0,60.411-.39a19.885,19.885,0,0,0,7.527,1.4,19.885,19.885,0,0,0,7.527-1.4A19.3,19.3,0,0,0,81.51-4.212a17.4,17.4,0,0,0,4.017-5.655,16.761,16.761,0,0,0,1.443-6.9A16.577,16.577,0,0,0,85.527-23.6,17.4,17.4,0,0,0,81.51-29.25a19.877,19.877,0,0,0-6.045-3.861A19.412,19.412,0,0,0,67.938-34.554Zm23.79,1.092v1.092h5.226V-9.828q0,5.694,2.886,8.073T108.186.624A15.063,15.063,0,0,0,111.7.195a13.154,13.154,0,0,0,3.393-1.326,12.372,12.372,0,0,0,2.847-2.184,8.371,8.371,0,0,0,1.872-3h.156V0h14.508V-1.092h-5.148v-32.37H114.66v1.092h5.148v20.124a14.039,14.039,0,0,1-.585,4.056A11.126,11.126,0,0,1,117.585-4.8a8.212,8.212,0,0,1-2.535,2.3,6.421,6.421,0,0,1-3.276.858A4.342,4.342,0,0,1,107.64-3.7a10.069,10.069,0,0,1-1.17-5.031V-33.462Zm53.43-10.062v10.062h-5.226v1.092h5.226V-8.346q0,1.4.156,3.042a5.937,5.937,0,0,0,1.209,3.042A7.719,7.719,0,0,0,149.8.078a16.71,16.71,0,0,0,6.279.936A19,19,0,0,0,159.2.741,8.815,8.815,0,0,0,162.279-.39a8.506,8.506,0,0,0,2.574-2.457,10.459,10.459,0,0,0,1.6-4.251l-1.17-.234a20.414,20.414,0,0,1-.819,2.418,8.887,8.887,0,0,1-1.287,2.223,6.719,6.719,0,0,1-1.833,1.6,4.887,4.887,0,0,1-2.535.624,4.3,4.3,0,0,1-2.145-.468,3.13,3.13,0,0,1-1.248-1.287,5.832,5.832,0,0,1-.585-1.833,14.383,14.383,0,0,1-.156-2.184V-32.37H163.8v-1.092h-9.126V-43.524a19.56,19.56,0,0,1-2.379.78,9.5,9.5,0,0,1-2.379.312,9.5,9.5,0,0,1-2.379-.312A19.56,19.56,0,0,1,145.158-43.524Z" transform="matrix(0.407, 0.914, -0.914, 0.407, 1934.032, -1277.546)" />
            </g>
          </svg>

        </div>

        <div class="about__main">

          <p class="about__detail">
            ダミーテキスト
            が入ります。自分には、人間の生活というものが、見当つかないのです。自分は東北の田舎に生れましたので、汽車をはじめて見たのは、よほど大きくなってからでした。自分は停車場のブリッジを、上って、降りて、そうしてそれが線路をまたぎ越えるために造られたものだという事には全然気づかず、ただそれは停車場の構内を外国の遊戯場みたいに、複雑に楽しく、ハイカラにするためにのみ、設備せられてあるものだとばかり思って
          </p>

          <a href="" class="about__button viewAllButton">
            <div class="marquee">
              <div class="marquee__text marquee__text--viewAllButton">
                <?php for ($i = 0; $i < 50; $i++) : ?>
                  <span>VIEW ALL</span>
                <?php endfor; ?>
              </div>

              <div class="marquee__text marquee__text--viewAllButton marquee__text--2">
                <?php for ($i = 0; $i < 50; $i++) : ?>
                  <span>VIEW ALL</span>
                <?php endfor; ?>
              </div>

            </div>
          </a>

        </div>

      </div>

    </section>

    <section class="business">

      <div class="business__inner">

        <ul class="business__list businessList">

          <li class="businessList__item">
            <a href="<?php echo home_url('') ?>" class="businessList__link">
              <p class="businessList__text businessList__text--en">Restaurant</p>
              <p class="businessList__text businessList__text--ja">飲食事業</p>
            </a>
          </li>

          <li class="businessList__item">
            <a href="<?php echo home_url('') ?>" class="businessList__link">
              <p class="businessList__text businessList__text--en">Mail order</p>
              <p class="businessList__text businessList__text--ja">通販事業</p>
            </a>
          </li>

          <li class="businessList__item">
            <a href="<?php echo home_url('') ?>" class="businessList__link">
              <p class="businessList__text businessList__text--en">Real estate</p>
              <p class="businessList__text businessList__text--ja">不動産事業</p>
            </a>
          </li>

          <li class="businessList__item">
            <a href="<?php echo home_url('') ?>" class="businessList__link">
              <p class="businessList__text businessList__text--en">Event</p>
              <p class="businessList__text businessList__text--ja">イベント事業</p>
            </a>
          </li>
        </ul>

        <div class="business__title sectionTitle">
          <svg class="sectionTitle sectionTitle--business" xmlns="http://www.w3.org/2000/svg" width="273.261" height="398.684" viewBox="0 0 273.261 398.684">
            <g id="グループ_2664" data-name="グループ 2664" transform="translate(-5331.106 -53.23)">
              <path id="パス_592" data-name="パス 592" d="M124.3-177.773V-318.986l10.054-.914q5.027-.457,10.054-.457,17.366,0,28.563,4.57a38.2,38.2,0,0,1,17.594,13.939q6.4,9.368,9.14,23.764t2.742,34.5a181.364,181.364,0,0,1-1.6,24.221,52.14,52.14,0,0,1-7.54,21.251q-5.941,9.368-17.823,14.852t-32.447,5.484ZM124.3-6.4V-171.375H150.81q22.85,0,35.417,9.368a60.178,60.178,0,0,1,18.737,22.165,78.017,78.017,0,0,1,7.54,25.82q1.371,13.024,1.371,20.794,0,27.877-4.341,45.014T196.967-21.479a41,41,0,0,1-19.88,13.024A93.087,93.087,0,0,1,150.81-5.027,240.577,240.577,0,0,1,124.3-6.4ZM58.039-318.986V-6.4H15.995V0H85Q104.2,0,123.161.457t38.16.457a227.829,227.829,0,0,0,39.3-3.885,144.065,144.065,0,0,0,41.359-13.939,98.545,98.545,0,0,0,32.9-27.42Q288.367-61.7,288.367-88.2q0-24.221-10.511-40.216a84.055,84.055,0,0,0-26.506-25.821,119.7,119.7,0,0,0-35.189-14.4,239.152,239.152,0,0,0-37.017-5.941V-176.4a178.658,178.658,0,0,0,26.735-5.941A130.549,130.549,0,0,0,236.269-195.6a86.7,86.7,0,0,0,24.906-22.164q10.282-13.481,10.282-33.133,0-21.936-10.511-36.56a77.432,77.432,0,0,0-26.734-23.307A123.3,123.3,0,0,0,198.338-323.1a205.057,205.057,0,0,0-37.474-3.656q-19.194,0-37.931.685T85-325.384H15.995v6.4Z" transform="translate(5316 451)" />
              <path id="パス_591" data-name="パス 591" d="M2.106-33.462v1.092H7.332V-9.828q0,5.694,2.886,8.073T18.564.624a15.063,15.063,0,0,0,3.51-.429,13.154,13.154,0,0,0,3.393-1.326,12.372,12.372,0,0,0,2.847-2.184,8.371,8.371,0,0,0,1.872-3h.156V0H44.85V-1.092H39.7v-32.37H25.038v1.092h5.148v20.124A14.039,14.039,0,0,1,29.6-8.19,11.126,11.126,0,0,1,27.963-4.8a8.212,8.212,0,0,1-2.535,2.3,6.421,6.421,0,0,1-3.276.858A4.342,4.342,0,0,1,18.018-3.7a10.069,10.069,0,0,1-1.17-5.031V-33.462ZM51.09-11.31V0h1.092a2.117,2.117,0,0,1,.507-.858,1.374,1.374,0,0,1,.9-.234,8.624,8.624,0,0,1,1.95.312q1.248.312,2.769.741T61.464.7a16.325,16.325,0,0,0,3.042.312A16.16,16.16,0,0,0,69.5.234a13.5,13.5,0,0,0,4.251-2.223A11.356,11.356,0,0,0,76.713-5.5a9.508,9.508,0,0,0,1.131-4.641A8.843,8.843,0,0,0,75.66-16.3a15.258,15.258,0,0,0-6.4-3.9l-6.63-2.262a16.166,16.166,0,0,1-3.12-1.443A6.286,6.286,0,0,1,57.8-25.389a3.885,3.885,0,0,1-.7-1.443,5.828,5.828,0,0,1-.156-1.248A4.462,4.462,0,0,1,59.085-32.1,8.614,8.614,0,0,1,63.8-33.462a9.832,9.832,0,0,1,4.056.741,8.05,8.05,0,0,1,2.769,2.028,13,13,0,0,1,1.95,3q.819,1.716,1.6,3.588h1.014v-9.516H74.1a3.052,3.052,0,0,1-.39.7q-.234.312-1.092.312a3.908,3.908,0,0,1-1.287-.312q-.819-.312-1.872-.663t-2.34-.663a11.73,11.73,0,0,0-2.769-.312,14.588,14.588,0,0,0-5.187.9,12.552,12.552,0,0,0-4.056,2.418,10.935,10.935,0,0,0-2.613,3.549,10.117,10.117,0,0,0-.936,4.29,8.6,8.6,0,0,0,.7,3.627,9.4,9.4,0,0,0,1.755,2.613,9.17,9.17,0,0,0,2.3,1.755,17.781,17.781,0,0,0,2.34,1.053l6.318,2.34a19.431,19.431,0,0,1,3.315,1.521A7.024,7.024,0,0,1,70.122-8.97a4.179,4.179,0,0,1,.819,1.521,5.659,5.659,0,0,1,.195,1.443,6.17,6.17,0,0,1-.819,3.471,5.313,5.313,0,0,1-1.95,1.794,5.817,5.817,0,0,1-2.3.663Q64.9,0,64.194,0a9.875,9.875,0,0,1-4.6-.975,10.539,10.539,0,0,1-3.2-2.535,16.633,16.633,0,0,1-2.3-3.588q-.975-2.028-1.911-4.212ZM88.14-50.232a5.326,5.326,0,0,0,1.638,3.9,5.326,5.326,0,0,0,3.9,1.638,5.326,5.326,0,0,0,3.9-1.638,5.326,5.326,0,0,0,1.638-3.9,5.326,5.326,0,0,0-1.638-3.9,5.326,5.326,0,0,0-3.9-1.638,5.326,5.326,0,0,0-3.9,1.638A5.326,5.326,0,0,0,88.14-50.232Zm-4.446,16.77v1.092H88.92V-1.092H83.694V0h19.968V-1.092H98.436v-32.37Zm25.038,32.37V0H128.31V-1.092H123.4V-17.784a22.23,22.23,0,0,1,.78-6.24,14.687,14.687,0,0,1,2.067-4.446,8.628,8.628,0,0,1,3-2.691,7.645,7.645,0,0,1,3.588-.9,4.517,4.517,0,0,1,3.588,1.521,7.192,7.192,0,0,1,1.326,4.8V-1.092h-4.836V0H152.49V-1.092h-5.226v-22a11.222,11.222,0,0,0-2.847-8.112q-2.847-2.964-8-2.964a14.269,14.269,0,0,0-5.85,1.053,13.645,13.645,0,0,0-3.822,2.457,11.556,11.556,0,0,0-2.262,2.847q-.78,1.443-1.092,2.145h-.156v-7.8H108.732v1.092h5.148V-1.092Zm71.6-19.578h-12.48q.078-2.028.273-4.251a15.992,15.992,0,0,1,.9-4.134,7.519,7.519,0,0,1,2.145-3.159,6.072,6.072,0,0,1,4.1-1.248,4.507,4.507,0,0,1,2.925.858,4.89,4.89,0,0,1,1.521,2.106,8.613,8.613,0,0,1,.546,2.5q.078,1.248.078,2.106Zm-12.48,1.092h23.01a15.292,15.292,0,0,0-1.4-6.825,13.789,13.789,0,0,0-3.588-4.641A14.531,14.531,0,0,0,180.96-33.7a18.123,18.123,0,0,0-5.46-.858,16.908,16.908,0,0,0-7.137,1.521,19.692,19.692,0,0,0-5.772,3.978A18.37,18.37,0,0,0,158.73-23.4a16.147,16.147,0,0,0-1.4,6.552,18.259,18.259,0,0,0,1.482,7.527A16.17,16.17,0,0,0,162.9-3.7a18.042,18.042,0,0,0,6.123,3.51,23.08,23.08,0,0,0,7.566,1.209,15.649,15.649,0,0,0,5.85-.975A13.984,13.984,0,0,0,186.5-2.379a11.922,11.922,0,0,0,2.574-3.12A13.722,13.722,0,0,0,190.4-8.658l-1.092-.39a8.454,8.454,0,0,1-.741,2.184,11.755,11.755,0,0,1-2.028,3,13.054,13.054,0,0,1-3.51,2.691A10.87,10.87,0,0,1,177.762,0a8.852,8.852,0,0,1-5.46-1.482,9.454,9.454,0,0,1-2.964-3.783,15.916,15.916,0,0,1-1.248-5.148q-.234-2.847-.234-5.655Zm29.172,8.268V0h1.092a2.117,2.117,0,0,1,.507-.858,1.374,1.374,0,0,1,.9-.234,8.625,8.625,0,0,1,1.95.312q1.248.312,2.769.741T207.4.7a16.325,16.325,0,0,0,3.042.312,16.16,16.16,0,0,0,4.992-.78,13.5,13.5,0,0,0,4.251-2.223,11.356,11.356,0,0,0,2.964-3.51,9.508,9.508,0,0,0,1.131-4.641A8.843,8.843,0,0,0,221.6-16.3a15.257,15.257,0,0,0-6.4-3.9l-6.63-2.262a16.166,16.166,0,0,1-3.12-1.443,6.286,6.286,0,0,1-1.716-1.482,3.885,3.885,0,0,1-.7-1.443,5.828,5.828,0,0,1-.156-1.248,4.462,4.462,0,0,1,2.145-4.017,8.614,8.614,0,0,1,4.719-1.365,9.832,9.832,0,0,1,4.056.741,8.05,8.05,0,0,1,2.769,2.028,13,13,0,0,1,1.95,3q.819,1.716,1.6,3.588h1.014v-9.516h-1.092a3.053,3.053,0,0,1-.39.7q-.234.312-1.092.312a3.908,3.908,0,0,1-1.287-.312q-.819-.312-1.872-.663t-2.34-.663a11.73,11.73,0,0,0-2.769-.312,14.588,14.588,0,0,0-5.187.9,12.551,12.551,0,0,0-4.056,2.418,10.935,10.935,0,0,0-2.613,3.549,10.117,10.117,0,0,0-.936,4.29,8.6,8.6,0,0,0,.7,3.627,9.4,9.4,0,0,0,1.755,2.613,9.17,9.17,0,0,0,2.3,1.755,17.781,17.781,0,0,0,2.34,1.053l6.318,2.34a19.43,19.43,0,0,1,3.315,1.521A7.024,7.024,0,0,1,216.06-8.97a4.179,4.179,0,0,1,.819,1.521,5.66,5.66,0,0,1,.195,1.443,6.17,6.17,0,0,1-.819,3.471A5.313,5.313,0,0,1,214.3-.741a5.817,5.817,0,0,1-2.3.663Q210.834,0,210.132,0a9.875,9.875,0,0,1-4.6-.975,10.538,10.538,0,0,1-3.2-2.535,16.633,16.633,0,0,1-2.3-3.588q-.975-2.028-1.911-4.212Zm33.228,0V0h1.092a2.117,2.117,0,0,1,.507-.858,1.374,1.374,0,0,1,.9-.234,8.625,8.625,0,0,1,1.95.312q1.248.312,2.769.741T240.63.7a16.325,16.325,0,0,0,3.042.312,16.16,16.16,0,0,0,4.992-.78,13.5,13.5,0,0,0,4.251-2.223,11.356,11.356,0,0,0,2.964-3.51,9.508,9.508,0,0,0,1.131-4.641,8.843,8.843,0,0,0-2.184-6.162,15.258,15.258,0,0,0-6.4-3.9l-6.63-2.262a16.166,16.166,0,0,1-3.12-1.443,6.286,6.286,0,0,1-1.716-1.482,3.885,3.885,0,0,1-.7-1.443,5.828,5.828,0,0,1-.156-1.248,4.462,4.462,0,0,1,2.145-4.017,8.614,8.614,0,0,1,4.719-1.365,9.832,9.832,0,0,1,4.056.741,8.05,8.05,0,0,1,2.769,2.028,13,13,0,0,1,1.95,3q.819,1.716,1.6,3.588h1.014v-9.516h-1.092a3.053,3.053,0,0,1-.39.7q-.234.312-1.092.312a3.908,3.908,0,0,1-1.287-.312q-.819-.312-1.872-.663t-2.34-.663a11.73,11.73,0,0,0-2.769-.312,14.588,14.588,0,0,0-5.187.9,12.552,12.552,0,0,0-4.056,2.418,10.935,10.935,0,0,0-2.613,3.549,10.117,10.117,0,0,0-.936,4.29,8.6,8.6,0,0,0,.7,3.627,9.4,9.4,0,0,0,1.755,2.613,9.17,9.17,0,0,0,2.3,1.755,17.781,17.781,0,0,0,2.34,1.053l6.318,2.34a19.43,19.43,0,0,1,3.315,1.521,7.024,7.024,0,0,1,1.833,1.521,4.179,4.179,0,0,1,.819,1.521,5.66,5.66,0,0,1,.195,1.443,6.17,6.17,0,0,1-.819,3.471,5.313,5.313,0,0,1-1.95,1.794,5.817,5.817,0,0,1-2.3.663Q244.062,0,243.36,0a9.875,9.875,0,0,1-4.6-.975,10.539,10.539,0,0,1-3.2-2.535,16.634,16.634,0,0,1-2.3-3.588q-.975-2.028-1.911-4.212Z" transform="translate(5329 109)" />
            </g>
          </svg>
        </div>

      </div>

    </section>

    <section class="clients">

      <div class="clients__inner">

        <div class="clients__title">
          <svg class="sectionTitle sectionTitle--clients" xmlns="http://www.w3.org/2000/svg" width="279.684" height="339.094" viewBox="0 0 279.684 339.094">
            <g id="グループ_2665" data-name="グループ 2665" transform="translate(-2818.307 -5167.304)">
              <path id="パス_593" data-name="パス 593" d="M300.249-232.156v-93.228h-7.312q-1.371,6.4-4.57,8t-9.6,1.6a50.245,50.245,0,0,1-14.624-2.742q-8.683-2.742-19.423-5.712t-23.307-5.712a127.5,127.5,0,0,0-27.191-2.742q-29.248,0-59.639,12.11a181.221,181.221,0,0,0-55.069,34.5,181.659,181.659,0,0,0-40.444,53.926q-15.767,31.533-15.767,70.378,0,35.646,14.167,66.265a174.989,174.989,0,0,0,37.7,53.241A176.415,176.415,0,0,0,129.788-6.626,165.119,165.119,0,0,0,194.225,6.4,149.411,149.411,0,0,0,222.1,3.885Q235.355,1.371,246.551-1.6t19.88-5.484A53.431,53.431,0,0,1,280.6-9.6q6.4,0,9.6,2.056T295.679,0h7.312V-96.884h-7.312a154.532,154.532,0,0,1-12.8,36.1A126.948,126.948,0,0,1,261.4-29.934,103.344,103.344,0,0,1,231.927-8.226Q215.247,0,194.682,0q-25.592,0-44.1-7.312T120.42-32.9q-11.654-18.28-17.138-49.356t-5.484-78.6q0-36.1,2.742-66.493t12.567-52.326q9.825-21.936,29.02-34.275T194.682-326.3q24.678,0,41.358,8.911a89.115,89.115,0,0,1,27.877,22.85,129.4,129.4,0,0,1,18.28,30.619q7.083,16.68,12.11,31.761Z" transform="translate(2795 5500)" />
              <path id="パス_594" data-name="パス 594" d="M2.808-56.238v1.092H8.034V-1.092H2.808V0H22.776V-1.092H17.55V-56.238Zm29.016,6.006a5.326,5.326,0,0,0,1.638,3.9,5.326,5.326,0,0,0,3.9,1.638,5.326,5.326,0,0,0,3.9-1.638,5.326,5.326,0,0,0,1.638-3.9,5.326,5.326,0,0,0-1.638-3.9,5.326,5.326,0,0,0-3.9-1.638,5.326,5.326,0,0,0-3.9,1.638A5.326,5.326,0,0,0,31.824-50.232Zm-4.446,16.77v1.092H32.6V-1.092H27.378V0H47.346V-1.092H42.12v-32.37ZM74.88-20.67H62.4q.078-2.028.273-4.251a15.993,15.993,0,0,1,.9-4.134,7.519,7.519,0,0,1,2.145-3.159,6.072,6.072,0,0,1,4.1-1.248,4.507,4.507,0,0,1,2.925.858A4.89,4.89,0,0,1,74.256-30.5,8.613,8.613,0,0,1,74.8-28q.078,1.248.078,2.106ZM62.4-19.578H85.41a15.292,15.292,0,0,0-1.4-6.825,13.789,13.789,0,0,0-3.588-4.641A14.53,14.53,0,0,0,75.5-33.7a18.123,18.123,0,0,0-5.46-.858,16.908,16.908,0,0,0-7.137,1.521,19.692,19.692,0,0,0-5.772,3.978A18.37,18.37,0,0,0,53.274-23.4a16.147,16.147,0,0,0-1.4,6.552,18.259,18.259,0,0,0,1.482,7.527,16.17,16.17,0,0,0,4.1,5.616A18.042,18.042,0,0,0,63.57-.195a23.08,23.08,0,0,0,7.566,1.209,15.649,15.649,0,0,0,5.85-.975,13.984,13.984,0,0,0,4.056-2.418A11.921,11.921,0,0,0,83.616-5.5a13.722,13.722,0,0,0,1.326-3.159l-1.092-.39a8.453,8.453,0,0,1-.741,2.184,11.755,11.755,0,0,1-2.028,3,13.054,13.054,0,0,1-3.51,2.691A10.87,10.87,0,0,1,72.306,0a8.852,8.852,0,0,1-5.46-1.482,9.454,9.454,0,0,1-2.964-3.783,15.917,15.917,0,0,1-1.248-5.148Q62.4-13.26,62.4-16.068ZM91.416-1.092V0h19.578V-1.092H106.08V-17.784a22.23,22.23,0,0,1,.78-6.24,14.687,14.687,0,0,1,2.067-4.446,8.628,8.628,0,0,1,3-2.691,7.645,7.645,0,0,1,3.588-.9,4.517,4.517,0,0,1,3.588,1.521,7.192,7.192,0,0,1,1.326,4.8V-1.092H115.6V0h19.578V-1.092h-5.226v-22A11.222,11.222,0,0,0,127.1-31.2q-2.847-2.964-7.995-2.964a14.269,14.269,0,0,0-5.85,1.053,13.645,13.645,0,0,0-3.822,2.457,11.556,11.556,0,0,0-2.262,2.847q-.78,1.443-1.092,2.145h-.156v-7.8H91.416v1.092h5.148V-1.092Zm53.742-42.432v10.062h-5.226v1.092h5.226V-8.346q0,1.4.156,3.042a5.937,5.937,0,0,0,1.209,3.042A7.719,7.719,0,0,0,149.8.078a16.71,16.71,0,0,0,6.279.936A19,19,0,0,0,159.2.741,8.815,8.815,0,0,0,162.279-.39a8.506,8.506,0,0,0,2.574-2.457,10.459,10.459,0,0,0,1.6-4.251l-1.17-.234a20.414,20.414,0,0,1-.819,2.418,8.887,8.887,0,0,1-1.287,2.223,6.719,6.719,0,0,1-1.833,1.6,4.887,4.887,0,0,1-2.535.624,4.3,4.3,0,0,1-2.145-.468,3.13,3.13,0,0,1-1.248-1.287,5.832,5.832,0,0,1-.585-1.833,14.383,14.383,0,0,1-.156-2.184V-32.37H163.8v-1.092h-9.126V-43.524a19.56,19.56,0,0,1-2.379.78,9.5,9.5,0,0,1-2.379.312,9.5,9.5,0,0,1-2.379-.312A19.56,19.56,0,0,1,145.158-43.524Z" transform="translate(2929 5360)" />
            </g>
          </svg>
        </div>

        <ul class="clients__list clientsList">

          <li class="clientsList__item">
            <picture class="clientsList__image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.webp" type="image/webp" />
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.jpg" />
            </picture>
          </li>

          <li class="clientsList__item">
            <picture class="clientsList__image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.webp" type="image/webp" />
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.jpg" />
            </picture>
          </li>

          <li class="clientsList__item">
            <picture class="clientsList__image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.webp" type="image/webp" />
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.jpg" />
            </picture>
          </li>

          <li class="clientsList__item">
            <picture class="clientsList__image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.webp" type="image/webp" />
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.jpg" />
            </picture>
          </li>

          <li class="clientsList__item">
            <picture class="clientsList__image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.webp" type="image/webp" />
              <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/.jpg" />
            </picture>
          </li>

        </ul>

      </div>

    </section>



    <!-- <seciton class="diary">

      <div class="diary__inner">

        <dvi class="diary__list diaryList">

          <articel class="diaryList__item diaryList__item--br">
            <a href="" class="diaryList__link diaryList__link--bt"></a>
          </articel>

          <articel class="diaryList__item">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item--bl">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item  diaryList__item--br">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item--bl">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item--title">

            <svg xmlns="http://www.w3.org/2000/svg" width="381.827" height="327.669" viewBox="0 0 381.827 327.669">
              <g id="グループ_2666" data-name="グループ 2666" transform="translate(-4812.192 -7723.745)">
                <path id="パス_595" data-name="パス 595" d="M122.933-6.4V-318.986a74.588,74.588,0,0,1,11.882-1.143q7.312-.228,16.452-.228,39.759,0,64.209,11.425t37.931,32.676q13.482,21.25,18.051,51.184a446.1,446.1,0,0,1,4.57,66.951q0,15.081-1.371,32.218a206.4,206.4,0,0,1-5.712,34.275,140.074,140.074,0,0,1-12.8,32.676A95.94,95.94,0,0,1,233.3-31.3q-14.4,12.11-35.418,19.194T147.154-5.027A236.97,236.97,0,0,1,122.933-6.4ZM56.668-318.986V-6.4H14.624V0H56.668q26.049,0,51.869.457t51.869.457a296.639,296.639,0,0,0,38.617-2.742,226.5,226.5,0,0,0,42.044-9.825,202.826,202.826,0,0,0,40.9-18.966A139.742,139.742,0,0,0,316.93-60.781q15.309-18.28,24.449-43.415t9.14-58.5q0-33.818-9.14-58.953T316.7-265.06a140.1,140.1,0,0,0-35.646-30.162,204.5,204.5,0,0,0-42.5-18.965,247.5,247.5,0,0,0-45.243-9.826,365.01,365.01,0,0,0-43.415-2.742q-23.307,0-46.614.685t-46.614.686H14.624v6.4Z" transform="translate(4843.5 8050.5)" />
                <path id="パス_596" data-name="パス 596" d="M7.254-50.232a5.326,5.326,0,0,0,1.638,3.9,5.326,5.326,0,0,0,3.9,1.638,5.326,5.326,0,0,0,3.9-1.638,5.326,5.326,0,0,0,1.638-3.9,5.326,5.326,0,0,0-1.638-3.9,5.326,5.326,0,0,0-3.9-1.638,5.326,5.326,0,0,0-3.9,1.638A5.326,5.326,0,0,0,7.254-50.232ZM2.808-33.462v1.092H8.034V-1.092H2.808V0H22.776V-1.092H17.55v-32.37ZM48.36-19.344v10.3a13.879,13.879,0,0,1-.468,3.861,7.428,7.428,0,0,1-1.248,2.574A5.065,5.065,0,0,1,44.889-1.17,4.551,4.551,0,0,1,42.9-.7a4.352,4.352,0,0,1-2.808-.819A5.166,5.166,0,0,1,38.571-3.51a7.9,7.9,0,0,1-.624-2.418q-.117-1.248-.117-2.184a8.552,8.552,0,0,1,.741-3.822,7.98,7.98,0,0,1,1.911-2.5,10.679,10.679,0,0,1,2.652-1.677q1.482-.663,2.964-1.365a6.142,6.142,0,0,0,1.521-.975,2.319,2.319,0,0,0,.585-.9Zm15.756,18.1-.7-.7A5.432,5.432,0,0,1,62.127-.858a3.267,3.267,0,0,1-1.677.39q-1.716,0-2.145-1.131a7.341,7.341,0,0,1-.429-2.613V-23.556a11.556,11.556,0,0,0-1.131-5.421A8.948,8.948,0,0,0,53.7-32.37a12.07,12.07,0,0,0-4.524-1.716,31.631,31.631,0,0,0-5.577-.468,22.076,22.076,0,0,0-4.953.546,15.859,15.859,0,0,0-4.251,1.6,9.027,9.027,0,0,0-3,2.652,6.128,6.128,0,0,0-1.131,3.627,4.383,4.383,0,0,0,.429,2.106,3.445,3.445,0,0,0,1.053,1.209,3.342,3.342,0,0,0,1.443.546,11.3,11.3,0,0,0,1.6.117q.546,0,1.365-.039a4.545,4.545,0,0,0,1.56-.351A3.328,3.328,0,0,0,39-23.517a2.8,2.8,0,0,0,.546-1.833,8.3,8.3,0,0,0-.078-.858q-.078-.624-.156-1.326t-.156-1.287a7.275,7.275,0,0,1-.078-.819,3.243,3.243,0,0,1,1.326-3,5.817,5.817,0,0,1,3.12-.819q2.808,0,3.822,1.716a7.372,7.372,0,0,1,1.014,3.822v4.758a5.838,5.838,0,0,1-.429,2.418,4.18,4.18,0,0,1-1.521,1.677,12.824,12.824,0,0,1-3.081,1.4q-1.989.663-5.187,1.6-1.95.624-3.783,1.287a13.049,13.049,0,0,0-3.276,1.716,8.507,8.507,0,0,0-2.34,2.574,7.341,7.341,0,0,0-.9,3.783A6.528,6.528,0,0,0,28.86-3,7.086,7.086,0,0,0,31.512-.624,13.315,13.315,0,0,0,35.1.624a19.46,19.46,0,0,0,3.822.39A14.512,14.512,0,0,0,45.24-.078,7.55,7.55,0,0,0,48.672-4.29h.156a6.018,6.018,0,0,0,2.379,3.9q1.911,1.4,5.889,1.4A25.958,25.958,0,0,0,60.957.7,4.4,4.4,0,0,0,64.116-1.248Zm3.744-54.99v1.092h5.226V-1.092H67.86V0H87.828V-1.092H82.6V-56.238Zm45.084,46.41L103.428-32.37h5.46v-1.092H89.076v1.092H93.21l14.664,35.1-3.354,8.346q-.546,1.4-1.287,3.12a22.551,22.551,0,0,1-1.716,3.237,11.066,11.066,0,0,1-2.184,2.535,3.99,3.99,0,0,1-2.613,1.014,1.565,1.565,0,0,1-1.092-.429,1.661,1.661,0,0,1-.468-1.287,3.914,3.914,0,0,1,.507-2.028,4.417,4.417,0,0,0,.507-2.262,2.7,2.7,0,0,0-1.326-2.457A5.257,5.257,0,0,0,92.04,11.7a5.883,5.883,0,0,0-3.471,1.014,3.722,3.722,0,0,0-1.443,3.276,5.489,5.489,0,0,0,2.223,4.641,9.263,9.263,0,0,0,5.733,1.677,7.862,7.862,0,0,0,5.226-1.638,14.115,14.115,0,0,0,3.51-5.148q1.56-3.354,3.315-7.761t4.056-10.179q2.3-5.772,5.421-13.182T124.1-32.37h3.588v-1.092h-11.31v1.092h6.474Z" transform="translate(4835 7904) rotate(90)" stroke="#000" stroke-width="1" />
              </g>

            </svg>

          </articel>

          <articel class="diaryList__item diaryList__item--br">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item diaryList__item--bl">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item--br">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item--bl">
            <a href="" class="diaryList__link"></a>
          </articel>

          <articel class="diaryList__item diaryList__item--bl">
            <a href="" class="diaryList__link"></a>
          </articel>

        </dvi>

      </div>

    </seciton> -->

  </div>

</main>

<?php get_footer(); ?>