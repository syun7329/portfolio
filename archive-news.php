<?php
/*
  Template Name: コラム一覧ページ
  */
?>


<?php

$postService = new PostService();
$current_page = get_query_var('paged');
$result = $postService->getPostArchives($current_page, 'column');

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

        <div class="archive__list archiveList">

          <!-- <?php echo $result['render'] ?> -->

          <?php $i = 0; ?>
          <?php while ($i < 12) { ?>
          <article class="archiveList__item archiveItem">

            <a href="$link" class="archiveItem__link">

              <h3 class="archiveItem__title">
                $title
              </h3>

              <p class="archiveItem__detail">
                $excerpt
              </p>
            </a>

          </article>

          <?php $i++; ?>

          <?php }; ?>


        </div>

        </article>

      </div>

      <?php echo $result['pagination'] ?>

    </div>

  </div>

  </div>

</main>

<?php get_footer(); ?>