<?php

$category = get_category(get_query_var('cat'));
$cat_id = $category->cat_ID;

$current_pgae = get_query_var('paged');

$postService = new PostService();
$result = $postService->getPostsByCategory($current_pgae, $cat_id);

$categories = get_categories();

?>
<?php get_header(); ?>

<main class="main main--layout">
  <div class="container archive">
    <h2 class="archive__title"><?php echo single_cat_title() ?>&nbsp;一覧</h2>

    <ul class="categoryList categoryList--layout">
      <?php foreach ($categories as $category) : ?>
        <li class="categoryListItem">
          <a href="<?php echo get_category_link($category->term_id) ?>" class="categoryListItem__link <?php echo $category->term_id == $cat_id ? 'active' : '' ?>"><?php echo $category->name ?></a>
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