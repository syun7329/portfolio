<?php
/*
Template Name: 不動産事業
*/
?>

<?php

$postService = new PostService();
$result = $postService->getPostsByTaxonomy(LayoutTypeConst::BUSINESS, PostTypeConst::BUSINESS, TaxonomySlugConst::REAL_ESTATE, -1);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner main__inner--pb0">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title js-textAnimation">
          Real&nbsp;Estate
        </h1>
        <h2 class="pageHeader__subTitle js-textAnimation">
          不動産事業
        </h2>
      </div>
    </div>

    <?php echo $result['html'] ?>

  </div>

</main>

<?php get_footer(); ?>