<?php get_header(); ?>
<div class="spacing"></div>
		<div class="matthews-spacing caption">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="matthews-headline text-center">Ready to make an investment in your business?</h1>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<!-- hero image -->
			<div class="matthews-service-image-padding">
			<div class="featured-top-blog">
				<img src="<?php echo get_template_directory_uri(); ?>/img/matthews-contact-hero.jpg" alt="Matthews Service image">
			</div>
			</div>
		<!-- form -->

		<div class="contact-form">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12">
					
								<div>
									<p class="">I look forward to hearing about your project and being a part of your business success. Fill out my form and I will get back to you within 24 hours.</p>
								</div>
						<form action="#" method="post" id="portfolioContactForm" data-url="<?php echo admin_url('admin-ajax.php') ?>">
						
						
							<div class="row">

								<div class="col-md-6">

								<div class="form-group-two">
									<input type="text" class="" name="name" placeholder="name" id="name" >
									
									<small class="form-control-msg text-danger">Your Name is Required</small>
									
									<br>
								</div>
								</div>
								
								<div class="col-md-6">
								<div class="form-group-two">
									<input type="text" name="email" placeholder="email" id="email">
									<small class="form-control-msg text-danger">Your Email is Required</small>
								</div>	
								</div>	
								
							</div>
					
							<!--<input type="text" name="company" placeholder="company" id="company"><br>-->
							<div class="form-group-two">
							<textarea type="text" name="message" placeholder="Tell me about your project" id="message"></textarea>
							<small class="form-control-msg text-danger">Your Email is Required</small><br>
							</div>
						
						
							<button type="submit" value="SEND MESSAGE">Start My Project</button>
						
						<div class="form-control-msg js-form-submission">Submission in process, please wait..</div>
						<div class="form-control-msg js-form-success">Message Successfully Submitted, Thank You!</div>
						<div class="form-control-msg js-form-error">There was a problem with the Contact Form, please try again!</div>
						
				
					</form>
					</div>
					
					</div>
				</div>
			</div>
		</div>
		
<!-- additional links -->

<div class="spacing"></div>
<div class="container-post">
	<div class="row">
		<div class="col-md-12">
		<h4>GET IN TOUCH</h4>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> email: jm@matthewsdesigns.technology</p>
			 <p><i class="fa fa-twitter" aria-hidden="true"></i> twitter: @jmatthews_12</p> 
			   <p><i class="fa fa-facebook" aria-hidden="true"></i>facebook: @ilikematthewsdesigns</p> 
			   <p><i class="fa fa-mobile" aria-hidden="true"></i> 214/422/8721</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>