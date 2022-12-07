<?php

// =================================================
// カスタム投稿タイプの作成
// =================================================

add_action('init', 'create_post_type_column');

/**
 * 
 * カスタム投稿タイプの作成 
 * 
 */
function create_post_type_column()
{

  register_post_type(
    'column',
    array(
      'labels' => array(
        'name' => __('コラム'),
        'singular_name' => __('column')
      ),
      'public' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    )
  );

  // カテゴリの追加
  register_taxonomy('column_cat', 'column', array(
    'hierarchical' => true,
    'labels' => array( /* 表示させる文字 */
      'name' => 'カテゴリ',
      'singular_name' => 'カテゴリ',
      'search_items' =>  'カテゴリを検索',
      'all_items' => 'すべてのカテゴリ',
      'parent_item' => '親分類',
      'parent_item_colon' => '親分類：',
      'edit_item' => '編集',
      'update_item' => '更新',
      'add_new_item' => 'カテゴリを追加',
      'new_item_name' => '名前',
    ),
    'show_ui' => true, /* 管理画面にメニューを作る */
    'show_in_rest' => true,
    'rewrite' => array(
      'slug' => 'column_cat', 'with_front' => true, 'hierarchical' => false
    )
  ));

  register_taxonomy_for_object_type('post_tag', 'column');

  /**
   * 
   * アーカイブページの作成
   * 
   */
  function column_has_archive($args, $post_type)
  {
    if ('post' == $post_type) {
      $args['rewrite'] = true; // リライトを有効にする
      $args['has_archive'] = 'column'; // 任意のスラッグ名
    }
    return $args;
  }

  add_filter('register_post_type_args', 'column_has_archive', 10, 2);
}