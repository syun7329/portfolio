<?php

// =================================================
// カスタム投稿タイプの作成
// =================================================

add_action('init', 'create_post_type_news');

/**
 * 
 * カスタム投稿タイプの作成 
 * 
 */
function create_post_type_news()
{

  register_post_type(
    'news',
    array(
      'labels' => array(
        'name' => __('NEWS'),
        'singular_name' => __('NEWS')
      ),
      'public' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    )
  );
}
