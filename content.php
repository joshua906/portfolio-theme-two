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
		   <?php the_post_thumbnail('large'); ?>
		  
		  <div class="standard-meta">
		    <?php hedmark_category() ?>
		  </div>	
	
          <h3 class="standard-post-title">
		  <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
		  </h3>
		         
		  <div class="raj-standard-divider"></div>		  
		  <div class="kt-standard-excerpt">
			  <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
		  </div>
		  
		  <div class="caption">
		  
		  <a href="<?php esc_url(the_permalink()); ?>"><button><?php esc_html_e( 'Learn More', 'hedmark' ); ?></button></a>
		 
		  </div>
		  
		  <div class="share-date-author">
		  <div class="standard-share">
		  <!--<?php get_template_part ( 'inc/social', 'share' );  ?>-->
          </div>
  
		</div>
		<!-- end of share-date-author -->
    </div>
    <!-- end of standard-post-inner -->
</article>
<!-- end of a blog post -->
<!--
<a href="<?php echo get_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
<div class="thumbnail-img"><?php the_post_thumbnail('large'); ?></div>
<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>

<p><?php the_content(); ?></p>
-->