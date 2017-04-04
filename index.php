<?php 

global $hedmark_option;

get_header(); ?>

<!--Blog hero
<div class="container">
<div class="blog-hero">
		<div class="row">
			<div class="col-md-12">
				<h1 class="small-font-family module"> Latest News and Insight</h1>
			</div>
		</div>
		
	</div>
</div>
-->
<!-- blog header 
<div class="container">
<div id="container">
	<div id="image"><?php the_post_thumbnail(); ?></div>
  <h1 class="small-font-family module" id="text">
	  <b>Latest News and Insights</b>
  </p>
</div>
</div>-->
<!--	<div class="blog-hero-img">
	<div class="container">
		<?php the_post_thumbnail(); ?>
		<div class="">
			<h1 class="small-font-family module text-center"><b>Latest News and Insight</b></h1>
		</div>
	</div>
</div>
-->
		
			<div class="main-hero">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="">

						<h1 class="small-font-family module text-center"><b>Latest News and Insight</b></h1>
						<p class="text-center">Find out how to grow your business or statup!</p>
						
					</div>
				</div>
			</div>
			</div>
		</div>



	
			<div class="blog-layout">
				<div class="container-post">
	
					<div class="row">
						<div class="col-md-12">
	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
						<?php get_template_part('content',get_post_format()); ?>
						
						
						
	
			<?php endwhile;
		
	endif;
			
	?>
						</div>
						
							
					</div>
	
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