<?php get_header(); ?>

<!-- Home header -->
	
  <div class="featured-top">
                    
                
    
                <!-- .post-thumbnail -->
                <div class="post-thumbnail">
                         
                                
                    <!-- .entry-header -->
                    <header class="entry-header">
                        
                         <div class="container">
                         	<div class="row">
                         		<div class="col-md-8">
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

		<div class="headline-hook">
		<div class="container-post">
			<div class="row">
				<div class="col-md-12 text-center font-special">
					<!--<h1>Sick Of Designers Who Don’t Understand You And Your Business?</h1>-->
				</div>
			</div>
		</div>
		</div>
		
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
					<a href="<?php echo get_page_link(6); ?>"><button>Work WIth Me</button></a>
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
					<a href="<?php echo get_page_link(6); ?>"><button>YES!</button></a>
				</div>
			</div>
		</div>
	</div>
		
	
<!--
<!-- Begin MailChimp Signup Form 
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//technology.us15.list-manage.com/subscribe/post?u=0bf5507f7d84a810fe032681f&amp;id=99c0bc945e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE2">Untitled </label>
	<input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0bf5507f7d84a810fe032681f_99c0bc945e" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='MMERGE2';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<?php get_footer(); ?>