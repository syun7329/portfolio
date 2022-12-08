<?php
/*
Template Name: adoption
*/
?>

<?php

$postService = new PostService();
$post = $postService->getPostsByPostType(LayoutTypeConst::ADOPTION, PostTypeConst::ADOPTION, -1);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner main__inner--pb0">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Adoption
        </h1>
        <h2 class="pageHeader__subTitle">
          採用情報
        </h2>
      </div>
    </div>

    <div class="adoption">

      <?php echo $post['html'] ?>

    </div>

  </div>

</main>

<?php get_footer(); ?>