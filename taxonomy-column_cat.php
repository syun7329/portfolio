<?php

$postService = new PostService();
$current_page = get_query_var('paged');
$result = $postService->getPostsByTaxonomy(LayoutTypeConst::COLUMN_ARCHIVE, PostTypeConst::COLUMN, TaxonomySlugConst::COLUMN_CAT, 12, $current_page);

$args = array(
  'type'                     => PostTypeConst::COLUMN,
  'child_of'                 => 0,
  'parent'                   => '',
  'orderby'                  => 'name',
  'order'                    => 'ASC',
  'hide_empty'               => 1,
  'hierarchical'             => 1,
  'exclude'                  => '',
  'include'                  => '',
  'number'                   => '',
  'taxonomy'                 => 'column_cat',
  'pad_counts'               => false
);

$categories = get_categories($args);

?>

<?php get_header(); ?>

<main class="main">

  <div class="main__inner">

    <div class="pageHeader">
      <div class="pageHeader__inner">
        <h1 class="pageHeader__title">
          Column
        </h1>

        <div class="pageHeader__category">
          <p class="pageHeader__subTitle">
            category is
          </p>



          <select class="pageHeader__select" name="select" onChange="location.href=value;">
            <option value="<?php echo home_url(); ?>/column/">ALL</option>
            <?php
            foreach ($categories as $category) {
              $categories = get_the_category($post->ID);
              $slug = $categories[0]->term_id;


              // 3. if文でカテゴリーページの場合 & 現在表示されているページと同じカテゴリーの場合「selected」属性を付与する
              if (is_category() && $slug == $category->term_id) {
                echo '<option value="' . get_category_link($category->term_id) . '" selected>' . $category->name . '</option>';
              } else {
                echo '<option value="' . get_category_link($category->term_id) . '">' . $category->name . '</option>';
              }
            }
            ?>
          </select>

        </div>

      </div>

    </div>

    <div class="archive">


      <div class="archive__inner">

        <div class="archive__list columnList columnList--archive">

          <?php echo $result['html'] ?>

          <div class="columnItem__border columnItem__border--01 js-borderAnimation"></div>
          <div class="columnItem__border columnItem__border--02a js-borderAnimation"></div>
          <div class="columnItem__border columnItem__border--03a js-borderAnimation"></div>
          <div class="columnItem__border columnItem__border--04 js-borderAnimation"></div>

        </div>

        </article>

      </div>

      <?php echo $result['pagination'] ?>

    </div>

  </div>

  </div>

</main>

<?php get_footer(); ?>