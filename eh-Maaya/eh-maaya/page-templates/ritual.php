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
   <div class="section1">
                <div class="sec1-left">
                    <h1>
                        Hair care Ritual <br> that changed <br> Dr. Shweta's life
                    </h1>
                    <p>Dr. Shweta is a practicing Radiologist, an entrepreneur, a homemaker, a loving mother of two daughters, and our founder. She experimented on her hair for 15 years with treatments and products, but she was still unhappy with her hair. The results were short-lived and harmed hair quality. Her hair was her uniqueness, her personality, and she wanted it back the way it was. “It all changes, and now..!” she decided, so the quest began - curate something simple, minimal, effective, and clean that gave long-lasting results for each hair type. “Ritualize your joy and nourish your individuality,” as she fondly believes and inspires the sisterhood to follow.</p>
                </div>
                <div class="sec1-right">
                    <img class="img-wrap" src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                </div>
        </div>
        <div class="section2">
            <h1 id="title">
                Frequently asked questions
            </h1>
            <div class="sec2-down">
                <div class="faq" id="faq1">
                        <h1>Can I use both the Midnight Potion and the Clear Clay?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq2">
                       <h1>Is it safe for colored hair?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq3">
                       <h1>How long till I see the results?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq4">
                       <h1>How often in the week do I need to follow the Ritual?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq5">
                       <h1>Natural and Botanical products don’t clean well as they foam less; is it true?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq6">
                       <h1>What’s so special about the Eh-Maaya hair ritual?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq7">
                       <h1>How does the Eh-Maaya hair routine work?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq8">
                       <h1>What’s the benefit of the Eh-Maaya routine?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq9">
                       <h1>What are the ingredients used in the Eh-Maaya Ritual Bundle?</h1>
                        <i class="ri-add-line"></i>
                </div>
                <div class="faq" id="faq10">
                       <h1>Does each hair type have a separate routine?</h1>
                        <i class="ri-add-line"></i>
                </div>
            </div>
        </div>
        <div class="section8">
            <div class="left-wrap">
                <h1 id="title">Join the <br> sisterhood</h1>
                <p>Get special offers and tips !</p>.
                <input type="text" placeholder="Email or phone number"> <br>
                <button>Submit</button>
            </div>
            <div class="right-wrap">
                <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
            </div>
           </div>

<?php get_footer(); ?>
