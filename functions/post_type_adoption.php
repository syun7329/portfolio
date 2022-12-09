<?php

// =================================================
// カスタム投稿タイプの作成
// =================================================

add_action('init', 'create_post_type_adoption');

/**
 * 
 * カスタム投稿タイプの作成 
 * 
 */
function create_post_type_adoption()
{

  register_post_type(
    'adoption',
    array(
      'labels' => array(
        'name' => __('採用'),
        'singular_name' => __('adoption')
      ),
      'public' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    )
  );

  // カテゴリの追加
  register_taxonomy('adoption_cat', 'adoption', array(
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
      'slug' => 'adoption_cat', 'with_front' => true, 'hierarchical' => false
    )
  ));

  register_taxonomy_for_object_type('post_tag', 'adoption');
}