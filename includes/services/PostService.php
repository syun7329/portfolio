<?php

class PostService
{

  /**
   * 投稿タイプから投稿を取得する
   *
   * @param string  $layout_type LayoutFactoryのレイアウトタイプ
   * @param string  $post_type 投稿タイプ
   * @param integer $posts_per_page WP Queryのposts_per_page
   * @param integer $paged ページ番号（初期値：1）
   * @return void
   */
  public function getPostsByPostType($layout_type, $post_type, $posts_per_page, $paged = 1)
  {
    $arg = array(
      'post_type' => $post_type,
      'posts_per_page' => $posts_per_page,
      'post_status'    => 'publish',
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged,
    );

    $query = new WP_Query($arg);
    $posts = $query->posts;

    return $this->createPostsResult($query, $posts, $layout_type);
  }


  /**
   * 
   * カテゴリに該当する投稿のHTMLを返します。
   * 
   * @param string $layout_type   LayoutFactoryのレイアウトタイプ
   * @param string $post_type 		投稿タイプ
   * @param string $category_name カテゴリ名
   * @param string $post_per_page １ページにつき表示するページ
   * @param string $paged 				現在のページ数
   * @param string $layout 				レイアウトの種類
   * 
   */
  public function getPostsByTaxonomy($layout_type, $post_type, $taxonomy_slug, $posts_per_page, $paged = 1)
  {
    $arg = array(
      'post_type'        =>     $post_type,
      'posts_per_page'   =>     $posts_per_page,
      'taxonomy'         =>     $taxonomy_slug,
      'paged'            =>     $paged,
      'post_status'      =>     'publish',
      'order'            =>     'DESC',
      'orderby'          =>     'date',
    );

    $query = new WP_Query($arg);

    $posts = $query->posts;

    return $this->createPostsResult($query, $posts, $layout_type);
  }


  /**
   * 
   * WP_Query・投稿のHTML・ページネーションを返します
   * 
   * @param string $query        クエリ
   * @param        $posts        クエリの検索結果
   * @param string $layout_type  レイアウトの種類
   * 
   */
  private function createPostsResult($query, $posts, $layout_type)
  {
    $html = "";

    $pagination = new Pagination($query);

    foreach ($posts as $post) {
      $html .= LayoutFactory::create($layout_type, $post)->render();
    }

    return array(
      "query" => $query,
      "html" => $html,
      "pagination" => $pagination->render(),
    );
  }
}