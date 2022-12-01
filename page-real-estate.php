<?php
/*
Template Name: 不動産事業
*/
?>

<?php

$postService = new PostService();
$result = $postService->getPostsByTaxonomy(PostTypeConst::BUSINESS, PostTypeConst::BUSINESS, TaxonomySlugConst::REAL_ESTATE, -1);

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

    <?php echo $result['html'] ?>

  </div>

</main>

<?php get_footer(); ?>