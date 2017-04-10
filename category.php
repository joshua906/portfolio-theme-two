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
				<div class="col-md-12 text-center">
					<div class="">

						<h1 class=""><b><?php the_category() ?></b></h1>
						
						
					</div>
				</div>
			</div>
			</div>
		</div>


	
<div class="blog-layout">
				<div class="container">
				<div class="row" id="ms-container">
					<div class="row">
						
				<?php 
	
				if( have_posts() ):
		
					while( have_posts() ): the_post(); ?>
					
					<div class="ms-item col-xs-12 col-md-6">
						<?php get_template_part('template-parts/content',get_post_format()); ?>
						
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