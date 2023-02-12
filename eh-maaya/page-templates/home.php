  <?php
  /*** 
    Template Name: Home
    Template Post Type: post, page
    Template Type: Post, page
  **/

  include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
  add_action('wp_enqueue_scripts', function(){
  // EnqueueAssetsInline::css( 'home-c', THEME_DIR . '/assets/css/home/home-criticial.css' ); 
    EnqueueAssetsInline::css( 'home', THEME_DIR . '/assets/css/home/home.css' );
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
      #sec2-card1{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/Straight.png'); }
      #sec2-card2{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/Wavy.png'); } 
      #sec2-card3{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/Curly.png'); } 
      .product1-img{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_product1.png'); } 
      .product2-img{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_product2.png'); } 
      .product3-img{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_product3.png'); } 
      .sec4-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_beauty_philosphy.png'); }
      #sec5-c1{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_rc1.png'); }
      #sec5-c2{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_rc2.png'); }
      #sec5-c3{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_rc3.png'); }
      #sec6-c1{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_hear_it.png'); }
      #sec6-c2{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_hear_it.png'); }
      #sec6-c3{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/hp_hear_it.png'); }
      .sec7-right-wrap{ background-image: url('<?php echo THEME_ROOT ?>/assets/images/sishood.png'); }

      a{color: inherit;}
    </style>
        
          <!-- section 1 -->
          <div class="section1">
            <div class="container">
              <div class="sec1-inner-wrap">
                <div class="sec1-left-wrap">
                  <h1 class="title" id="sec1-title">
                    The Hair care 
                    <a href="#" class="anchor">Ritual</a> 
                    that changed <br>
                    Dr. Shweta's life
                  </h1>
                  <button class="btn" id="sec1-btn"><a href="#">Shop</a></button>
                </div>
                <div class="sec1-right-wrap img-wrap">
                </div>
              </div>
            </div>
          </div>
          <!-- section2 -->
          <div class="section2">
            <div class="container" id="sec2-container">
              <div class="inner-wrap">
                <div class="sec2-heading">
                  <h1 class="title" id="sec2-title">Shop by Hair Type</h1>
                  <p class="description" id="sec2-des">
                    Every Hair texture is uniquely gifted. This uniqueness
                    presents its own challenges; we encourage you to embrace this
                    Individuality and leave those challenges to us. We got your
                    back, but first, <br>
                    <a href="#" class="anchor"> let's identify your hair type.</a> 
                  </p>
                </div>
                <div class="sec2-cards">
                  <div class="inner-wrap">
                    <div class="sec2-card img-wrap" id="sec2-card1"></div>
                    <div class="sec2-card img-wrap" id="sec2-card2"> </div>
                    <div class="sec2-card img-wrap" id="sec2-card3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- section3 -->
          <div class="section3">
            <div class="">
              <div class="sec3-heading">
                <h1 class="title" id="sec3-title">Shop by Best Sellers</h1>
                <p class="description" id="sec3-des">
                  Everyone has favorites; the Sisterhood has theirs too. They want
                  to help you make the right choices based on what they found best
                  for their hair texture. So experience our best sellers and
                  create your very own <a href="#" class="anchor">Ritual.</a>
                </p>
              </div>
              <div class="products-card">
                <div class="inner-wrap">
                  <div class="product">
                    <div class="product-up">
                      <div class="product1-img"></div>
                    </div>
                  <div class="product-down">
                       <div class="line1">
                                        <h1>Fluidique Conditioner</h1>
                                        <div class="rating">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                        </div>
                                    </div>
                                    <h2>For Straight Hairs</h2>
                                    <h3>500 ₹</h3>
                                    <div class="buttons">
                                        <button id="btn1"><a href="#">Buy now</a></button>
                                        <button id="btn2"><a href="#">Add to cart</a></button>
                                    </div>
                  </div>
                  </div>
                  <div class="product">
                    <div class="product-up">
                      <div class="product2-img"></div>
                    </div>
                    <div class="product-down">
                      <div class="line1">
                                        <h1>Fluidique Conditioner</h1>
                                        <div class="rating">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                        </div>
                                    </div>
                                    <h2>For Straight Hairs</h2>
                                    <h3>500 ₹</h3>
                                    <div class="buttons">
                                        <button id="btn1"><a href="#">Buy now</a></button>
                                        <button id="btn2"><a href="#">Add to cart</a></button>
                                    </div>
                    </div>
                  </div>
                  <div class="product">
                    <div class="product-up">
                      <div class="product3-img"></div>
                    </div>
                    <div class="product-down">
                       <div class="line1">
                                        <h1>Fluidique Conditioner</h1>
                                        <div class="rating">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-line"></i>
                                        </div>
                                    </div>
                                    <h2>For Straight Hairs</h2>
                                    <h3>500 ₹</h3>
                                    <div class="buttons">
                                        <button id="btn1"><a href="#">Buy now</a></button>
                                        <button id="btn2"><a href="#">Add to cart</a></button>
                                    </div>
                  </div>
                  </div>
                  <div class="product mob-only">
                    <div class="product-up">
                      <div class="product3-img"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- section4 -->
          <div class="section4">
            <div class="">
              <div class="inner-wrap" id="sec4-inner-wrap">
                <div class="left-wrap" id="sec4-left-wrap">
                  <h1 class="title" id="sec4-title">Our Beauty Philosophy</h1>
                  <p class="description" id="sec4-des">
                    Your natural hair texture is your individuality; embrace it.
                    So put  away that straightening iron, postpone that parlor
                    visit, and embrace the change. Explore how we go the distance
                    to ensure it happens.
                  </p>
                  <button class="btn" id="sec4-btn">
                    <a href="#">Know More</a>
                  </button>
                </div>
                <div class="sec4-right-wrap">
                  
                </div>
              </div>
            </div>
          </div>
          <!-- section5 -->

          <!-- <div class="section5">
            <div class="container">
              <div class="inner-wrap" id="sec5-innerwrap">
                <h1 class="title" id="sec5-title">Recommended reads</h1>
                <div class="sec5-cards">
                  <div class="card">
                    <div class="card-up">
                      <div class="img-wrap" id="sec5-c1"></div>
                    </div>
                    <div class="card-down">
                      <h1 class="card-title">Blog title</h1>
                      <p class="para" id="card-para">
                        The Sisterhood wants to help you embrace your <br> natural
                        texture….
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-up">
                      <div class="img-wrap" id="sec5-c2">
                      </div>
                    </div>
                    <div class="card-down">
                      <h1 class="card-title">Blog title</h1>
                      <p class="para" id="card-para">
                        The Sisterhood wants to help you embrace your <br> natural texture….
                      </p>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-up">
                      <div class="img-wrap" id="sec5-c3">
                      </div>
                    </div>
                    <div class="card-down">
                      <h1 class="card-title">Blog title</h1>
                      <p class="para" id="card-para">
                        The Sisterhood wants to help you embrace your <br> natural
                        texture….
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          
          <!-- section6 -->
          <!-- <div class="section6">
            <div class="" id="sec6-container">
              <div class="inner-wrap">
                <h1 class="title" id="sec6-title">Hear it from the Sisterhood</h1>
                <div class="cards-wrap">
                  <div class="card">
                   <div class="card-up">
                    <div class="img-wrap" id="sec6-c1"></div>
                   </div>
                  </div>
                  <div class="card">
                    <div class="img-wrap" id="sec6-c2"></div>
                  </div>
                  <div class="card">
                    <div class="img-wrap" id="sec6-c3"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          
          <!-- section7 -->
          <!-- <div class="section7">
            <div class="" id="sec7-container">
              <div class="inner-wrap" id="sec7-inner-wrap">
                <div class="sec7-left-wrap">
                  <h1 class="title" id="sec7-title">Join the Sisterhood</h1>
                  <p class="para" id="sec7-para"> Get tips, tricks, and a sneak peek into upcoming products!</p>
                  <input class="input" type="text" placeholder="Enter your Email"/>
                  <br />
                  <button class="btn" id="sec4-btn">Submit</button>
                </div>
                <div class="sec7-right-wrap"></div>
              </div>
            </div>
          </div> -->
    
          <?php  wp_reset_postdata(); ?>
      <?php
      endwhile;
      endif;
      ?>

  <?php get_footer(); ?>
