<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hedmark
 */

?>
  <!-- a blog post -->
		  <article id="post-<?php the_ID(); ?>" <?php post_class("col-sm-12 kt-standard"); ?>>
		  <div class="standard-post-inner">	
		   
		  <a href="<?php the_permalink() ?>">
		  <?php
				if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'hedmark-medium-size' );
                   } elseif( hedmark_first_post_image() ) { 
					echo esc_url('<img src="' . hedmark_first_post_image() . '" class="wp-post-image" alt="' . get_the_title() . '" />');
				} ?>
		  </a>
		  
		  <div class="standard-meta">
		    <?php hedmark_category() ?>
		  </div>	
	
          <h2 class="standard-post-title">
		  <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
		  </h2>
		         
		  <div class="raj-standard-divider"></div>		  
		  <div class="kt-standard-excerpt">
		   <?php the_excerpt(); ?>
		  </div>
		  
		  <div class="caption">
		  
		  <a href="<?php esc_url(the_permalink()); ?>"><button><?php esc_html_e( 'Learn More', 'hedmark' ); ?></button></a>
		 
		  </div>
		  

		  
		  
		  
		</div>
		<!-- end of share-date-author -->
    </div>
    <!-- end of standard-post-inner -->
</article>
<!-- end of a blog post -->

