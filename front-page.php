<?php get_header(); ?>

<!-- Home header -->
	
  <div class="featured-top">
                    
                
            	
                <!-- .post-thumbnail -->
                <div class="post-thumbnail">
                         
                                
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                                        
                        <!-- .entry-meta -->
                        <div class="entry-meta">
                            <span class="cat-links">
                                <a href="#" title="View all posts in Travel" rel="category tag"></a>
                            </span>	
                        </div>
                        <!-- .entry-meta -->
                        
                        <!-- .entry-title 
                        <h1 class="entry-title"><b>I help small service businesses increase their sales through website and mobile design</b></h1>
                         -->     
                         <div class="container-post">
                         	<div class="row">
                         		<div class="col-md-12 text-center">
                         		<div class="content-hero">
                         			<p>Hi, I'm Joshua Matthews</p>
									<h1 class="font-change">I help <span><b><em>small service businesses</em></b></span> increase their sales through <span><b>website design</b></span></h1>
								</div>
                         		</div>
                         	</div>
                         </div>          
                        <!-- .entry-meta -->
                        <div class="entry-meta">
                            <span class="entry-date">
                             
                            </span> 
                            <span class="comment-link">
                                <a href="#comments"></a>
                            </span>
                        </div>
                        <!-- .entry-meta -->
                        
                    </header>
                    <!-- .entry-header -->
                    
                </div>
            	<!-- .post-thumbnail -->
                
</div>
            <!-- .featured-top -->	
	<!--
		<div class="main-hero">
			<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="">
						<!--<h4 class="font-family fadeInUp">Hello! I'm Joshua Matthews, UI/UX Designer and Front end Developer</h4>
						<h4 class="font-family fadeInUp">Welcome</h4>-->
						<!--<h1 class="small-font-family big"> I build and design web and mobile experiences that help brands<span>Stand Out.</span></h1>
						<h1 class="small-font-family module"> <b>I'm Joshua Matthews, & I help startups and small businesses increase sales through marketing website development.</b></h1>
						
						
					</div>
				</div>
			</div>
			</div>
		</div>
		-->
		<div class="headline-hook">
		<div class="container-post">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>“Sick Of Designers Who Don’t Understand You And Your Business?”</h1>
				</div>
			</div>
		</div>
		</div>
		
		<div class="caption">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12">
				<?php 
	
				if( have_posts() ):
		
					while( have_posts() ): the_post(); ?>
						
						<p><?php the_content(); ?></p>
						
	
						<?php endwhile;
		
					endif;
			
					?>
					
					</div>
				
				</div>
			</div>
		
		<div class="container-post">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo get_page_link(6); ?>"><button>Grow My Business Now</button></a>
				</div>
			</div>
		</div>
		</div>

		
		
		<div class="testimony-color">
		<div class="container">
				<div class="row">
			<div class="col-md-12 text-center text-clients">
				<h2>Client Testimonies</h2>
				
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
		</div>




<?php get_footer(); ?>