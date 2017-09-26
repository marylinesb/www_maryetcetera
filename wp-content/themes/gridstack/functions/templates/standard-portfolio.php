<?php 
/**
 * This file displays a standard WordPress post.
 */

// If post is single.
if (is_single()) : 

   // Get set column width from functions.php
   global $tw_column_width;

  /**
   * Get post options
   */
  $subheadline  = get_post_meta($post->ID, 'ag_subheadline', true); // Subheadline
  $columns      = get_post_meta($post->ID, 'ag_fullwidth', true) == 'Full' ? 'sixteen' : $tw_column_width; // number of columns
  $postclass 	  = ($columns == 'sixteen') ? 'full-width-post' : 'three-fourths-post';
  ?>

  <!-- Post Classes -->
  <div <?php post_class($postclass); ?>>

    <!-- Post Title -->
    <div class="pagetitle">
      <div class="container">

        <!-- Title -->
          <div class="thirteen columns">
             <h1 class="title"><?php the_title(); ?></h1>
              <?php if ($subheadline && $subheadline != '') { ?>
                 <h2 class="subtitle">
                    <?php echo $subheadline; ?> 
                 </h2>
              <?php } ?>
          </div>
          <!-- End Title -->

          <!-- Controls -->
          <div class="three columns">
              <?php get_template_part('functions/templates/postcontrols'); ?>
          </div>
          <!-- End Controls -->

      </div>
    </div>
    <!-- End Post Title -->

      <!-- Post Container -->
      <div class="container">
         <div class="<?php echo $columns; ?> columns">

              <!-- Content -->
              <div class="singlecontent">
                  <?php the_content(); ?>
              </div> <div class="clear"></div>
              <!-- End Content --> 
              
          </div>  
      </div>
      <!-- End Post Container -->

</div>
<!-- End Post Classes -->

<?php 
else :
  // Otherwise display thumbnail  
  get_template_part('functions/templates/thumbnail-portfolio'); 
endif; ?>