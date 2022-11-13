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
const OG_URL         =  "https://gc-ltd.jp";
const OG_TITLE       =  "有限会社GC";
const OG_SITE_NAME   =  "有限会社GC";

// META
const META_DESCRIPTION     = "";

// 外部リンク
const COMPANY_LINK   =  "https://gc-ltd.jp";
const INSTAGRAM_LINK =  "";
const YOUTUBE_LINK   =  "";
const TWITTER_LINK   =  "";
const FACEBOOK_LINK   =  "";
const MAP_LINK       =  "https://www.google.com/maps/place/%E3%80%92107-0052+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%AF%E5%8C%BA%E8%B5%A4%E5%9D%82%EF%BC%97%E4%B8%81%E7%9B%AE%EF%BC%96%E2%88%92%EF%BC%91%EF%BC%95+%E8%B5%A4%E5%9D%82%E3%83%AD%E3%82%A4%E3%83%A4%E3%83%AB%E3%83%93%E3%83%AB/@35.6712786,139.73313,17z/data=!3m1!4b1!4m5!3m4!1s0x60188b8038dd07d7:0x7e4eeb0b906d65a5!8m2!3d35.6712786!4d139.73313";

// 会社基本情報
const PHONE_NUMBER   =  "03-6743-1144";
const MAIL_ADDRESS   =  "";
const MAIL_LINK      =  "";
const POST_CODE      =  "107-0052";
const ADDRESS        =  "東京都港区赤坂7-6-15-505";


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