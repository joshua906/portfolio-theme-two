<?php get_header(); ?>

<!-- Home header -->
	
  <div class="featured-top">
                    
                
    
                <!-- .post-thumbnail -->
                <div class="post-thumbnail">
                         
                                
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                         <div class="container">
                         	<div class="row">
                         		<div class="col-xs-12 col-md-8">
                         		<div class="content-hero caption-hero">
                   					<h1 class="small-font-family-white"><b>I design custom websites & apps for Instructors and Service Business 
Professionals</b></h1>
									<!--<h1 class="font-change">I help Instructors and service businesses increase their sales, course signups, and subscribers through website design</h1>-->
									<a href="<?php echo get_page_link(8); ?>"><button>VIEW PROJECTS &#8594;</button></a>
								</div>
                         		</div>
                         	</div>
                         </div>               
                        <!-- .entry-meta -->


                        
                    </header>
                    <!-- .entry-header -->
                    
                </div>
            	<!-- .post-thumbnail -->
                
</div>
            <!-- .featured-top -->	


		<div class="spacing"></div>
		<div class="caption">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12  intro text-center">
					
					<h1 class="matthews-headline">Hello I'm Joshua Matthews</h1>
						<hr>
					<p>I help Instructors and Service Business Owners grow their business by increasing sales, course signups, and subscribers so they can make a profitable business even if they are in the early stages of development. I do this by understanding your target market and streamlining a process that will convert your visitors into paying customers. </p>
					
					<p>I am a business minded designer who understands the challenges businesses face when it comes to establishing a profitable website. If you are ready to build a effective website for your company and work with someone whose focus is in the success of your business, your in the right place</p>
					
					<p>Check out my latest articles for tips and actionable ways to grow your business today!</p>
				<!--<?php 
	
				if( have_posts() ):
		
					while( have_posts() ): the_post(); ?>
						
						<p><?php the_content(); ?></p>
						
	
						<?php endwhile;
		
					endif;
			
					?>-->
					
					</div>
				
				</div>
			</div>
		
		<div class="container-post">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo get_page_link(158); ?>"><button>Work WIth Me</button></a>
				</div>
			</div>
		</div>
		</div>

		<div class="matthews-divider">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>this is where the testimnoy will go</p>
					</div>
				</div>
			</div>
		</div>
		
	<!--	<div class="testimony-color">
		<div class="container">
				<div class="row">
			<div class="col-md-12 text-center text-clients">
				<h1>Kind words from <br>happy clients</h1>
				
			</div>
		</div>
			<div class="row">
			<?php
			$args = array('post_type' => 'testimony', 'post_per_page' => 3 );
				$loop = new WP_Query( $args );

				if( $loop->have_posts() ):

					while( $loop->have_posts() ): $loop->the_post(); ?> 
				<div class="col-xs-12 col-md-4">
            	<div class="banner bg-primary text-center">
                	<div class="banner_wrap banner-content small-paragraph">
                        <?php the_post_thumbnail(); ?>
                        
						<?php the_content(); ?>
                   		<h5><?php the_excerpt(); ?></h5>
                    </div>
                </div>
            </div>
            	<?php endwhile;

				endif;

				?>
			</div>
		</div>
		</div>-->
		
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