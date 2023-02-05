<?php
/*** 
  Template Name: Ritual
  Template Post Type: post, page
  Template Type: Post, page
**/

include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'ritual-c', THEME_DIR . '/assets/css/ritual/ritual.css' );
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
     #sec1-img{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_pic1.png'); } 
     #sec2-img{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/ritual_product.png'); }
     #sishood{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/sishood.png'); }
    
  </style>
       <!-- section1 -->
       <div class="section1">
            <div class="container" id="sec1-container">
              <div class="inner-wrap" id="sec1-inner-wrap">
                <div class="sec1-left-wrap">
                  <h1 class="title" id="sec1-title">
                    Hair care <span> Ritual</span> <br />
                    that changed <br />
                    Dr. Shweta's life
                  </h1>
                  <p class="para" id="sec1-para">
                    <span>Dr. Shweta</span> is a practicing Radiologist, an
                    entrepreneur, a homemaker, a loving 
                    mother of two daughters, and our founder. <br><br>
                    She experimented on her hair for 15 years with treatments  and products, but she was still unhappy with her hair. The results were short-lived and harmed hair quality. Her hair was her uniqueness, her personality, and she wanted it back the way it was.
                  </p>
                </div>
                <div class="sec1-right-wrap">
                  <div class="img-wrap" id="sec1-img">
                    <!-- <img src="images/ritual/sec1.png" alt="" /> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- section2 -->
          <div class="section2">
            <div class="container" id="sec2-container">
              <div class="inner-wrap" id="sec2-inner-wrap">
                <div class="sec2-left-wrap">
                  <h1 class="title" id="sec2-head1">The Eh-Maaya Ritual</h1>
                  <h2 class="para" id="sec2-head2">Step 1</h2>
                  <h1 class="para" id="sec2-head3">
                    Pre-wash <br />
                    Overnight
                  </h1>
                  <ul class="list">
                    <li>Vital complex</li>
                    <li>Nourishment and repair</li>
                    <li>Midnight Potion</li>
                    <p class="para">
                      A cutting-edge, super lightweight, non-sticky formula that
                      works
                    </p>
                    <li>Clear Clay</li>
                    <p class="para">
                      A brand-new way to nourish and repair your hair and scalp
                      health.
                    </p>
                  </ul>
                  <button class="btn" id="sec2-btn">Shop</button>
                  <h1 class="title" id="sec2-head4">The Eh-Maaya Ritual</h1>
                </div>
                <div class="sec2-right-wrap">
                  <div class="img-wrap" id="sec2-img">
                    <!-- <img src="images/ritual/Group 415.png" alt="" /> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- section3 -->
          <div class="section3">
            <div class="container" id="sec3-container">
              <div class="inner-wrap" id="sec3-inner-wrap">
                <h1 class="title" id="sec3-title">
                  Frequently asked questions
                </h1>
                <div class="faq">
                  <div class="text">
                    <h1>Can I use both the Midnight Potion and the Clear Clay?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>Is it safe for colored hair?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>How long till I see the results?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>How often in the week do I need to follow the Ritual?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>Natural and Botanical products don’t clean well as they foam less; is it true?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>What’s so special about the Eh-Maaya hair ritual?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>How does the Eh-Maaya hair routine work?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>What’s the benefit of the Eh-Maaya routine?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>What are the ingredients used in the Eh-Maaya Ritual Bundle?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
                <div class="faq">
                  <div class="text">
                    <h1>Does each hair type have a separate routine?</h1>
                  </div>
                  <div class="add">
                    <h1>+</h1>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
          <!-- section4 -->
          <div class="section4">
            <div class="container" id="sec4-container">
                <div class="inner-wrap" id="sec4-inner-wrap">
                    <div class="sec4-left-wrap">
                        <h1 class="title" id="sec4-title">Join the <br>  Sisterhood</h1>
                        <p class="para" id="sec4-para">Get tips, tricks, and a sneak peek into upcoming products!</p>
                        <input class="input" type="text" placeholder="Email or phone number"> <br>
                        <button class="btn" id="sec4-btn">Submit</button>
                    </div>
                    <div class="sec4-right-wrap">
                        <div class="img-wrap" id="sishood">
                            <!-- <img src="images/ritual/sisterhood'.png" alt=""> -->
                        </div>
                    </div>
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
