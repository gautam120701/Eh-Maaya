<?php
/*** 
  Template Name: Article
  Template Post Type: post, page
  Template Type: Post, page
**/

include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'article-c', THEME_DIR . '/assets/dist/css/article/article-critical.css' );
}); 

  get_header();
?>
<?php
$content = get_the_ID();
$__duplicate[] = $content; 
?>
<?php 
  if(have_posts()) :
  while(have_posts()) : the_post(); 
?>
<div class="article-main-container">
  <div class="article-layout">
    <div class="article-content-wrap">
        <div class="content-container">
          <div class="row d-flex justify-content-between">

            <div class="content">
            <h1 class="article-title"><?php the_title(); ?></h1>
            <div class="article-img">
              <div class="img-wrap">
                <?php the_post_thumbnail("article-1"); ?>
              </div>
            </div> 
              <?php the_content(); ?>

            <ul class="pagination d-flex flex-wrap justify-content-between">
              <?php
              $prev_post = get_previous_post($taxonomy = 'category'); 
              $next_post = get_next_post($taxonomy = 'category'); ?>
              <?php if ( ! empty( $prev_post ) ): ?>
              <li class="previous">
              <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                <div class="pagination-layout">
                  <div class="title">Previous Article</div>
                  <div class="link"><?php echo apply_filters( 'the_title', $prev_post->post_title ); ?></div>
                </div>
              </a>
              </li>
              <?php endif;
              ?>
              <?php if ( ! empty( $next_post ) ): ?>
              <li class="next">
                <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                  <div class="pagination-layout">
                    <div class="title">Next Article</div>
                    <div class="link"><?php echo apply_filters( 'the_title', $next_post->post_title ); ?></div>
                  </div>
                </a>
              </li>
              <?php endif;
              ?>
            </ul>
            </div>
            <div class="category-list">
              <div class="sidebar-main-title">
                <h2 class="main-title">Recommended Articles</h2>
              </div>
              <?php get_template_part( 'template-parts/common', 'sidebar' ); ?>
            </div>
          </div>
        </div>
        
    </div>

    <?php  wp_reset_postdata(); ?>
    <?php
    endwhile;
    endif;
    ?>

</div>




</div>


<div class="disclosure-wrap"><p class="disclosure-txt">jobsinsider.net is a job search engine. This website and its contents are not endorsed, sponsored by or affiliated with any listed employers. We are not an agent or representative of any employer. All trademarks, service marks, logos, and/or domain names are the property of their respective owners. Hourly and salary compensation estimates are based upon publicly available salary report(s) provided by employees or estimated based upon statistical methods. To gain access to the job listings, you must agree to our Terms &amp; Conditions and Privacy Policy, provide certain personally identifiable information and consent to our sharing such information with our marketing partners for which we may be compensated.</p></div>

<?php get_footer(); ?>
