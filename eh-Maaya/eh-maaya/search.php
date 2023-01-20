<?php
/**
 * Template Name: Search Page
 */
    get_header();
    $args = array(  
    'post_type' => 'post',
    's' => get_search_query(),
    );
    $newQuery = new WP_Query( $args );
    $total_results = $newQuery->found_posts;
    $count = 0;
    global $__duplicate;
?>
<div class="search-container">
    <div class="row">
    <div class="search-layout d-flex flex-wrap">
    <div class="search-left-wrap">
    <div class="search-title">
        <h6>Search results for: <?php the_search_query() ?></h6>
	</div>
    <ul class="search-content">
        <?php
            if($total_results > 0 && $count < 8){
            if(have_posts()) :
            while ($newQuery -> have_posts()) : $newQuery->the_post(); 
            $count++;
            $content = get_the_ID();
            $__duplicate[] = $content; 
            ?>
        <?php get_template_part( 'template-parts/common', 'verticalarticle' ); ?>
        <?php
        endwhile;
        endif; wp_reset_query();}else{?>
        <li class="search-not-found"><?php echo "Sorry! No result Found";}?></li>
    </ul>
    </div>
    <div class="search-right-wrap">
        <div class="search-sidebar">
        <div class="sidebar-main-title">
            <h4 class="main-title">Recent Posts</h4>
        </div>
        <?php get_template_part( 'template-parts/common', 'sidebar' ); ?>
        </div>
     </div>
    </div>
    </div>
    </div>
<?php get_footer(); ?>
