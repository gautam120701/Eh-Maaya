<?php
/*** 
  Template Name: Story
  Template Post Type: post, page
  Template Type: Post, page
**/

include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'article-c', THEME_DIR . '/assets/css/story/story.css' );
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
 <div class="section1">
            <div class="sec1-left">
                <h1>Welcome to <br> Eh-Maaya !</h1>
                <p>Your hair texture is your individually: we aim to Nourish ir in the most <br> uncomplicated way and empower you to focus on what you do best... </p>
            </div>
            <div class="sec1-right">
                <img class="img-wrap" src="https://images.unsplash.com/photo-1536010305525-f7aa0834e2c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="">
            </div>
        </div>
        <div class="section2">
          <h1>Who We Are..?</h1>
          <p>We are traiblazers and changemakers in the field of <span>Chemistry.</span> What do we mean by that? 
          <br> <br>
          We are trailblazers and changemakers in the field of Chemistry. What do we mean by that? We shift the compass when it comes to hair care. We want to ask the all-important, future-forward question: WHY the chemistry or ingredients? And if we don’t like the answer, or the chemistry doesn’t benefit you, then we simply replace it with something that does. That’s how we’re changing the way hair care is done. What can we start doing today instead of waiting for tomorrow?
          </p> <br>
          <img class="img-wrap" src="https://images.unsplash.com/photo-1536010305525-f7aa0834e2c7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="">
        </div>
        </div>
        <div class="section3">
          <h1>Our Promises Come True.</h1>
          <p>Our focus is understanding the context of your modern lifestyle and not just getting your hair to survive the challenges but embracing it and thriving. Plus, it also helps that our formulations are squeaky clean - no alcohol, phthalates, or sulfates. Instead, they are made with premium ingredients and designed to work separately with your unique hair type. We recognize that different textures need different approaches.</p>
        </div>
        <div class="section4">
          <h1>The Eh-Maaya Story</h1>
          <p>It all started when Dr.Shweta got tired of running to the parlor before every social event. “I have curly hair but kept straightening it. I started fifteen years ago, and it was starting to become frizzy and looked lifeless”. I have a busy routine, and managing my hair was starting to become a big part of it. After trying all the latest treatments on the market and getting no results, she began to wonder. “How do you change the hair care game?” And Eh-Maaya was born.</p>
          <div class="section4cards">
            <div class="card">
              <h1>How it all began..</h1>
              <p>“My hair was frizzy and looked lifeless,” says Dr. Shweta, founder of Eh-Maaya, radiologist, and a mother of two. For about 15 years, she’d tried all the latest hair solutions/products. “Keratin, rebonding, cystine, hair botox, you mention them; I’ve done them.”</p> 
              <!-- <img src="" alt=""> -->
            </div>
            <div class="card">
              <h1>Did things change?</h1>
              <p>“It was the same results, over and over, no matter what I tried. Which is when I started to wonder. How do you change the hair-care game?”</p>
            </div>
            <div class="card">
              <h1>The Light bulb moment</h1>
              <p>Ok..! Game On..! The idea was to curate products for an easy-going hair-care pattern that genuinely produced results. A ritual that took little time and wasn’t too much work. Something that lets you wear your hair up, down, wet, dry, curly, wavy, or anything in between.</p>
            </div>
          </div>
        </div>
        <div class="section5">
          <div class="sec5-left">
            <h1>The secrete sauce !</h1>
            <p>“We have been through some serious thick and thin, burned the midnight oil, and spent countless hours on Zoom/G Meet to get Eh-Maaya to this stage.” Dr.Shweta started experiments at home (“We have burnt so many of our vessels!”) before our team of scientists came in. More than 289 reiterations later, they arrived at the perfect hair-care range, a ritual that surpassed the benchmarks they had set for themselves.</p>
            <button>See Ingredients</button>
          </div>
          <div class="sec5-right"></div>
        </div>
        <div class="section6">
          <p>“Our conditioners aren’t thick. Do you know why? We discovered that most conditioners use viscosity modifiers, which don’t have any benefit to the consumer. All it does is weigh the hair down. Our conditioner on the other hand? Its runny and watery serum-like.” We challenged the status quo, we asked WHY? And if the answer didn’t benefit the consumer, we threw it out and put in nourishing ingredients. We experimented, re-designed, continually modified, and finally curated products that work on all types of straight, wavy, and curly hair. We recognize that different textures need a different approach, and we formulated our products to keep our promise to you: Fuss-free hair care for ALL hair types.</p>
        </div>
        <div class="section7">
          <div class="sec7-left">
            <h1>And that’s how <br> Eh-Maaya was born.</h1>
            <p>Register for a sample worth Rs 499 absolutely free, just help us with the nominal shipping charges.</p>
            <button>Register now</button>
          </div>
          <div class="sec7-right">
            <img src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
          </div>
        </div

        <?php
    endwhile;
    endif;
    ?>
<?php get_footer(); ?>
