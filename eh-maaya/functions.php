<?php


$content;
global $__duplicate;

include_once('inc/theme-constants.php');
include_once('inc/security.php');

add_theme_support( 'post-thumbnails' );


function register_theme_menus(){
register_nav_menus(array(
        'footermenu' => __('footermenu'),
        'headermenu' => __('headermenu')
));}
add_action('after_setup_theme', 'register_theme_menus');


function theme_assets(){  

    if(is_page(array('contact-us'))){
        wp_register_script( 'jq-script', THEME_ROOT.'/assets/js/jquery.min.js?', filemtime( THEME_DIR.'/assets/js/jquery.min.js') ,(date("dmis") ));
        wp_enqueue_script( 'jq-script' );
        wp_register_style( 'contactcss', THEME_ROOT.'/assets/dist/css/contact.css?', filemtime( THEME_DIR.'/assets/dist/css/contact.css') ,(date("dmis") ));
        wp_enqueue_style( 'contactcss' );
    }
    if(is_page( 'unsubscribe' )){
        wp_register_script( 'jq-script', THEME_ROOT.'/assets/js/jquery.min.js?', filemtime( THEME_DIR.'/assets/js/jquery.min.js') ,(date("dmis") ));
        wp_enqueue_script( 'jq-script' );
        wp_register_style( 'unsubscribecss', THEME_ROOT.'/assets/dist/css/unsubscribe.css?', filemtime( THEME_DIR.'/assets/dist/css/unsubscribe.css') ,(date("dmis") ));
        wp_enqueue_style( 'unsubscribecss' );
    }
    

}
add_action('wp_enqueue_scripts', 'theme_assets');

add_action('wp_footer', function () { 

    if(is_home()){
        echo '<link rel="stylesheet" href="' . THEME_ROOT . '/assets/dist/css/home/home.css?ver=' .SITE_VERSION . '" media="print" onload="this.media=\'all\'"/>';
    }
    if((is_page_template( 'page-templates/article.php' ))){
        echo '<link rel="stylesheet" href="' . THEME_ROOT . '/assets/dist/css/article/article.css?ver=' .SITE_VERSION . '" media="print" onload="this.media=\'all\'"/>';
    }
    if(is_category()){
        echo '<link rel="stylesheet" href="' . THEME_ROOT . '/assets/dist/css/category/category.css?ver=' .SITE_VERSION . '" media="print" onload="this.media=\'all\'"/>';
    }

    echo '<link rel="stylesheet" href="' . THEME_ROOT . '/assets/dist/css/footer/footer-common.css?ver=' .SITE_VERSION . '" media="print" onload="this.media=\'all\'"/>';
});

add_action('wp_footer', function () { 
    echo '<script defer src="' . THEME_ROOT . '/assets/dist/js/app.js?ver=' . SITE_VERSION . '"></script>';
    do_action('appjsdef');
   });

function awh_field_type($post_id){
    $awh_f_post = get_post_type($post_id);
    $meta_value = '';
    $meta_name = 'author';
        if($awh_f_post == 'post'){
            add_post_meta($post_id,$meta_name,$meta_value,true);
        }
    return $awh_f_post;
} 
add_action('wp_insert_post','awh_field_type');

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
        if (is_page([ 'california-privacy-notice', 'do-not-sell-my-info', 'privacy-policy', 'terms-of-use' ])) {
                echo '  >  ';
                echo the_title();
        }
}

function register_font_fam($font_family, $font_style, $font_weight, $woff_font_url, $font_display) {
    $args = ["font-family: '$font_family'", "font-style: $font_style", "font-weight: $font_weight", "src: url('{$woff_font_url}') format('woff')", "font-display: $font_display", ];
    echo '@font-face{' . implode(';', $args) . '}';
}

// Contact Page Address
if( !defined( 'CONTACT_ADDRESS' ) ){ define( 'CONTACT_ADDRESS', array(
    'url' => get_stylesheet_directory_uri()."/assets/images/2.png",
    'alt' => get_bloginfo('address'),
    'width' => 480,
    'height' => 140
));}
if( !defined( 'CONTACT_NUMBER' ) ){ define( 'CONTACT_NUMBER', "1-833-809-6437" ); }


