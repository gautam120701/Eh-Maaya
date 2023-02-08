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
     .sec1-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_pic1.png'); } 
     .sec2-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/ritual_product.png'); }
     .sec4-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/sishood.png'); }
    
  </style>
       <!-- section1 -->
       <div class="section1">
            <div class="container" id="sec1-container">
              <div class="inner-wrap" id="sec1-inner-wrap">
                <div class="sec1-left-wrap">
                  <h1 class="title" id="sec1-title">
                    Hair care <a class="anchor" href="#"> Ritual</a> <br />
                    that changed <br />
                    Dr. Shweta's life
                  </h1>
                  <p class="para" id="sec1-para">
                <a class="anchor" href="#">Dr. Shweta </a>is a practicing Radiologist, an
                    entrepreneur, a homemaker, a loving 
                    mother of two daughters, and our founder. <br><br>
                    She experimented on her hair for 15 years with treatments  and products, but she was still unhappy with her hair. The results were short-lived and harmed hair quality. Her hair was her uniqueness, her personality, and she wanted it back the way it was.
                  </p>
                  <p class="mobile_view_para">We went beyond making better products. We started from scratch, by reimagining what honest, holistic hair care could look like. And our ingredients are where all the magic begins! From identifying the most potent botanicals, herbs, and fruits to ensuring their efficacy in every product, read on to know Eh-Maaya’s Ingredients Story.</p>
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
                  <span>Can I use both the Midnight Potion and the Clear Clay?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>Is it safe for colored hair?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>How long till I see the results?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>How often in the week do I need to follow the Ritual?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>Natural and Botanical products don’t clean well as they foam less; is it true?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>What’s so special about the Eh-Maaya hair ritual?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>How does the Eh-Maaya hair routine work?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>What’s the benefit of the Eh-Maaya routine?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>What are the ingredients used in the Eh-Maaya Ritual Bundle?</span>
                  <span class="add">+</span>
                </div>
                <div class="faq">
                  <span>Does each hair type have a separate routine?</span>
                  <span class="add">+</span>
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
                        <input type="submit" class="btn" id="sec4-btn" value="Submit"></input>
                    </div>
                    <div class="sec4-right-wrap">
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
