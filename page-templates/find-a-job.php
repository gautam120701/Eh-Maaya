<?php
/*** 
  Template Name: Find A Job
  Template Post Type: post, page
  Template Type: Post, page
**/

get_header();
?>

<div class="home-container">
    <div class="wrapper">
        <div class="inner-wrapper d-flex justify-content-between">
            <div class="left-wrap">
                <h2 class="heading"><?php echo HOME_FORM_HEADING; ?></h2>
                <div class="form-wrap">
                    <form id="searchJobsFrom">
                        <div class="form-wrap">
                            <div class="form-control">
                                <input type="text" name="job" id="job" class="input-field" placeholder="Example: 'Work from Home'">
                            </div>
                            <div class="form-control">
                                <input type="number" name="zip" id="zip" class="input-field" placeholder="Zip Code">
                            </div>
                            <span class="error"></span>
                            <button type="submit" class="search-btn">Search Jobs</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="right-wrap">
                <div class="img-wrap">
                    <img src="<?php echo HOME_BANNER['url']; ?>" alt="<?php echo HOME_BANNER['alt']; ?>" width="<?php echo HOME_BANNER['width']; ?>" height="<?php echo HOME_BANNER['height']; ?>">
                </div>
            </div>
        </div>
        <p class="disclosure-txt"><?php echo DISCLOSURE; ?></p>
    </div>
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
                window.location.replace('<?php echo CTA_ACTION_URL; ?>');
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