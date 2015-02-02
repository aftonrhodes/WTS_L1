<?php 

include 'var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<title>Policy | <?php echo $company_name ?> - Accountants in <?php echo $location; ?></title>
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
    <link rel="stylesheet" href="css/animate.min.css" />
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

	<div class="clearfix hidden-xs" style="height:100px;">
	</div>
	
	<div id="main-content">
		
		<div class="container">
			
			<div class="content-heading-center">
				<h2>Privacy Policy</h2>
				<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.</p>
				
				<div class="clearfix hidden-xs" style="height:50px;">
				</div>

				<h2>Anti-Spam Policy</h2>
				<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.</p>
				
				<div class="clearfix hidden-xs" style="height:50px;">
				</div>

				<h2>Disclaimer</h2>
				<p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni. Perspiciatis unde omnis iste natus error morbi voluptatem dolores eos qui ratione voluptatem nesciunt.</p>
			</div>
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