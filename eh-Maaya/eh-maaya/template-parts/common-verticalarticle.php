<li>
    <div class="inner-content d-flex align-center">
    <div class="left-section">
        <a class="img-wrap" href="<?php the_permalink(); ?>">
            <figure>	
                <?php the_post_thumbnail("category-1"); ?>
            </figure>
        </a>
    </div>
    <div class="right-section">
        <a href="<?php the_permalink(); ?>">
            <div class="title-wrap">
                <h4 class="title"><?php the_title(); ?></h4>
            </div>
        </a>
        <div class="bottom-wrap">
            <?php
                $categories = get_the_category();
                if ($categories) {
                foreach ($categories as $category) {?>
                <?php
                break;
                } 
                }
                ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <div class="main-content">
                <?php echo wp_trim_words( get_the_content(), 47 ) ?> 
            </div>
        </a>
    </div>
    </div>
</li>
