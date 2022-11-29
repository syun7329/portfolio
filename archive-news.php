<?php
/*
  Template Name: コラム一覧ページ
  */
?>


<?php

$postService = new PostService();
$current_page = get_query_var('paged');
$result = $postService->getPostArchives($current_page, 'news');

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
        <h2 class="pageHeader__subTitle">
          記事一覧
        </h2>
      </div>
    </div>

    <div class="archive">

      <div class="archive__inner">

        <ul class="categoryList categoryList--layout">
          <?php foreach ($categories as $category) : ?>
            <li class="categoryListItem">
              <a href="<?php echo get_category_link($category->term_id) ?>" class="categoryListItem__link"><?php echo $category->name ?></a>
            </li>
          <?php endforeach; ?>
        </ul>

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