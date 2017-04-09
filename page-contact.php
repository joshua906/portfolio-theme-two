<?php get_header(); ?>

<div class="main-hero">
			<div class="container-post">
			<div class="row">
				<div class="col-md-12">
					<div class="">
						<em><h4 class="small-font-family fadeInUp"></h4></em>
						<h1 class="small-font-family big text-center"><b>Lets build something Great!</b></h1>
						<p></p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- form -->

		<div class="contact-form">
			<div class="container-post">
				<div class="row">
					<div class="col-md-12">
					
								<div>
									<p>Feel free to contact me regarding an estimate on a future project you wish to start. I will respond back to you as soon as possible.</p>
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
							<textarea type="text" name="message" placeholder="message" id="message"></textarea>
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
		


<?php get_footer(); ?>