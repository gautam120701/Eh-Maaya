<?php
/*** 
  Template Name: Story
  Template Post Type: post, page
  Template Type: Post, page
**/

include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'story-c', THEME_DIR . '/assets/css/story/story.css' );
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
  <style>
   .sec1-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/story_pic1.png'); }
   .sec2-img{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/story_pic2.png'); }
   .sec5-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/story_pic3.png'); }
   .sec6-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/story_pic4.png'); }
  </style>
           <!-- section1 -->
           <div class="section1">
            <div class="container" id="sec1-container">
              <div class="inner-wrap" id="sec1-inner-wrap">
                <div class="sec1-left-wrap">
                  <h1 class="title" id="sec1-title">
                    Welcome to <br />
                    Eh-Maaya !
                  </h1>
                  <p class="para" id="sec1-para">
                    Why should hair care be so complicated and time-consuming
                    when we have so much on our to-do lists? So, When you get that time
                    off, The  last thing you want to worry about is unmanageable hair,
                    correct?
                  </p>
                </div>
                <div class="sec1-right-wrap">
                </div>
              </div>
            </div>
          </div>
          <!-- section2 -->
          <div class="section2">
            <div class="container" id="sec2-container">
              <div class="inner-wrap" id="sec2-inner-wrap">
                <div class="sec2-heading">
                  <h1 class="title" id="sec2-title">Who we are..?</h1>
                  <p class="para" id="sec2-para">We are trailblazers and changemakers. What do we mean by that? <br> <br> We aim to shift the compass when it comes to hair care. Simple yet effective, non-complicated, and non-time consuming. We managed a crucial balance  between mild ingredients and plant-based powerhouse actives specific to your hair’s texture. <br> <br> Our mission is to help you achieve your hair goals. Whether Straight, Wavy, or Curly, we Nourish You Individuality!</p>
                </div>
                <div class="sec2-img">  </div>
              </div>
            </div>
          </div>
          <!-- section3 -->
          <div class="section3">
            <div class="container" id="sec3-container">
                <div class="inner-wrap" id="sec3-inner-wrap">
                    <h1 class="title" id="sec3-title">
                        Our Promises Come True.
                    </h1>
                    <p class="para" id="sec3-para">
                        Our focus is to understand your natural hair texture in the context of your modern-day lifestyle and hair care goals. Our squeaky clean, well- balanced formulations will ensure you achieve both confidently.
                    </p>
                </div>
            </div>
          </div>
          <!-- section4 -->
          <div class="section4">
            <div class="container" id="sec4-container">
                <div class="inner-wrap" id="sec4-inner-wrap">
                    <h1 class="title" id="sec4-title">The Eh-Maaya Story</h1>
                    <p class="para" id="sec4-para">It all started when Dr.Shweta got tired of running to the parlor before every social event. “I have curly hair but kept straightening it.  I started fifteen years ago, and it was starting to become frizzy and looked lifeless”. I have a busy routine, and managing my hair was starting to  become a big part of it. After trying all the latest treatments on the market and getting no results, she began to wonder. “How do you change  the hair care game?” And Eh-Maaya was born.</p>
                    <div class="sec4-video">video</div>
                </div>
            </div>
          </div>
          <!-- section5 -->
          <div class="section5">
            <div class="container" id="sec5-container">
                <div class="inner-wrap" id="sec5-inner-wrap">
                    <div class="sec5-left-wrap">
                        <h1 class="title" id="sec5-title">The Secrete Sauce !</h1>
                        <p class="para" id="sec5-para">
                            “We have been through some serious thick <br> and thin, burned the midnight oil, and spent <br> countless hours on Zoom/G Meet to get  <br>
                            <a href="#" class="anchor">Eh-Maaya</a> to this stage.” 
                        </p>
                        <button class="btn" id="sec5-btn"><a href="#">See Ingredients</a></button>
                    </div>
                    <div class="sec5-right-wrap">
                    </div>
                </div>
            </div>
          </div>
          <!-- section6 -->
       <div class="section6">
        <div class="container" id="sec6-container">
            <div class="inner-wrap" id="sec6-inner-wrap">
                <div class="sec6-left-wrap">
                    <h1 class="title" id="sec6-title">And that’s how <br> Eh-Maaya was Born.</h1>
                    <p class="para" id="sec6-para">
                        Get a Ritual bundle worth <s>Rs 3470</s> only for Rs 1599!
                    </p>
                    <button class="btn" id="sec6-btn">Contact Us</button>
                </div>
                <div class="sec6-right-wrap">
                </div>
            </div>
        </div>
       </div>
      </div>
    </div>
   
        <?php  wp_reset_postdata(); ?>
    <?php
    endwhile;
    endif;
    ?>

<?php get_footer(); ?>
oiuyg
