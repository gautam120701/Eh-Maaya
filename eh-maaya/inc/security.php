<?php
//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
if (!is_admin() && isset($scripts->registered['jquery'])) {
$script = $scripts->registered['jquery'];
if ($script->deps) { // Check whether the script has any dependencies
$script->deps = array_diff($script->deps, array(
                'jquery-migrate'
));
}
}
}
add_action('wp_default_scripts', 'remove_jquery_migrate');
wp_deregister_script('jquery');
wp_register_script('jquery', false);

//Disable RSS feed
function wpb_disable_feed() {
	wp_die( __('No feed available,please visit our <a href="'. get_bloginfo('url') .'">homepage</a>!') );
	}
add_action('do_feed', 'wpb_disable_feed', 1);
add_action('do_feed_rdf', 'wpb_disable_feed', 1);
add_action('do_feed_rss', 'wpb_disable_feed', 1);
add_action('do_feed_rss2', 'wpb_disable_feed', 1);
add_action('do_feed_atom', 'wpb_disable_feed', 1);
add_action('do_feed_rss2_comments', 'wpb_disable_feed', 1);
add_action('do_feed_atom_comments', 'wpb_disable_feed', 1);
//Disable RSS feed end

function crunchify_remove_version(){return '';}
add_filter('the_generator', 'crunchify_remove_version');

add_action('wp_enqueue_scripts', 'adminBar_dequeue', 9999);
function adminBar_dequeue(){
    wp_dequeue_style('admin-bar');
    wp_deregister_style('admin-bar');
}
add_action('wp_head', 'adminBar_dequeue', 9999);
add_filter( 'user_can_richedit' , '__return_false', 50 );

//junk starts
function remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css' );

function remove_global_styles(){
	wp_dequeue_style( 'global-styles' );
   }
add_action( 'wp_enqueue_scripts', 'remove_global_styles' );

//Remove Embed script
function dequeue_wp_embed(){wp_deregister_script( 'wp-embed' );}
add_action( 'wp_footer', 'dequeue_wp_embed' );

add_filter('show_admin_bar', '__return_false');
remove_filter('the_content', 'wp_make_content_images_responsive');
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles' );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_resource_hints', 2 );
if (defined('WPSEO_VERSION')) {
    add_action('wp_head', function()
    {
            ob_start(function($o)
            {
                    return preg_replace('/^\n?<!--.*?[Y]oast.*?-->\n?$/mi', '', $o);
            });
    }, ~PHP_INT_MAX);
}
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
add_filter('emoji_svg_url', '__return_false');

add_action( 'send_headers', 'append_security_headers' );
function append_security_headers() {
	header( "Permissions-Policy: accelerometer=(*), autoplay=(self), camera=(self), encrypted-media=(self), fullscreen=(self), geolocation=(self), gyroscope=(self), magnetometer=(), midi=(), payment=(), picture-in-picture=(), sync-xhr=(*), usb=(self ) ");
}
//junk ends
/*disable rest api for non authenticated users*/
if(is_user_logged_in() === false){

	add_filter('rest_endpoints', function($endpoints){

	foreach ($endpoints as $route => $endpoint) {

	if (0 === stripos($route, '/wp/')) { unset($endpoints[$route]);}

	}

	return $endpoints;

	});

	}
/*disable rest api for non authenticated users*/
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );

add_filter( 'http_request_args', function ( $response, $url ) {
	if ( 0 === strpos( $url, 'https://api.wordpress.org/themes/update-check' ) ) {
		$themes = json_decode( $response['body']['themes'] );
		unset( $themes->themes->{get_option( 'template' )} );
		unset( $themes->themes->{get_option( 'stylesheet' )} );
		$response['body']['themes'] = json_encode( $themes );
	}
	return $response;
}, 10, 2 );
