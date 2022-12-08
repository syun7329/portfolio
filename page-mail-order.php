<?php
/*
Template Name: 通販事業
*/
?>

<?php

$postService = new PostService();
$result = $postService->getPostsByTaxonomy(PostTypeConst::BUSINESS, PostTypeConst::BUSINESS, TaxonomySlugConst::MAIL_ORDER, -1);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner main__inner--pb0">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Mail Order
        </h1>
        <h2 class="pageHeader__subTitle">
          通販事業
        </h2>
      </div>
    </div>

    <?php echo $result['html'] ?>

  </div>

</main>

<?php get_footer(); ?>