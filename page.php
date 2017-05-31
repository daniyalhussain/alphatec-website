<?php get_header(); ?>
<?php include 'emailing.php'; ?>

			<div class="container-fluid">
						<div class="jumbotron image-header">
							<img  src="<?php echo get_template_directory_uri(); ?>/library/images/logo-w.png" ><h1>Alpha Tec</h1>

							<p>Technical solutions start with the customer</p>
						</div>
			</div>

			<div class="container">
				<div class="services">
					<h1>Services</h1>
					<div class="row">
						<div class="col-12 col-md-4 services-col">
							<img  src="<?php echo get_template_directory_uri(); ?>/library/images/smartphone.png" >
							<h3>Mobile Apps</h3>
							<p>We offer custom android app development services for all businesses & startups to connect to the users in a effective manner.</p>
						</div>
						<div class="col-12 col-md-4  services-col">
							<img  src="<?php echo get_template_directory_uri(); ?>/library/images/web.png" >
							<h3>Websites</h3>
							<p>Make your presence felt online with custom web development services from AlpaTec.</p>
						</div>
						<div class="col-12 col-md-4 services-col">
							<img  src="<?php echo get_template_directory_uri(); ?>/library/images/computer.png" >
							<h3>Software</h3>
							<p>Powerful, one-of-a-kind business software intended to meet the customers' unique demands.</p>
						</div>
					</div>
				</div>

			</div>


			<div class="col-12 about-us" >
				<h1>Technical solutions start with the customer.</h1>
				<p>Our team of developers will support you throughout the development process by working together every step of the way, so that your idea turns out exactly as you have envisioned it. The team tests the product to ensure that it will be of the highest quality in every sense of the word.</p>
			</div>


			<div class="col-12 contact">
				<h1>Contact</h1>
				<div class="row content">

					<div class="col-12 col-md-6 form">
						<form action="" method="post"  novalidate="novalidate">

							<p><label> Your Name (required)<br>
							    <input type="text" name="naam" value="" size="40"  aria-required="true" aria-invalid="false"></label></p>
							<p><label> Your Email (required)<br>
							   <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false"> </label></p>
							<p><label> Subject<br>
							   <input type="text" name="subject" value="" size="40" aria-invalid="false"></label></p>
							<p><label> Your Message<br>
							    <textarea name="message" cols="40" rows="10" aria-invalid="false"></textarea> </label></p>
							<p><input type="submit" class="btn btn-outline-success" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
							</form>
					</div>

					<div class="col-12 col-md-6 map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.7467677171476!2d4.32044771579057!3d52.06613447973086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b6e11a479077%3A0x4fff5c7c2bf00554!2sStamkartplein%2C+Den+Haag!5e0!3m2!1snl!2snl!4v1495748139493" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
<?php get_footer(); ?>
