<div class="sidebar">
<ul>
	<?php
    global $__duplicate;
		$query = new WP_Query( array(
		'post_type' => 'post',
		'orderby' => 'rand',
		'post__not_in' => $__duplicate,
        'posts_per_page' => '5',
        'tax_query' => array(
            array(
                'taxonomy'  => 'category',
                'field'     => 'slug',
                'terms'     => 'uncategorized',
                'operator'  => 'NOT IN'
            )
        )
		));
		if ($query->have_posts()) : 
		while ($query->have_posts()) : $query->the_post();
    ?>
<li>
    <div class="inner-content d-flex">
    <div class="right-content">
        <a href="<?php the_permalink(); ?>">
            <div class="title-wrap">
                <h4 class="title"><?php the_title(); ?></h4>
            </div>
        </a>
    </div>
    </div>
</li>
<?php endwhile; endif; wp_reset_query();?>
</ul>
</div>