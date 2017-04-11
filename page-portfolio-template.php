<?php 

/*
	
	Template Name: Portfolio Template
	
*/

get_header(); ?>


	<!-- Home header -->
		<div class="main-hero">
			<div class="container-post">
			<div class="row">
				<div class="col-md-12">
					<div class="content-heading">
						<h1 class="small-font-family text-center"><b>Work</b></h1>
						<p class="text-center">How I used design solutions to solve problems for clients</p>
					</div>
				</div>
			</div>
			</div>
		</div>
<!-- the work -->
<div class="portfolio-work">
				
		<div class="container">
		
			  <!-- width of .grid-sizer used for columnWidth -->
			<div class="row" id="ms-container">	
			
			<?php 

				$args = array('post_type' => 'portfolio', 'post_per_page' => 3 );
				$loop = new WP_Query( $args );

				if( $loop->have_posts() ):

					while( $loop->have_posts() ): $loop->the_post(); ?> 
					<div class="ms-item col-xs-12 col-md-6">
					<div class="item-wrapper">

						<?php get_template_part('content-portfolio', ''); ?>
					
					</div>
					</div>
					<?php endwhile;

				endif;

				?>
			
		</div>

		</div>
		</div>
		
		<div class="caption">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="behance.net"><button>More Projects Here</button></a>
				</div>
			</div>
		</div>
		</div>
	
<?php get_footer(); ?>