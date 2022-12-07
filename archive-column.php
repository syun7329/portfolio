<?php
/*
  Template Name: コラム一覧ページ
  */
?>


<?php

$postService = new PostService();
$current_page = get_query_var('paged');
$result = $postService->getPostsByPostType(LayoutTypeConst::COLUMN_ARCHIVE, PostTypeConst::COLUMN, 12, $current_page);

$categories = get_categories();

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Column
        </h1>

        <p class="pageHeader__subTitle">
          articls is
        </p>

        <select class=".js-select">
          <?php foreach ($categories as $category) : ?>
          <option class="" value=" <?php echo get_category_link($category->term_id) ?>">
            <?php echo $category->name ?>
          </option>
          <?php endforeach; ?>
        </select>

      </div>
    </div>

    <div class="archive">

      <div class="archive__inner">

        <div class="archive__list columnList columnList--archive">

          <?php echo $result['html'] ?>

          <div class="columnItem__border columnItem__border--01 js-borderAnimation"></div>
          <div class="columnItem__border columnItem__border--02a js-borderAnimation"></div>
          <div class="columnItem__border columnItem__border--03a js-borderAnimation"></div>
          <div class="columnItem__border columnItem__border--04 js-borderAnimation"></div>

        </div>

        </article>

      </div>

      <?php echo $result['pagination'] ?>

    </div>

  </div>

  </div>

</main>

<?php get_footer(); ?>