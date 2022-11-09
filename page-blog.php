<?php
$postService = new PostService();
$tagService = new TagService();

$blogs = "";
$blogTags = "";

if(isset($_GET['taxonomy']) && isset($_GET['term'])) {
  $blogs = $postService->renderPostsByTag(10, $_GET['taxonomy'], $_GET['term']);
  $blogTags = $tagService->renderTagsActiveParam('blog_tag', $_GET['term']);
} else {
  $blogs = $postService->renderPosts(array("blog"), 10);
  $blogTags = $tagService->renderTags('blog_tag');
}

?>

<?php get_header(); ?>

<section class="blog">
	<div class="blog__body">
		<main class="blog__body__cardErea">
			<?= $blogs ?>
		</main>
	</div>
</section>
<?php get_footer(); ?>