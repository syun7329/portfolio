<?php
/*
Template Name: restaurant
*/
?>

<?php

$postService = new PostService();
$tagService = new TagService();

$postsResult = $postService->renderPostsByCategory("business", "-1", "restaurant");

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Restaurant
        </h1>
        <h2 class="pageHeader__subTitle">
          レストラン
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
              卓上レモンサワーサーバーと新鮮な生ホルモン、多様なサイドメニューを用意した飲み放題、食べ放題どちらも楽しめるお店。「ネオ×大衆」をコンセプトとしたブランドで、店内も「新しいのにどこか懐かしい」雰囲気。利用しやすい価格設定で幅広い年齢層から注目を受ける。2022年6月現在、全国に20店舗以上展開中。(FC店舗含む)
            </p>

          </div>

          <picture class="restaurant__logo">
            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/remohoru.webp"
              type="image/webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/remohoru.png" />
          </picture>

        </div>

      </div>

      <picture class="restaurant__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top-img.webp"
          type="image/webp" />
        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/top-img.jpg" />
      </picture>

    </div>

  </div>

</main>

<?php get_footer(); ?>