<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>

	<!-- favion pc用-->
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/favicon.ico" id="favicon">
	<!-- favion sp用-->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/dist/assets/images/favicon/apple-touch-icon-180x180.png">

	<!-- meta description -->
	<meta name="description" content="">

	<!--============================================= OGP =============================================-->
	<meta property="og:url" content=" ページの URL" />
	<meta property="og:type" content=" ページの種類" />
	<meta property="og:title" content=" ページの タイトル" />
	<meta property="og:description" content=" ページの説明文" />
	<meta property="og:site_name" content="サイト名" />
	<meta property="og:image" content=" サムネイル画像の URL" />
	<!--============================================= OGP =============================================-->

	<?php if (is_front_page()): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/index.min.css?ver=<?php echo $version ?>">
		<meta name="description" content="">
	<?php elseif(is_page('PAGE_NAME')): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/XXX.min.css?ver=<?php echo $version ?>">
		<meta name="description" content="">
	<?php elseif(is_page('contact')): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/contact.min.css?ver=<?php echo $version ?>">
		<meta name="description" content="お問い合わせを掲載しています">
	<?php elseif(is_single()): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/blogDetail.min.css?ver=<?php echo $version ?>">
		<meta name="description" content="">
	<?php endif; ?>

	<!-- jqueryの読み込み -->
	<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- drwer.js -->
	<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/animation/drawer.js"></script>

	<!-- drwer.css -->
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">

	<!-- 全ページで共通するjsの読み込み -->
	<script src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/fontFamily.js"></script>

	<!-- animation.js -->
	<script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/animation/aos.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/animation/textAnimation.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/dist/assets/js/animation/elementAnimation.js"></script>

	<!-- animation.scss -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/assets/css/style.css?ver=<?php echo $version ?>">

	<?php wp_head(); ?>
</head>

<body class="drawer drawer--right" data-tmpdir="<?php echo esc_url(get_template_directory_uri()); ?>/" >


<!--============================================= header-pc =============================================-->
<!-- ここにpc時のheaderを追記 -->
<!--============================================= header-pc =============================================-->


<!--============================================= hamberger-sp =============================================-->
	<!-- close時 -->
	<div class="hamburger drawer-toggle">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<!-- open時 -->
	<nav class="drawer-nav" role="navigation">
		<ul class="drawer-menu">
			<li><a class="drawer-menu-item" href="<?php echo home_url(); ?>"><span>リスト１</span></a></li>
			<li><a class="drawer-menu-item" href="<?php echo home_url(); ?>"><span>リスト２</span></a></li>
			<li><a class="drawer-menu-item" href="<?php echo home_url(); ?>"><span>リスト３</span></a></li>
			<li><a class="drawer-menu-item" href="<?php echo home_url(); ?>"><span>リスト４</span></a></li>
			<li><a class="drawer-menu-item" href="<?php echo home_url(); ?>"><span>リスト5</span></a></li>
		</ul>
	</nav>
<!--============================================= hamberger-sp =============================================-->
