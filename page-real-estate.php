<?php
/*
Template Name: 不動産事業
*/
?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Real Estate
        </h1>
        <h2 class="pageHeader__subTitle">
          不動産事業
        </h2>
      </div>
    </div>

    <div class="restaurant">

      <div class="restaurant__inner">

        <div class="restaurant__main">

          <div class="restaurant__text">

            <h2 class="restaurant__name">
              レモホル酒場
            </h2>

            <p class="restaurant__detail">
              ダミーテキスト が入ります。自分には、人間の生活というものが、見当つかないのです。自分は東北の田舎に生れましたので、汽車をはじめて見たのは、よほど大きくなってからでした。自分
            </p>

          </div>

          <picture class="restaurant__logo">
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/remohoru.webp"
              type="image/webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/remohoru.png" />
          </picture>

        </div>

        <a href="" class="restaurant__button viewAllButton underTabNone">

          <div class="marquee">

            <div class="marquee__text marquee__text--viewAllButton">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

            <div class="marquee__text marquee__text--viewAllButton" aria-hidden="true">
              <div class="">VIEW ALL</div>
            </div>

          </div>

        </a>

      </div>

      <picture class="restaurant__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top-img.webp"
          type="image/webp" />
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top-img.jpg" />
      </picture>

      <a href="" class="restaurant__button viewAllButton underTabVisible">

        <div class="marquee">
          <div class="marquee__text marquee__text--viewAllButton">
            <?php for ($i = 0; $i < 50; $i++) : ?>
            <div>VIEW ALL</div>
            <?php endfor; ?>
          </div>

          <div class="marquee__text marquee__text--viewAllButton marquee__text--2">
            <?php for ($i = 0; $i < 50; $i++) : ?>
            <div>VIEW ALL</div>
            <?php endfor; ?>
          </div>

        </div>

      </a>

    </div>

  </div>

</main>

<?php get_footer(); ?>