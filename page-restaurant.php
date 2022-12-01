<?php
/*
Template Name: 飲食事業
*/
?>

<?php

$postService = new PostService();
$result = $postService->getPostsByTaxonomy(PostTypeConst::BUSINESS, PostTypeConst::BUSINESS, TaxonomySlugConst::RESTAURANT, -1);

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
          飲食事業
        </h2>
      </div>
    </div>

    <?php echo $result['html'] ?>

  </div>

</main>

<?php get_footer(); ?>