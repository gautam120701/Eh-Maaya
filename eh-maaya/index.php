<?php 

include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'home-c', THEME_DIR . '/assets/dist/css/home/home-critical.css' );
 EnqueueAssetsInline::js( 'lozad', THEME_DIR . '/assets/js/lozad.js', false, true );

}); 

get_header(); 
global $__duplicate;
?>

<div class="main-section">
    <section class="section-1 banner lozad">
        <div class="container">
           <div class="upper-wrap d-flex">
            <div class="left-wrap">
                <h1 class="main-title">Discover the <br><span>right job</span> match for you.</h1>
                <div class="form-wrap">
                    <form id="searchJobsFrom">
                        <div class="form-inner-wrap">
                                <div class="form-controlwrap d-flex">
                                    <div class="form-control control1">
                                    <input type="text" name="job" id="job" class="input-field" placeholder="Example: ‘Work from home'">
                                    </div>
                                    <div class="form-control control2">
                                    <input type="number" name="zip" id="zip" class="input-field" placeholder="Zip Code">
                                    </div>
                                    <span class="error"></span>
                                </div>
                                <button type="submit" class="search-btn">SEARCH JOBS 
                                <svg width="29" height="24" viewBox="0 0 29 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="arrow right 4" fill-rule="evenodd" clip-rule="evenodd" d="M1.58486 9.74396H20.9903L14.89 3.65228C14.5912 3.35487 14.4274 2.95199 14.4274 2.52913C14.4274 2.10628 14.5912 1.70621 14.89 1.4081L15.8392 0.46185C16.1377 0.164443 16.5354 0 16.9596 0C17.384 0 17.7819 0.163268 18.0804 0.460676L28.5376 10.8791C28.8373 11.1777 29.0012 11.5754 29 11.9985C29.0012 12.4239 28.8373 12.8219 28.5376 13.12L18.0804 23.5393C17.7819 23.8365 17.3842 24 16.9596 24C16.5354 24 16.1377 23.8363 15.8392 23.5393L14.89 22.5931C14.5912 22.2961 14.4274 21.8996 14.4274 21.4767C14.4274 21.0541 14.5912 20.6785 14.89 20.3813L21.0592 14.2556H1.60844C0.734428 14.2556 0 13.505 0 12.6346V11.2963C0 10.4259 0.756119 9.73409 1.63013 9.73409" fill="white"/>
                                </svg>
                                <div class="arrow-mob"></div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="right-wrap">
                <div class="image-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-img.png" alt="" width="524" height="484"> 
                </div>
            </div>
           </div>
           <div class="bottom-wrap">
                    <div class="category-sidebar">
                        <div class="sidebar-main-title">
                        <h2 class="heading-title">Popular now</h2>
                        </div>
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
                                    <h3 class="title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </div>
                        </div>
                    </li>
                    <?php endwhile; endif; wp_reset_query();?>
                    </ul>
                    </div>
        </div>
    </section>
    <section class="section-2">
            <div class="container">
             <div class="article">
                <h2 class="heading-title">Newest Articles</h2>
                <ul class="list-wrap d-flex">
                 <?php
                    $query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'category',
                            'field'     => 'slug',
                            'terms'     => 'uncategorized',
                            'operator'  => 'NOT IN'
                        )
                    )));
                    if ($query->have_posts()) : 
                    while ($query->have_posts()) : $query->the_post();
                    $content = get_the_ID();
                    $__duplicate[] = $content; 
                    ?>
                <li>
                    <a href="<?php the_permalink(); ?>" class="list-anchor">
                    <div class="img-wrap">
                            <figure class="desktop-banner">	
                                <img class="lozad" data-src="<?php the_post_thumbnail_url("banner"); ?>" alt="" width="1024" height="450">
                            </figure>
                        </div>
                        <div class="post-content">
                            <h3 class="title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </li>
                <?php endwhile; endif; wp_reset_query();?>
            </ul>
            </div>
             </div>                   
    </section>
        <section class="section-3 article-listing">
            <div class="container"> 
            <div class="article">
            <h2 class="heading-title">Employment Resources</h2>
            <ul class="list-wrap">
                 <?php
                    $query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => '3',
                    'tax_query' => array(
                        array(
                            'taxonomy'  => 'category',
                            'field'     => 'slug',
                            'terms'     => 'uncategorized',
                            'operator'  => 'NOT IN'
                        )
                    )));
                    if ($query->have_posts()) : 
                    while ($query->have_posts()) : $query->the_post();
                    $content = get_the_ID();
                    $__duplicate[] = $content; 
                    ?>
                <li>
                    <a href="<?php the_permalink(); ?>" class="list-anchor">
                    <div class="img-wrap">
                            <figure class="desktop-banner">	
                                <img class="lozad" data-src="<?php the_post_thumbnail_url("banner"); ?>" alt="" width="1024" height="450">
                            </figure>
                        </div>
                        <div class="post-content">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <p class="desc"><?php echo wp_trim_words( get_the_content(), 25, '...' ) ?> </p>
                            <div class="cta">
                            <div class="cta-text">Read more</div>
                            <div class="cta-icon">
                            <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="arrow right 4" fill-rule="evenodd" clip-rule="evenodd" d="M1.2144 7.33052H16.0845L11.4099 2.74767C11.181 2.52392 11.0554 2.22082 11.0554 1.90271C11.0554 1.58459 11.181 1.28361 11.4099 1.05934L12.1373 0.347457C12.366 0.123713 12.6708 0 12.9958 0C13.321 0 13.626 0.122829 13.8547 0.346573L21.8679 8.1845C22.0975 8.40912 22.2231 8.70833 22.2222 9.02663C22.2231 9.34669 22.0975 9.64608 21.8679 9.87035L13.8547 17.709C13.626 17.9326 13.3212 18.0556 12.9958 18.0556C12.6708 18.0556 12.366 17.9324 12.1373 17.709L11.4099 16.9971C11.181 16.7737 11.0554 16.4754 11.0554 16.1573C11.0554 15.8393 11.181 15.5567 11.4099 15.3332L16.1373 10.7247H1.23247C0.562727 10.7247 -5.34058e-05 10.16 -5.34058e-05 9.50522V8.49837C-5.34058e-05 7.84358 0.579348 7.3231 1.24909 7.3231" fill="white"/>
                            </svg>
                            </div>
                        </div>
                        </div>

                    </a>
                </li>
                <?php endwhile; endif; wp_reset_query();?>
            </ul>
            </div>
        </div>
    </section>
   
    <div class="disclosure-wrap"><p class="disclosure-txt">jobsinsider.net  is a job search engine. This website and its contents are not endorsed, sponsored by or affiliated with any listed employers. We are not an agent or representative of any employer. All trademarks, service marks, logos, and/or domain names are the property of their respective owners. Hourly and salary compensation estimates are based upon publicly available salary report(s) provided by employees or estimated based upon statistical methods. To gain access to the job listings, you must agree to our Terms & Conditions and Privacy Policy, provide certain personally identifiable information and consent to our sharing such information with our marketing partners for which we may be compensated.</p></div>
</div>

<?php
add_action( 'wp_footer', 'findajob_form_script');
function findajob_form_script(){
?>
  <script>
      window.onload = function() {
        var searchJobsFrom = document.getElementById("searchJobsFrom");
        searchJobsFrom.addEventListener("submit", function(evt) {
            evt.preventDefault();
            var query = document.getElementById("job").value.trim();
            var zip = document.getElementById("zip").value.trim();
            if(!query){
                document.querySelector(".error").innerHTML = "*All fields are required";
            }
            if(!isValidZip(zip) && query){
                document.querySelector(".error").innerHTML = "*Please a enter valid zip";
            }
            if(isValidZip(zip) && query){
                document.querySelector(".error").innerHTML = "";
                window.location.replace('https://signup.jobsinsider.net/listings?op=1&sid=57&p=JPZ&kw='+query+'&z='+zip+'');
            }
        });
    }
    function isValidZip(val) {
        return /^\d{5}(-\d{4})?$/.test(val);
    }
  </script>
  <?php
}


get_footer();

?>