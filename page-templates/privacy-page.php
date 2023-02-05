<?php
/*** 
  Template Name: Privacy Policy
  Template Post Type: post, page
  Template Type: Post, page
**/
?>
<?php 

    include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
		add_action('wp_enqueue_scripts', function(){
		EnqueueAssetsInline::css( 'legal-pages', THEME_DIR . '/assets/dist/css/legal-pages.css' );

		}, 9);

get_header();?>

<?php 
  if(have_posts()) :
  while(have_posts()) : the_post(); 
?>
<div class="legal-pages-main-container">
  <div class="legal-pages-layout">
    <div class="legal-pages-content-wrap">
        <div class="bread-crumb"><?php get_breadcrumb(); ?></div>
        <h1 class="legal-pages-title"><?php the_title(); ?></h1>
        <div class="content">
          <?php the_content(); ?>
        </div>
        <?php  wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php
  endwhile;
  endif;
?>
<?php get_footer();?>
