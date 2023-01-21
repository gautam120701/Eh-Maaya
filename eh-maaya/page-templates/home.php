<?php
/*** 
  Template Name: Home
  Template Post Type: post, page
  Template Type: Post, page
**/

include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
add_action('wp_enqueue_scripts', function(){
 EnqueueAssetsInline::css( 'article-c', THEME_DIR . '/assets/css/home/home.css' );
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
                <div class="left_wrap">
                    <h1 class="title">Hair care Ritual <br> that changed <br> Dr. Shweta's life</h1>
                    <button>Shop</button>
                </div>
                <div class="right_wrap">
                    <div class="img-wrap"></div>
                </div>
            </div>
            <div class="section2">
                <h1>Shop by Hair Type</h1>
                <p>Every Hair texture is uniquely gifted. This uniqueness presents its own challenges; we encourage you to embrace this Individuality and leave those challenges to us. We got your back, but first, <br> <span> let's identify your hair type. </span></p>
            </div>
            <div class="section3">
                <div class="img-wrap" id="img-1">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                </div>
                <div class="img-wrap" id="img-2">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                </div>
                <div class="img-wrap" id="img-3">
                    <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                </div>
            </div>
            <div class="section4">
                <div class="section4-up">
                  <h1  id="title">Shop By Best Sellers</h1>
                  <p>Everyone in the Eh-Maaya Sisterhood has their favorites. The "HOOD" has experienced these for their textures; they want to let you know, and here's how they want to connect with you. Check out the best sellers, experience</p>
                </div>
               <div class="section4-down">
                    <div class="card">
                        <div class="card-up">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80)" alt="">
                        </div>
                        <div class="card-down">
                            <div class="card-title">
                                <h1>Fluidique Conditioner</h1>
                                <div class="stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-line"></i>
                                <i class="ri-star-line"></i>
                            </div>
                            </div>
                            <h2>For Straight Hairs</h2>
                            <h3>500 ₹</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-up">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80)" alt="">
                        </div>
                        <div class="card-down">
                            <div class="card-title">
                                <h1>Fluidique Conditioner</h1>
                                <div class="stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-line"></i>
                                <i class="ri-star-line"></i>
                            </div>
                            </div>
                            <h2>For Straight Hairs</h2>
                            <h3>500 ₹</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-up">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80)" alt="">
                        </div>
                        <div class="card-down">
                            <div class="card-title">
                                <h1>Fluidique Conditioner</h1>
                                <div class="stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-line"></i>
                                <i class="ri-star-line"></i>
                            </div>
                            </div>
                            <h2>For Straight Hairs</h2>
                            <h3>500 ₹</h3>
                        </div>
                    </div>
               </div>
              </div> 
            <div class="section5">
                <div class="left-wrap">
                    <h1 id="title">Our beauty philosophy</h1>
                   <p> The Sisterhood wants to help you embrace your natural texture, your Individuality, whatever it may be. Put away that straightening iron, postpone that parlor visit, and embrace the change. This is the era of minimum effort and maximum hair health (not to mention confidence..!). We believe in a long-term approach and a long-term bond with you.</p>
                    <button>Know more</button>
                </div>
                <div class="right-wrap"></div>
            </div>
            <div class="section6">
                <h1 id="title">Recommended reads</h1>
                <div class="sec6cards">
                    <div class="card">
                        <div class="card-up">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                        </div>
                        <div class="card-down">
                            <h1>Blog title</h1>
                            <p>The Sisterhood wants to help you embrace your <br> natural texture….</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-up">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                        </div>
                        <div class="card-down">
                            <h1>Blog title</h1>
                            <p>The Sisterhood wants to help you embrace your <br> natural texture….</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-up">
                            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                        </div>
                        <div class="card-down">
                            <h1>Blog title</h1>
                            <p>The Sisterhood wants to help you embrace your <br> natural texture….</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section7">
                <h1 id="title">She wants to know from her Sisterhood Experience</h1>
                <div class="images">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                    </div>
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
                    </div>
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" alt="">
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
           
           <?php
    endwhile;
    endif;
    ?>
<?php get_footer(); ?>