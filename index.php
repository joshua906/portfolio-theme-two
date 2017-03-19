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
<!-- blog header -->
		<div class="main-hero">
			<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="">

						<h1 class="small-font-family module"><b>Latest News and Insight</b></h1>
						
						
					</div>
				</div>
			</div>
			</div>
		</div>


	
			<div class="blog-layout">
				<div class="container">
	
					<div class="row">
						<div class="col-md-8">
	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
						<?php get_template_part('content',get_post_format()); ?>
						
						
						
	
			<?php endwhile;
		
	endif;
			
	?>
						</div>
						
							<?php get_sidebar(); ?>
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