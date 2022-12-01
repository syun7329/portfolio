<?php
/*
Template Name: イベント事業
*/
?>

<?php

$postService = new PostService();
$result = $postService->getPostsByTaxonomy(PostTypeConst::BUSINESS, PostTypeConst::BUSINESS, TaxonomySlugConst::EVENT, -1);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Event
        </h1>
        <h2 class="pageHeader__subTitle">
          イベント事業
        </h2>
      </div>
    </div>

    <?php echo $result['html'] ?>

  </div>

</main>

<?php get_footer(); ?>