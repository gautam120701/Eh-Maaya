<!DOCTYPE html>
<html lang="en">
    
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('name'); ?><?php wp_title(' | ', 'echo', 'left'); ?></title>
		<meta name="robots" content="noindex, nofollow, noimageindex">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
		<meta name="description" content="Learn tips on how to master upcoming interviews, write a resume that will stand out, highlight your skills, build your professional network, and more." />
		<meta itemprop="name" content="jobsinsider.net" />
		<meta itemprop="description" content="Learn tips on how to master upcoming interviews, write a resume that will stand out, highlight your skills, build your professional network, and more.">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="//jobsinsider.net" />
		<meta property="og:site_name" content="" />
		<meta property="og:title" content="jobsinsider.net" />
		<meta property="og:description" content="Learn tips on how to master upcoming interviews, write a resume that will stand out, highlight your skills, build your professional network, and more." />
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" />	

		<?php 

		include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
		add_action('wp_enqueue_scripts', function(){
		EnqueueAssetsInline::css( 'base', THEME_DIR . '/assets/dist/css/base.css' );
		EnqueueAssetsInline::css( 'header-c', THEME_DIR . '/assets/dist/css/header/header-common.css' );

		}, 9);
		$content;
		global $__duplicate;
		wp_head(); ?>

		<style>
		<?php 
		register_font_fam('PlusJakartaSans', 'normal', 400, get_theme_file_uri('assets/fonts/PlusJakartaSans-Regular.woff'), 'swap');
		register_font_fam('PlusJakartaSans', 'bold', 700, get_theme_file_uri('assets/fonts/PlusJakartaSans-Bold.woff'), 'swap');
		register_font_fam('PlusJakartaSans', 'extra bold', 800, get_theme_file_uri('assets/fonts/PlusJakartaSans-ExtraBold.woff'), 'swap');
		?>
		</style>
    </head>

	<body>
	<div class="main d-flex flex-column justify-content-between">
    <div class="inner-wrap">
	
	<header class="header-container">
	<div class="nav">
                <div class="logo">
                 <div class="img-wrap"> </div>
                </div>
                <div class="nav-center">
                    <ul>
                        <li><a href="#">Categories</a></li>
                        <li><a href="#">Ritual</a></li>
                        <li><a href="#">Keep your Hair Type</a></li>  
                        <li><a href="#">Our Story</a></li>  
                        <li><a href="#">Ingredients</a></li>  
                      </ul>
                </div>
                <div class="nav-right">
                <a href=""> <i id="a12" class="ri-search-line"></i></a>
                <a href=""> <i class="ri-user-fill"></i></a>
                    <a href=""> <i class="ri-shopping-bag-line"></i></a>
                </div>
            </div>
	</header>
