<?php
global $wp_rewrite;
$wp_rewrite->flush_rules();

require_once( __DIR__ . '/includes/services/PostService.php');
require_once( __DIR__ . '/includes/services/TagService.php');

require_once( __DIR__ . '/includes/components/Blog.php');
require_once( __DIR__ . '/includes/components/News.php');

add_theme_support('post-thumbnails');

// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );

// the_titleをエスケープ
add_filter( 'the_title', function( $title, $id ) {
    return esc_html( $title );
}, 10, 2);

function create_post_type() {

	// ニュース
	register_post_type( 'news',
		array(
			'labels' => array(
			'name' => __( 'ニュース' ),
			'singular_name' => __( 'ニュース' )
		),
		'public' => true,
		'menu_position' =>5,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments'),
		)
	);

	register_taxonomy_for_object_type('category', 'news');

	register_taxonomy(
		'news_tag',
		'news',
		array(
			'hierarchical' => false,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'ニュースのタグ',
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_rest' => true,
		)
	);

	// ブログ
	register_post_type( 'blog',
		array(
			'labels' => array(
			'name' => __( 'ブログ' ),
			'singular_name' => __( 'ブログ' )
		),
		'public' => true,
		'menu_position' =>5,
		'show_in_rest' => true,
		'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments'),
		)
	);

	register_taxonomy_for_object_type('category', 'blog');

	register_taxonomy(
		'blog_tag',
		'blog',
		array(
			'hierarchical' => false,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'ブログのタグ',
			'public' => true,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_rest' => true,
		)
	);
}

//
function get_posts_by_tag() {
	$nonce = $_REQUEST['nonce'];
	$taxonomy = $_REQUEST['taxonomy'];
	$terms = $_REQUEST['terms'];
	$posts_per_page = $_REQUEST['posts_per_page'];

	if ( !wp_verify_nonce( $nonce, 'get_posts_by_tag' ) ) {
		header('HTTP/1.0 500 Bad error');
		die();
	}

	$postService = new PostService();
	$posts = $postService->renderPostsByTag($posts_per_page, $taxonomy, $terms);

	echo json_encode(array(
		'posts' => $posts,
		// 'current_page' => $paged,
    ));

	exit;
}

add_action( 'wp_ajax_get_posts_by_tag', 'get_posts_by_tag' );
add_action( 'wp_ajax_nopriv_get_posts_by_tag', 'get_posts_by_tag' );