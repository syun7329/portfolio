<?php

global $wp_rewrite;

$wp_rewrite->flush_rules();

require_once(__DIR__ . '/functions/post_type_news.php');

require_once(__DIR__ . '/includes/services/PostService.php');
require_once(__DIR__ . '/includes/services/TagService.php');

require_once(__DIR__ . '/includes/components/Post.php');
require_once(__DIR__ . '/includes/components/Pagination.php');
require_once(__DIR__ . '/includes/components/Archive.php');


// ===============================================================================
// 変数・定数
// ===============================================================================

// OGP
const OG_URL         =  "https://coool.co.jp";
const OG_TITLE       =  "COOOL TURF (クールターフ) - 天然芝を本気で追求した、まったく新しい人工芝";
const OG_SITE_NAME   =  "COOOL株式会社";

// META
const META_DESCRIPTION     = "「COOOL TURF」(クールターフ)は従来の人工芝のあらゆる不満をすべて改善し、『快適な生活』を提供できる商品です。天然芝にも使用可能な冷却目土充填材『寒土』を充填することで、今まで我慢して使っていた人工芝から、快適に生活する緑の空間へと変えることが出来ます。";

// 外部リンク
const COMPANY_LINK   =  "https://coool.co.jp/";
const INSTAGRAM_LINK =  "https://instagram.com/coool_turf?utm_medium=copy_link";
const YOUTUBE_LINK   =  "https://www.youtube.com/channel/UCVHW0pNy1AuRYFhbr0UCX2Q";
const MAP_LINK       =  "https://goo.gl/maps/Z3AwUs9B5QbUu6j69";

// 会社基本情報
const PHONE_NUMBER   =  "0940-72-5186";
const MAIL_ADDRESS   =  "info@coool.co.jp";
const MAIL_LINK      =  "mailto:info@coool.co.jp";
const POST_CODE      =  "811-3504";
const ADDRESS        =  "福岡県宗像市深田582-1 世界遺産 宗像大社横";
const BUSINESS_HOURS =  "";
const HORIDAY        =  "";

// ===============================================================================
// 設定
// ===============================================================================

add_theme_support('post-thumbnails');

// the_titleをエスケープ
add_filter('the_title', function ($title, $id) {
  return esc_html($title);
}, 10, 2);

function unset_default_post()
{

  global $menu;
  unset($menu[5]); //投稿メニュー

}

add_action("admin_menu", "unset_default_post");

/* 投稿アーカイブページの作成 */
function post_has_archive($args, $post_type)
{

  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'archives'; //任意のスラッグ名
  }
  return $args;
}

add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function get_posts_by_tag()
{
  $nonce = $_REQUEST['nonce'];
  $taxonomy = $_REQUEST['taxonomy'];
  $terms = $_REQUEST['terms'];
  $posts_per_page = $_REQUEST['posts_per_page'];

  if (!wp_verify_nonce($nonce, 'get_posts_by_tag')) {
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

add_action('wp_ajax_get_posts_by_tag', 'get_posts_by_tag');
add_action('wp_ajax_nopriv_get_posts_by_tag', 'get_posts_by_tag');
