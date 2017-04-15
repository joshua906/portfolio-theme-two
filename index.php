<?php 

global $hedmark_option;

get_header(); ?>


		
			<div class="main-hero">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="">

						<h1 class="small-font-family module text-center"><b>Blog</b></h1>
						<p class="text-center">Latest News & Insight on how to grow your Business!</p>
						
					</div>
				</div>
			</div>
			</div>
		</div>



	
			<div class="blog-layout">
				<div class="container">
				<div class="" id="">
					<div class="row">
						
				<?php 
	
				if( have_posts() ):
		
					while( have_posts() ): the_post(); ?>
					
					<div class="col-m-12">
						<?php get_template_part('content',get_post_format()); ?>
						
					</div>
						
	
						<?php endwhile;
		
					endif;
			
					?>
						
						
							
					</div>
				</div>
	<!-- side bar goes on this line-->
				</div>
			</div>



<div class="">

	<div class="container">

    	<div class="row">

        	<div class="col-md-12">

            	<?php wpbeginner_numeric_posts_nav(); ?>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>