<?php
/*** 
  Template Name: Unsubscribe
  Template Post Type: post, page
  Template Type: Post, page
**/
?>
<?php get_header();?>

<?php 
  if(have_posts()) :
  while(have_posts()) : the_post(); 
?>
<div class="unsubscribe-main-container">
    <div class="unsubscribe-layout d-flex justify-content-between">
      <div class="banner">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/unsubscribe.png" alt="Unsubscribe">
      </div>
      <div class="unsubscribe-wrap">
        <div class="unsubscribe-content-wrap">
          <div class="content">
                <?php the_content(); ?>
              </div>
              <?php  wp_reset_postdata(); ?>
        </div>
      </div>
    </div>  
</div>
<?php
  endwhile;
  endif;
?>
<?php get_footer();?>
