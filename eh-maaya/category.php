<?php

  
include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'category', THEME_DIR . '/assets/dist/css/category/category.css' );
}); 

  get_header();
  $category = get_queried_object();
  global $__duplicate;
?>

<div class="category-title">
		<h6><?php echo $category->name ?></h6>
	</div>
<div class="category-container">
    <div class="sidebar-main-title">
      <h2 class="main-title">All Articles</h2>
    </div>
    <div class="row">
      
    <div class="category-layout d-flex flex-wrap">
      <div class="category-left-wrap">
        <ul class="category-content">
            <?php
                $query = new WP_Query( array(
                'post_type' => 'post',
                'category_name' => $category->name,
                'posts_per_page' => '4',
                ));
                if ($query->have_posts()) : 
                while ($query->have_posts()) : $query->the_post();
                $content = get_the_ID();
                $__duplicate[] = $content; 
            ?>
            <?php get_template_part( 'template-parts/common', 'verticalarticle' ); ?>
            <?php endwhile; endif; wp_reset_query();?>
        </ul>
      </div>
    </div>
    </div>
</div>

<div class="disclosure-wrap"><p class="disclosure-txt">jobsinsider.net is a job search engine. This website and its contents are not endorsed, sponsored by or affiliated with any listed employers. We are not an agent or representative of any employer. All trademarks, service marks, logos, and/or domain names are the property of their respective owners. Hourly and salary compensation estimates are based upon publicly available salary report(s) provided by employees or estimated based upon statistical methods. To gain access to the job listings, you must agree to our Terms &amp; Conditions and Privacy Policy, provide certain personally identifiable information and consent to our sharing such information with our marketing partners for which we may be compensated.</p></div>


<?php get_footer(); ?>
