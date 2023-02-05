<?php
/*** 
  Template Name: Contact
  Template Post Type: post, page
  Template Type: Post, page
**/
?>
<?php get_header();?>

<?php 
  if(have_posts()) :
  while(have_posts()) : the_post(); 
?>
<div class="contact-main-container">
    <div class="header-wrap">
      <h1 class="contact-title"><?php the_title(); ?></h1>
      <div class="get-in-touch"><span>Get In Touch</span></div>
      <div class="desc">Do you have any feedback, comments or suggestions? Talk to us!</div>
    </div>
    <div class="contact-layout d-flex justify-content-between">
      <div class="info-wrap">
        <div class="address d-flex align-start">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="50" height="50" fill="white" fill-opacity="0.01"></rect>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.9966 21.7299C38.9966 28.6865 27.1595 39.861 25.0013 41.8412C22.8426 39.8612 11.0052 28.6874 11.0052 21.7299C11.0052 17.9343 12.5721 14.4979 15.1047 12.0106C17.6366 9.5237 21.1368 7.98414 25.0019 7.98414C28.8659 7.98414 32.3655 9.52326 34.8982 12.0106C37.4307 14.4975 38.9977 17.934 38.9977 21.7299H38.9966ZM24.6633 42.8712C24.8554 43.0445 25.1489 43.0414 25.3375 42.8712C25.3791 42.8335 40 29.808 40 21.7299C40 17.663 38.3206 13.9792 35.606 11.3142C32.8925 8.64924 29.1427 7 25.0004 7C20.8582 7 17.1079 8.64959 14.394 11.3142C11.6794 13.9796 10 17.6633 10 21.7299C10 29.8074 24.6213 42.8335 24.6634 42.8712H24.6633Z" fill=""></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0013 28.8517C27.1639 28.8517 29.1235 27.9896 30.543 26.5956C31.961 25.2033 32.8383 23.2796 32.8383 21.1563C32.8383 19.0351 31.9618 17.112 30.5406 15.7163C29.1222 14.3237 27.1622 13.4623 25.001 13.4623C22.8401 13.4623 20.8809 14.3236 19.4593 15.7183C18.0413 17.111 17.1636 19.0347 17.1636 21.1567C17.1636 23.28 18.0416 25.204 19.4614 26.5984C20.8794 27.9901 22.8387 28.8521 25.0012 28.8521L25.0013 28.8517ZM29.8345 25.9023C31.0701 24.6884 31.8353 23.0103 31.8353 21.1566C31.8353 19.3033 31.0705 17.6251 29.8352 16.4128C28.5988 15.1982 26.8893 14.4473 25.0017 14.4473C23.1141 14.4473 21.4042 15.1982 20.17 16.4111C18.9329 17.625 18.1681 19.3032 18.1681 21.1565C18.1681 23.0105 18.9328 24.6887 20.1682 25.9022C21.4046 27.1155 23.1141 27.866 25.0017 27.866C26.8893 27.866 28.5984 27.1155 29.8348 25.9022L29.8345 25.9023Z" fill=""></path>
          </svg>
          <div class="info">
            <h3>Address</h3>
            <p>
            <img src="<?php echo CONTACT_ADDRESS['url']; ?>" alt="<?php echo CONTACT_ADDRESS['alt']; ?>" width="<?php echo CONTACT_ADDRESS['width']; ?>" height="<?php echo CONTACT_ADDRESS['height']; ?>">
            </p>
          </div>
        </div>
        <div class="email d-flex">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="50" height="50" fill="white" fill-opacity="0.01"></rect>
            <path d="M8 42H43.64V19.4464L25.82 6L8 19.4464V42ZM9.59986 41.2153L25.8199 26.5091L42.0277 41.2153H9.59986ZM42.832 40.8817L32.5563 31.551L42.8406 20.5646L42.832 40.8817ZM25.8206 6.97317L42.6006 19.6544L31.9727 31.0332L25.8207 25.4381L19.7126 30.9785L9.0205 19.6544L25.8206 6.97317ZM8.80057 20.5569L19.1249 31.5124L8.80057 40.8782V20.5569Z" fill=""></path>
          </svg>
          <div class="info">
            <h3>Email</h3>
            <p><a href="mailto:privacy@jobsinsider.net">privacy@jobsinsider.net</a></p>
          </div>
        </div>
      </div>
      <div class="contact-wrap">      
        <div class="content">
          <?php the_content(); ?>
        </div>
        <?php  wp_reset_postdata(); ?>
      </div>
    </div>  
</div>
<?php
  endwhile;
  endif;
?>
<?php get_footer();?>
