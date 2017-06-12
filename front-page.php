<?php get_header(); ?>


            <!-- .featured-top -->
            			<div class="text-hero">	
        				<div class="container">
                         	<div class="row">
                         		<div class="col-xs-12 col-md-12">
                         		<div class="content-hero caption-hero text-center">
                   					<h1 class="small-font-family-white text-center"><b>I design result driven Websites & Apps for Instructors and Service Business Owners </b></h1>
								
									<!--<h1 class="font-change">I help Instructors and service businesses increase their sales, course signups, and subscribers through website design</h1>-->
									<a href="<?php echo get_page_link(8); ?>" class="button-center"><button>VIEW PROJECTS &#8594;</button></a>
								</div>
                         		</div>
                         	</div>
                         </div>
                         </div>              

<!-- new hero image -->
	
	
			<div class="matthews-service-image-padding">
			<div class="featured-top-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/img/matthews-background-hero.jpg" alt="Matthews Service image">
			</div>
			</div>
	
	
	
	
	
	
	<!-- intro duction -->
		<div class="spacing"></div>
		<div class="intro">
		<div class="caption">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12 text-center" id="animate">
					
					<h1 class="matthews-headline text-center">Hello I'm Joshua Matthews</h1>
				
					<p>I help Instructors and Service Business Owners grow their business by increasing sales, course signups, and subscribers so they can make a profitable company even if they are in the early stages of development. I do this by understanding your target market and streamlining a process that will convert your visitors into paying customers. </p>
					
					<p>I am a business minded designer who understands the challenges businesses face when it comes to establishing a profitable website and mobile application. If you are ready to build an effective website for your company and work with someone whose focus is in the success of your business, your in the right place.</p>
					
					<p>Are you ready to invest in your business?</p>
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
					<a href="<?php echo get_page_link(158); ?>"><button>Work With Me</button></a>
				</div>
			</div>
		</div>
		</div>
</div>
	<!--	<div class="matthews-divider">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>this is where the testimnoy will go</p>
					</div>
				</div>
			</div>
		</div>-->
		
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
		
		
		
		
		<!-- #testimonials -->
        <div id="testimonials" class="bg-grey padding-top100 padding-bottom60">
            
            <!-- .container -->
            <div class="container">
                
                <div class="caption post-heading-center text-center animation" data-animation="animation-fade-in-down">
                    <h2>What People Say</h2>
                  
                    <p></p>
                </div>
                
				<!-- .row -->
                <div class="row">
                	
                	<div class="col-md-12"> <!-- 1 -->
                	<?php
			$args = array('post_type' => 'testimony', 'post_per_page' => 3 );
				$loop = new WP_Query( $args );

				if( $loop->have_posts() ):

					while( $loop->have_posts() ): $loop->the_post(); ?> 
                		<div class="affa-testimonial3 animation" data-animation="animation-fade-in-down">
                			<div class="testimonial-txt">
                				<p><?php the_content(); ?></p>
                			</div>
                            <div class="testimonial-name">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/george-garcia.jpg" alt="Avatar-george">
                                <h4>George Garcia</h4>
                                <p>CEO & Founder, <span>Egg Entertainment</span></p>
                            </div>
                		</div>
                <?php endwhile;

				endif;

				?>
                	</div>
                	
                	
                </div>

				
            </div>
            <!-- .container end -->
            
        </div>
        <!-- #testimonials end -->
		
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