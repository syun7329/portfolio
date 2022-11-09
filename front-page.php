<?php

$postService = new PostService();
$tagService = new TagService();

$news = $postService->renderPosts('news', 10);
/*<?= $news ?>で取得*/

$blog = $postService->renderPosts('blog', 10);
/*<?= $blog ?>で取得*/
?>

<?php get_header(); ?>


<section class="top">fdkfa;sl</section>

<?php get_header(); ?>