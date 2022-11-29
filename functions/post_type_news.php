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
        'name' => __('column'),
        'singular_name' => __('column')
      ),
      'public' => true,
      'menu_position' => 5,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    )
  );
}