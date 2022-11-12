<?php

	$postService = new PostService();
	$current_pgae = get_query_var( 'paged' );
	$result = $postService->getPostArchives($current_pgae);

	$categories = get_categories();

?>

<?php get_header(); ?>

<main class="main main--lower">
	<div class="container archive">
		<h2 class="archive__title">記事一覧</h2>

		<ul class="categoryList categoryList--layout">
			<?php foreach( $categories as $category ): ?>
			<li class="categoryListItem">
				<a href="<?php echo get_category_link($category->term_id) ?>" class="categoryListItem__link"><?php echo $category->name ?></a>
			</li>
			<?php endforeach; ?>
		</ul>

		<div class="archive__list">

			<?php echo $result['render'] ?>

		</div>

		<?php echo $result['pagination'] ?>
	</div>
</main>

<?php get_footer(); ?>