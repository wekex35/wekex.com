<?php
 if(!isset($route))
 {
 	header("Location: home");

exit();
 }
?>

    <!--End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Contact <span>us</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>contact</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="map-section">
			<!--Map Outer-->
			<div class="map-outer">
				<!--Map Canvas-->
				<div class="map-canvas"
					data-zoom="12"
					data-lat="-37.817085"
					data-lng="144.955631"
					data-type="roadmap"
					data-hue="#ffc400"
					data-title="Envato"
					data-icon-path="images/icons/map-marker.png"
					data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
				</div>
			</div>
		</div>
		<div class="auto-container">
			<div class="inner-container">
				<h2>Contact our support guys or make appointment <br> with <span>our consultan</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below.</div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span> New Home Residency <br> Boisar 401501 , Maharashtra <br> India</li>
								<li><span class="icon fa fa-fax"></span> +91 744 765 1040</li>
								<li><span class="icon fa fa-envelope-o"></span>support@wekex.com</li>
							</ul>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!--Contact Form-->
							<div class="contact-form">
								<form method="post" action="sendemail.php" id="contact-form">
									<input type="hidden" name="type" value="contact">
									<div class="form-group">
										<input type="text" name="firstname" value="" placeholder="Full name" required>
									</div>
									
									<div class="form-group">
										<input type="text" name="email" value="" placeholder="Email" required>
									</div>

										<div class="form-group">
										<input type="text" name="phone" value="" placeholder="Phone" required>
									</div>
									
									<div class="form-group">
										<select name="topic">
											<option>Select topic</option>
											<option>Website Development</option>
											<option>Android & IOS App</option>
											<option>E-Commerce Solutions</option>
											<option>IOT Solutions</option>
											<option>AI/ML Solutions</option>
											<option>Software Development</option>
											<option>Other</option>
										</select>
									</div>
									
									<div class="form-group">
										<textarea name="message" placeholder="write.."></textarea>
									</div>
									
									<div class="form-group">
										<button type="submit" class="theme-btn">Submit</button>
									</div>                                        
									
								</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
 