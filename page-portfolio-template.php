<?php 

/*
	
	Template Name: Portfolio Template
	
*/

get_header(); ?>

<div class="spacing"></div>
	<!-- Home header -->
		<div class="matthews-spacing caption">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="matthews-headline text-center">How my design solutions solved problems for clients</h1>
						<hr class="text-center">
					</div>
				</div>
			</div>
		</div>
		<div class="spacing"></div>
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
		
		<div class="spacing"></div>
		
	<div class="container-post">
	<hr>
	</div>
		
		<!-- Call to action -->
	<div class="caption">
	   <div class="container-post">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="matthews-headline">Ready to get your project started?</h1>
					<a href="<?php echo get_page_link(10); ?>"><button>YES!</button></a>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>