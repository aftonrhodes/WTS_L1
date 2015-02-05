<?php 

include 'var.php'; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<title><?php echo $company_name ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Academy For Growth" />
	<!-- Set width and height to device with viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Font links -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <!-- CSS links -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

	<!-- =Navigation -->

	<nav class="navbar navbar-default" id="navigation" role="navigation">
		<div class="container">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data toggle="collapse" data-target="#menu-collapse-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<p><?php echo $company_name; ?></p>
				</div>
			</div>

			<div class="collapse navbar-collapse" id="menu-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					
					<?php foreach($nav_menu as $name => $url) : ?>

					<li><a href="<?php echo $url; ?>" class="smooth-scroll"><?php echo $name; ?></a></li>

					<?php endforeach ?>
				</ul>
			</div>

		</div>
	</nav>

	<!-- #Header -->

	<header id="header" class="bg-image" role="banner">
		<div class="bg-image-overlay">
			<div class="container">
				
				<div class="row">

					<div class="col-sm-5">
						<div class="wts-contact-wrapper">
							<div class="form-heading">
								<h2>Get In Touch With Us!</h2>
								<p>Simply fill out the form below to request a FREE, no-obligation meeting - and find out about our unique approach to <?php echo $business_2; ?>.</p>
							</div>
							<form method="post" action="#" class="wts-form-contact">
								<input type="text" name="name" placeholder="Full Name..." />
								<input type="text" name="email" placeholder="Email Address..." />
								<input type="text" name="company" placeholder="Company Name..." />
								<textarea name="message" placeholder="Message..."></textarea>
								<input type="submit" name="submit" value="Send Message" />
								<div class="data-status">
								</div>
							</form>
							<p class="form-info">*Privacy/Spam/Info</p>
						</div>
					</div>
					
					<div class="col-sm-6 col-sm-offset-1">
						<div class="header-text">
							<h3><?php echo $business; ?> in <?php echo $location; ?></h3>
							<h1>Grow your business and save you money</h1>
							<p>Call Us Today On <?php echo $phone; ?> To Find Out How We Can Make A Real Difference To Your Business.</p>
							<p>Or Fill Out The Contact Form To Request A Free No-Obligation Meeting.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</header>

	<!-- Header End -->
	
	<div id="main-content">

		<!-- CONTAINER START -->

		<div class="container">

			<div class="content-heading-center" id="about">
				<h2>What makes us different?</h2>
				<p>We work WITH our clients and place a huge emphasis on the RELATIONSHIP</p>
			</div>

			<!-- "WHY US" ROW START -->

			<div class="row">
				<div class="col-sm-4">
					<div class="wts_feature">
						<div class="feature_edge">
						</div>
						<img src="images/services.png" alt="Services" />
						<h4><a href="#services" class="smooth-scroll" style="text-decoration:none;">Services</a></h4>
						<p>All of our services are designed with you firmly in mind. You can rest assured that when you become our client, there will not be any hidden charges. All fees are fixed to one, manageable monthly fee agreed with you in advance.</p>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="wts_feature">
						<div class="feature_edge">
						</div>
						<img src="images/growthchart.png" alt="Business Growth" />
						<h4><a href="#growth" class="smooth-scroll" style="text-decoration:none;">We help to GROW your business</a></h4>
						<p>We know that most of our clients would benefit from more sales, customers and profits. So we have invested a significant sum in sponsoring <a href="http://www.bgsvault.com">The Business Growth System</a> - one of the world's most successful sales &amp; marketing systems.</p>
					</div>
				</div>
	
				<div class="col-sm-4">
					<div class="wts_feature">
						<div class="feature_edge">
						</div>
						<img src="images/support.png" alt="Support" />
						<h4><a href="#header" class="smooth-scroll" style="text-decoration:none;">Free &amp; Unlimited Support</a></h4>
						<p>All of our support is FREE and unlimited. Need a word of advice? Call us. As one of our clients, this is included in your low, fixed monthly fee. You even get direct access to the partners of the firm, whenever you need them.</p>
					</div>
				</div>

			</div>

			<!-- "WHY US" ROW END -->
			
			<div class="clearfix hidden-xs" style="height:40px;">
			</div>

			<!-- "The BGS Solution" ROW START -->

			<div class="row">

				<div class="col-sm-5 hidden-xs">
					<figure>
						<img src="images/laptop.jpg" alt="Business Growth System" />
					</figure>
				</div>

				<div class="col-sm-7">
					<div class="col-text">
						<div class="content-heading-left">
							<h2>We have THE solution</h2>
						</div>
						<p>If you're looking to grow your business, we have THE solution.</p>
						<p class="hidden-sm">Many of the decisions small/medium sized business owners must make would be made simpler if their business could attract more income. We are determined to create highly successful relationships with our clients - and in sponsoring <a href="http://www.bgsvault.com">The Business Growth System</a> we make another concrete demonstration of how we go further for our clients.</p>
                        <p class="hidden-sm">We put you first. Always. Quite frankly, we've never seen anything like it - and we know you'll be similarly impressed. <a href="http://www.bgsvault.com">The Business Growth System</a> contains everything you will ever need to attract more customers, increase your sales and retain customers for much longer.</p>
                        <p>All included, at no extra cost, when you become one of our clients.</p>
					</div>
				</div>

			</div>

			<!-- "The BGS Solution" ROW END -->

		</div>

		<!-- CONTAINER END -->

		<div class="wrap-bg" id="growth">

			<!-- CONTAINER START -->

			<div class="container">

				<div class="content-heading-center">
					<h2>5 Reasons why the system is so successful</h2>
					<p>(All of this is provided to you for FREE when you become our client)</p>
				</div>

				<figure class="growth">

					<ul>
						<li>It's quick to implement.</li>
						<li>The strategies are low cost or even free to apply.</li>
						<li>The system helps to generate many more sales and customers for you.</li>
						<li>The system helps you understand how you can increase your profitability.</li>
						<li>The strategies are also easy to implement and are written in a step-by-step way which makes it easy for anyone, no matter how inexperienced they are in sales and marketing. With video tutorials, detailed but easy-to-understand step-by-step instructions and working examples and templates, the system makes it easy for anyone to get great results.</li>
					</ul>

					<p>Not all business owners want to grow their businesses. That's fine - all our other services will help you maximize your opportunities.</p>
					<p>We recognize that most of our business clients want more sales, more customers and more profit (especially in the current economic climate). Of course this not only helps you, but in turn the more money you make, the more opportunities we'll have to help you.</p>
                    <p>Sponsoring the BGS has given us the opportunity to make it available to ALL our business clients completely FREE OF CHARGE. This means you get full and unlimited access with IMMEDIATE effect. The system normally sells for <?php echo $currency; ?>500 a month (<?php echo $currency; ?>6,000 a year) per business, so this is something of real value.</p>
                    <p>For more information about The Business Growth System, call us at <strong>0844 4480 640</strong>.</p>

				</figure>

			</div>

			<!-- CONTAINER END -->

		</div>

		<!-- CONTAINER START -->

		<div class="container">

			<div class="content-heading-center" id="team">
				<h2>Our Team</h2>
                <p>The team is about more than just us... It is about a relationship between YOU and us.</p>
                <p>That's why we work so hard to build a solid relationship with you and all our other clients. It's what helps set us apart from all other <?php echo $business_2; ?> firms.</p>
                <p>Having said that, let us introduce ourselves to you...</p>
			</div>
			
			<!-- TEAM PHOTO FIRST ROW START -->

			<div class="row">

				<!-- Team Member 1 -->
				<div class="col-sm-4 team-item">

					<div class="team-wrapper">
						<a href="images/team/1.jpg" title="<?php echo $team_member1; ?>" class="fancybox" data-fancybox-group="images_gallery">
							<figure class="figure-hover">
								<img src="images/team/1.jpg" alt="Thumbnail" />
								<div>
									<span class="icon-hover icon-hover-zoom"></span>
								</div>
							</figure>
						</a>
						<div class="team-content">
							<h4 class="entry-title"><?php echo $team_member1; ?></h4>
							<p class="entry-meta"><?php echo $team_member1_title; ?></p>
						</div>
					</div>

				</div>
				
				<!-- Team Member 2 -->
				<div class="col-sm-4 team-item">
					
					<div class="team-wrapper">
						<a href="images/team/2.jpg" title="<?php echo $team_member2; ?>" class="fancybox" data-fancybox-group="images_gallery">
							<figure class="figure-hover">
								<img src="images/team/2.jpg" alt="Thumbnail" />
								<div>
									<span class="icon-hover icon-hover-zoom"></span>
								</div>
							</figure>
						</a>
						<div class="team-content">
							<h4 class="entry-title"><?php echo $team_member2; ?></h4>
							<p class="entry-meta"><?php echo $team_member2_title; ?></p>
						</div>
					</div>

				</div>

				<!-- Team Member 3 -->
				<div class="col-sm-4 team-item">
					
					<div class="team-wrapper">
						<a href="images/team/3.jpg" title="<?php echo $team_member3; ?>" class="fancybox" data-fancybox-group="images_gallery">
							<figure class="figure-hover">
								<img src="images/team/3.jpg" alt="Thumbnail" />
								<div>
									<span class="icon-hover icon-hover-zoom"></span>
								</div>
							</figure>
						</a>
						<div class="team-content">
							<h4 class="entry-title"><?php echo $team_member3; ?></h4>
							<p class="entry-meta"><?php echo $team_member3_title; ?></p>
						</div>
					</div>

				</div>

			</div>

			<!-- TEAM PHOTO FIRST ROW END -->

			<!-- TEAM PHOTO SECOND ROW START -->

			<div class="row">
				
				<!-- Team Member 4 -->
				<div class="col-sm-4 team-item">

					<div class="team-wrapper">
						<a href="images/team/4.jpg" title="<?php echo $team_member4; ?>" class="fancybox" data-fancybox-group="images/gallery">
							<figure class="figure-hover">
								<img src="images/team/4.jpg" alt="Thumbnail" />
								<div>
									<span class="icon-hover icon-hover-zoom"></span>
								</div>
							</figure>
						</a>
						<div class="team-content">
							<h4 class="entry-title"><?php echo $team_member4; ?></h4>
							<p class="entry-meta"><?php echo $team_member4_title; ?></p>
						</div>
					</div>

				</div>

				<!-- Team Member 5 -->
				<div class="col-sm-4 team-item">
					
					<div class="team-wrapper">
						<a href="images/team/5.jpg" title="<?php echo $team_member5; ?>" class="fancybox" data-fancybox-group="images_gallery">
							<figure class="figure-hover">
								<img src="images/team/5.jpg" alt="Thumbnail" />
								<div>
									<span class="icon-hover icon-hover-zoom"></span>
								</div>
							</figure>
						</a>
						<div class="team-content">
							<h4 class="entry-title"><?php echo $team_member5; ?></h4>
							<p class="entry-meta"><?php echo $team_member5_title; ?></p>
						</div>
					</div>

				</div>

				<!-- Team Member 6 -->
				<div class="col-sm-4 team-item">
					
					<div class="team-wrapper">
						<a href="images/team/6.jpg" title="<?php echo $team_member6; ?>" class="fancybox" data-fancyboxy-group="images_gallery">
							<figure class="figure-hover">
								<img src="images/team/6.jpg" alt="Thumbnail" />
								<div>
									<span class="icon-hover icon-hover-zoom"></span>
								</div>
							</figure>
						</a>
						<div class="team-content">
							<h4 class="entry-title"><?php echo $team_member6; ?></h4>
							<p class="entry-meta"><?php echo $team_member6_title; ?></p>
						</div>
					</div>

				</div>

			</div>

			<!-- TEAM PHOTO SECOND ROW END -->

		</div>
		
		<!-- CONTAINER END -->

		<div class="clearfix" style="height:40px;"></div>

		<div class="wrap-services" id="services">
			
			<!-- CONTAINER START -->

			<div class="container">
				
				<div class="content-heading-center">
					<h2>Our Services</h2>
					<p>Count on us to deliver the services your business really needs.</p>
				</div>

			</div>

			<!-- CONTAINER END -->

		</div>

		<!-- CONTAINER START -->

		<div class="container">
			
			<div class="tbl-services">

				<div class="tbl-srv-edge">
				</div>

				<!-- SERVICES ROW START -->

				<div class="row tbl-srv-row">

					<!-- COMPLIANCE SERVICES COLUMN -->

					<div class="col-sm-4 tbl-srv-col">
						<div class="tbl-srv-base">
							<div class="tbl-srv-heading">
								<img src="images/compliance.png" alt="Compliance Services" />
								<h4>Compliance Services</h4>
							</div>
							<div class="tbl-srv-featured">
								<h5>Keeping You Compliant.</h5>
								<p>All of our compliance services are fully managed by our expert team, taking the stress away from you.</p>
							</div>
							<ul class="tbl-srv-list">
								<!-- SERVICES PHP INCLUDE START -->
								<?php foreach($compliance as $name) : ?>
								<li><?php echo $name; ?></li>
								<?php endforeach; ?>
								<!-- SERVICES PHP INCLUDE END -->
							</ul>
						</div>
						<div class="tbl-srv-shadow">
						</div>
					</div>

					<!-- TIME-SAVING SERVICES COLUMN -->

					<div class="col-sm-4 tbl-srv-col">
						<div class="tbl-srv-base">
							<div class="tbl-srv-heading">
								<img src="images/timesaving.png" alt="Time Saving Services" />
								<h4>Time-Saving Services</h4>
							</div>
							<div class="tbl-srv-featured">
								<h5>Making Your Life Easier.</h5>
								<p>We take the distraction away from you, and allow you and your team to get on with building your business.</p>
							</div>
							<ul class="tbl-srv-list">
								<!-- SERVICES PHP INCLUDE START -->
								<?php foreach($time_saving as $name) : ?>
								<li><?php echo $name; ?></li>
								<?php endforeach; ?>
								<!-- SERVICES PHP INCLUDE END -->
							</ul>
						</div>
						<div class="tbl-srv-shadow">
						</div>
					</div>

					<!-- VALUE ADDED SERVICES COLUMN -->

					<div class="col-sm-4 tbl-srv-col">
						<div class="tbl-srv-base">
							<div class="tbl-srv-heading">
								<img src="images/valueadded.png" alt="Value Added Services" />
								<h4>Value-Added Services</h4>
							</div>
							<div class="tbl-srv-featured">
								<h5>More Money For You!</h5>
								<p>Designed to suit every client, in every circumstance - making sure you earn more money.</p>
							</div>
							<ul class="tbl-srv-list">
								<li>Business PerformanceTRACKER</li>
								<li>DecisionMAKER</li>
								<li>BusinessBUILDER</li>
								<li>ProfitSAFE</li>
								<li>FutureSAFE</li>
							</ul>
						</div>
						<div class="tbl-srv-shadow">
						</div>
					</div>

				</div>

				<!-- SERVICES ROW END -->

			</div>

		</div>

		<!-- CONTAINER END -->

		<div class="cleafix" style="height:40px;"></div>

		<!-- CONTAINER START -->

		<div class="container">
			
			<div class="content-heading-center" id="testimonials">
				<h2>What Our Clients Say</h2>
				<p>Of course, we think we do a great job for our clients... but we understand if you would rather hear it from them!</p>
			</div>

			<!-- TESTIMONIALS FIRST ROW START -->

			<div class="row">
				
				<!-- Testimonial 1 -->
				<div class="col-sm-6">
					<div class="wts_testimonial">
						<div class="testimonial-wrapper">
							<div class="testimonial-content">
								<p>"<?php echo $testimonial1; ?>"</p>
								<div class="testimonial-name">
									<h5><?php echo $testimonial_client1; ?></h5>
									<div class="testimonial-rate">
										<p class="testimonial-rate-val" style="width:100%;">5</p>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-shadow">
						</div>
					</div>
				</div>

				<!-- Testimonial 2 -->
				<div class="col-sm-6">
					<div class="wts_testimonial testimonial-pullright">
						<div class="testimonial-wrapper">
							<div class="testimonial-content">
								<p>"<?php echo $testimonial2; ?>"</p>
								<div class="testimonial-name">
									<h5><?php echo $testimonial_client2; ?></h5>
									<div class="testimonial-rate">
										<p class="testimonial-rate-val" style="width:100%">5</p>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-shadow">
						</div>
					</div>
				</div>

			</div>
			
			<!-- TESTIMONIALS FIRST ROW END -->

			<!-- TESTIMONIALS SECOND ROW START -->

			<div class="row">
				
				<!-- Testimonial 3 -->
				<div class="col-sm-6">
					<div class="wts_testimonial">
						<div class="testimonial-wrapper">
							<div class="testimonial-content">
								<p>"<?php echo $testimonial3; ?>"</p>
								<div class="testimonial-name">
									<h5><?php echo $testimonial_client3; ?></h5>
									<div class="testimonial-rate">
										<p class="testimonial-rate-val" style="width:100%;">5</p>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-shadow">
						</div>
					</div>
				</div>
	
				<!-- Testimonial 4 -->
				<div class="col-sm-6">
					<div class="wts_testimonial testimonial-pullright">
						<div class="testimonial-wrapper">
							<div class="testimonial-content">
								<p>"<?php echo $testimonial4; ?>"</p>
								<div class="testimonial-name">
									<h5><?php echo $testimonial_client4; ?></h5>
									<div class="testimonial-rate">
										<p class="testimonial-rate-val" style="width:100%;">5</p>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-shadow">
						</div>
					</div>
				</div>


			</div>

			<!-- TESTIMONIALS SECOND ROW END -->

			<!-- TESTIMONIALS THIRD ROW START -->

			<div class="row">
				
				<!-- Testimonial 5 -->

				<div class="col-sm-6">
					<div class="wts_testimonial">
						<div class="testimonial-wrapper">
							<div class="testimonial-content">
								<p>"<?php echo $testimonial5; ?>"</p>
								<div class="testimonial-name">
									<h5><?php echo $testimonial_client5; ?></h5>
									<div class="testimonial-rate">
										<p class="testimonial-rate-val" style="width:100%;">5</p>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-shadow">
						</div>
					</div>
				</div>

				<!-- Testimonial 6 -->

				<div class="col-sm-6">
					<div class="wts_testimonial testimonial-pullright">
						<div class="testimonial-wrapper">
							<div class="testimonial-content">
								<p>"<?php echo $testimonial6; ?>"</p>
								<div class="testimonial-name">
									<h5><?php echo $testimonial_client6; ?></h5>
									<div class="testimonial-rate">
										<p class="testimonial-rate-val" style="width:100%;">5</p>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-shadow">
						</div>
					</div>
				</div>

			</div>

			<!-- TESTIMONIALS THIRD ROW END -->

		</div>

		<!-- CONTAINER END -->

		<div class="clearfix" style="height:40px;"></div>

		<div class="newsletter-subscribe-wrapper" id="subscribe">

			<!-- CONTAINER START -->

			<div class="container">
				
				<div class="content-heading-center">
					<h2>Subscribe to our free newsletter</h2>
					<p>The Business Builder. Innovative ideas and practical advice to give small business owners the edge...</p>
				</div>

				<form method="post" action="#" class="newsletter-form-subscribe">
					<input type="text" name="email" placeholder="Email Address...">
					<input type="submit" name="submit" value="Subscribe Now" />
				</form>

			</div>

			<!-- CONTAINER END -->
			
		</div>

	</div>

	<!-- FOOTER START -->
	
	<footer id="footer" role="contentinfo">
		
		<!-- CONTAINER START -->

		<div class="container">
			
			<div class="sep-footer"></div>

			<ul class="social">
				<li><a href="<?php echo $twitter; ?>" target="_blank" class="social-twitter" data-placement="top" data-original-title="twitter"><i class ="fa fa-twitter"></i></a></li>
				<li><a href="<?php echo $linkedin; ?>" target="_blank" class="social-linkedin" data-placement="top" data-original-title="linkedin"><i class ="fa fa-linkedin"></i></a></li>
				<li><a href="<?php echo $googleplus; ?>" target="_blank" class="social-gplus" data-placement="top" data-original-title="google plus"><i class ="fa fa-google-plus"></i></a></li>
				<li><a href="<?php echo $facebook; ?>" target="_blank" class="social-facebook" data-placement="top" data-original-title="facebook"><i class ="fa fa-facebook"></i></a></li>
			</ul>

			<p><?php echo $company_name; ?>, <?php echo $address; ?></p>

			<p>&copy; 2009 - <?php echo date("Y"); ?> Copyrights by <?php echo $company_name; ?> &amp; Academy For Growth Ltd - All rights reserved.</p>
			
			<ul class="policy">
				<li><a href="policy.php">Privacy Policy</a></li>
				<li><a href="policy.php">Anti-Spam Policy</a></li>
				<li><a href="policy.php">Disclaimer</a></li>
			</ul>	

		</div>

		<!-- CONTAINER END -->

	</footer>

	<!-- SCRIPTS -->
	<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='js/jquery-migrate-1.2.1.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.min.js'></script>
	<script type='text/javascript' src='js/jquery-easing.js'></script>
	<script type='text/javascript' src='js/jquery.placeholder.min.js'></script>
	<script type='text/javascript' src='js/jquery.mousewheel-3.0.6.pack.js'></script>
	<script type='text/javascript' src='js/jquery.fancybox.pack.js'></script>
	<script type='text/javascript' src='js/main.js'></script>

</body>
</html>