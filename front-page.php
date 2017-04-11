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
                         			<p>Hi, I'm Joshua Matthews</p>
                         			<h1 class="font-change">I help small service businesses increase their sales through website design</h1>
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
					<h2>“Sick Of Designers Who Don’t Understand You And Your Business?”</h2>
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
					<a href="<?php echo get_page_link(6); ?>"><button>Grow My Business</button></a>
				</div>
			</div>
		</div>
		</div>

<?php get_footer(); ?>