<?php 
global $hedmark_option;

get_header(); ?>
   <div class="featured-top-blog">
        
        
         <?php the_post_thumbnail(); ?>
              <div class="content-blog">
               	<div class="container-post">
               		<div class="row">
               			<div class="col-md-12 text-center">
               	
               		<h1><?php esc_html(the_title()); ?></h1>
               		
               			</div>
               		</div>        
			   	</div>
			   </div>
                
	</div>

<!-- article-->
	<div class="">
		<div class="container-post">
		<div class="col-md-12">
          
		  <div class="row">
		  
		<?Php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	       <article id="post-<?php the_ID(); ?>" <?php post_class("col-sm-12 kt-standard"); ?>>
		      <div class="standard-post-inner">	

		<?php
                    if ( ! get_post_format() ): // Standard
                        get_template_part( 'kt-formats/format', 'standard' );
                    elseif ( 'gallery' == get_post_format() ): // Gallery
                        get_template_part( 'kt-formats/format', 'gallery' );
                    elseif ( 'video' == get_post_format() ): // Video
                        get_template_part( 'kt-formats/format', 'video' );
                    elseif ( 'audio' == get_post_format() ): // Audio
                        get_template_part( 'kt-formats/format', 'audio' );
                    endif;
		?>
		
		<?php endwhile; endif; ?>
		
		<div class="single-articles">
			
          <!--<h3 class="single-post-title"><?php esc_html(the_title()); ?></h3>-->
		  <div class="single-article-meta">
			<!--<span class="author"><?php esc_html_e( 'by', 'hedmark' ); ?>
			<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>" rel="author">
			<?php the_author_meta( 'display_name' ); ?>
			</a>
			</span>-->
		  </div>   
		  
		  <div class="kt-single-content">
		     
			  <p><?php esc_html(the_content()); ?></p>
		   
		  </div>
		  
		  <?php get_template_part ( 'inc/single', 'share' );  ?>    
		  <!-- end of single share -->

		    </div> <!-- end of single article style -->
			<?php wp_link_pages(); ?>
		  </div>
		  <!-- end of standard-post-inner -->
		  <div class="row">
		  <div class="col-md-6 col-xs-12">
		  
		   <div id="prev-next">
			<div class="prev-link">&#8592; Previous Post<br>
				<?php previous_post_link('%link', '%title'); ?>
			</div>
			  </div>
			    </div>
			    
			<div class="col-md-6 col-xs-12 text-right">
			<div class="next-link">Next Post &rarr;<br>
				<?php next_post_link('%link', '%title'); ?>
			</div>
			</div>
			 </div>
			<br>
		   <div class="spacing"></div>
			
			  
		  
		   <hr>
			<?php 
			 //  Author Box
            if( $hedmark_option['author_box'] == true ) {
				 get_template_part( 'inc/kt-author', 'box' );
			   }
             ?>
			
			<?php 
		
		    //  Related Articles
		       if( $hedmark_option['related_posts'] == true ) {
                   get_template_part( 'inc/kt-related', 'articles' );
              }
			?>
		 
        <?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
          </article>
		  <!-- end of a blog post -->
	
      </div> <!-- end of row -->
    </div>  <!-- end of main page content's container -->
</div>
</div>
<?php get_footer(); ?>