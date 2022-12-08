<?php

global $wp_rewrite;
$wp_rewrite->flush_rules();

global $TMP_DIR;
global $IMG_DIR;

$TMP_DIR = get_template_directory_uri();
$IMG_DIR = $TMP_DIR . "/dist/assets/images/";

require_once(__DIR__ . '/functions/post_type_column.php');
require_once(__DIR__ . '/functions/post_type_business.php');

require_once(__DIR__ . '/includes/components/Pagination.php');

require_once(__DIR__ . '/includes/constants/LayoutTypeConst.php');
require_once(__DIR__ . '/includes/constants/PostTypeConst.php');
require_once(__DIR__ . '/includes/constants/TaxonomySlugConst.php');

require_once(__DIR__ . '/includes/factories/LayoutFactory.php');

require_once(__DIR__ . '/includes/layouts/AbstractLayout.php');
require_once(__DIR__ . '/includes/layouts/Business.php');
require_once(__DIR__ . '/includes/layouts/Adoption.php');
require_once(__DIR__ . '/includes/layouts/ColumnFrontPage.php');
require_once(__DIR__ . '/includes/layouts/ColumnArchive.php');

require_once(__DIR__ . '/includes/services/PostService.php');
require_once(__DIR__ . '/includes/services/TaxonomyService.php');

require_once(__DIR__ . '/includes/utils/PostUtils.php');
require_once(__DIR__ . '/includes/utils/ImageUtils.php');
require_once(__DIR__ . '/includes/utils/PostArrayUtils.php');



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

function unset_default_post()
{
  global $menu;
  unset($menu[5]);
}

add_action("admin_menu", "unset_default_post");