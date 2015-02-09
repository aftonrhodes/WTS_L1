<?php 

include 'var.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge" />
	<title>Policy | <?php echo $company_name ?> - <?php echo $business; ?> in <?php echo $location; ?></title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css" />
	
</head>
<body>
	<!-- =Navigation -->

	<nav class="navbar navbar-default" id="navigation" role="navigation">
		<div class="container">
			
			<div class="navbar-header">

				<?php 

					function button1($attr, $text) {
					  $data = "<button ";

					  foreach($attr as $names => $specs) {
					    $data .= $names . "='" . $specs . "' ";
					}

					  $data .= ">" . $text . "</button>\n";
					return $data;
					}

					function span1($attr, $text) {
					  $data = "<span ";

					  foreach($attr as $names => $specs) {
					    $data .= $names . "='" . $specs . "' ";
					  }

					  $data .= ">" . $text . "</span>\n";
					  return $data;
					}

					echo button1(
					  array( "type" => "button",
					         "class" => "navbar-toggle collapsed",
					         "data-toggle" => "collapse",
					         "data-target" => "#menu-collapse-1" ),
					  span1(
					    array( "class" => "sr-only",
					    		"class" => "icon-bar icon-bar-2"),
					    "")
					  
					);

				?>

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
			
			<div class="content-heading-center pol-titles">
				<h2>Privacy Policy</h2>
				<p><span>The Information We Collect and Use:</span></p>
				<p>This privacy policy sets out how we use and protect any information that you give us when you use this website.</p>
				<p><?php echo $company_name ?> is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.</p>
				<p>We may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.</p>
				<br>
				<p><span>What Information We Collect</span></p>
				<p>By information we mean information about you collected through our websites including your e-mail address and other information you give us.</p>
				<p>Any information given to us will be retained and used solely for the purposes of fulfilling your request for information (on any of our products or services (free or paid for).</p>
				<br>
				<p><span>Security</span></p>
				<p>We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
				<br>
				<p><span>How we use cookies</span></p>
				<p>A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site.</p>
				<p>The use of cookies is an industry standard -- you'll find them at most websites. For example, we may use cookies on the Site to verify the subscriber's login status. They are not used to store personal information, or to retain historical or transactional data.</p>
				<p>Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.</p>
				<p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
				<p>Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
				<p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>
				<br>
				<p><span>Cookies And Tags For Remarketing</span></p>
				<p>Remarketing cookies and tags are placed on our web pages to enable third party vendors (including Google) to show our ads (online display ads) on other websites to people who have previously visited our websites.</p>
				<p>We do NOT share any personal information or details that you have given us.</p>
				<br>
				<p><span>Links to other websites</span></p>
				<p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>
				<br>
				<p><span>Controlling your personal information</span></p>
				<p>We will not sell, distribute or lease your personal information to third parties - EVER. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen.</p>
				<br>
				<p><span>IP Addresses</span></p>
				<p>An IP address is a number that's automatically assigned to your computer whenever you're surfing the web. Web servers, the computers that serve web pages, automatically identify your computer by its IP address. The company collects IP addresses for purposes of system administration, to report aggregate information to third parties and to track the use of the site.</p>
				<p>When visitors request pages from the site or click on a link in a mailing sent through the service our servers log the visitors' IP addresses. We reserve the right to use IP addresses to identify a visitor or list member when it will enhance the users experience or if we feel it is necessary to enforce compliance with the site's policies or to protect the company, the site, its visitors, the service, our Internet Service Provider partners, the list members or others.</p>
				<br>
				<p><span>Change of Control / Asset Transfer</span></p>
				<p>As the Company develops, we may buy other businesses or their assets or sell all or parts of our business assets. Customer information is generally one of the business assets involved in such transactions. Thus, in the event that the assets of the Company in whole or in parts are acquired by a third-party, customer information, including any visitor information collected through the site or the service, would be one of the transferred assets.</p>
				<p>In the event of a corporate change in control or sale of all or parts of our business assets our users will be notified in accordance with the "Changes to this Policy" section of the policy if their personal information is provided to the new corporate entity or asset purchaser.</p>
				<br>
				<p><span>Legal Compliance</span></p>
				<p>The Company reserves the right to disclose information in special cases when we have reason to believe that disclosing this information is necessary to identify, contact or bring legal action against someone who may be causing injury to or interference with (either intentionally or unintentionally) the Company's rights or property, other visitors, list members, or anyone else that could be harmed by such activities. The Company also reserves the right to disclose visitor or list member information when we believe in good faith that the law requires it.</p>
				<br>
				<p><span>Changes to this Policy:</span></p>
				<p>The terms of this Privacy Policy may change from time to time. We will notify you of any material changes to this Privacy Policy by posting a notice on the homepage of the Site for a reasonable period of time after such changes are made, that this Privacy Policy has been updated, and by changing the "Effective" date at the top of this Privacy Policy. We encourage you to check this page periodically for any changes. Your continued use of the site and participation in following the posting of changes to these terms will mean you accept those changes.</p>
				<br>
				<p><span>Contacting Us:</span></p>
				<p>We value your opinions. If you have comments or questions about our Privacy Policy, please contact us via the address at the bottom of this page.</p>


				<div class="clearfix hidden-xs" style="height:50px;">
				</div>

				<h2>Anti-Spam Policy</h2>
				<p><?php echo $company_name ?> is strongly opposed to SPAM.</p>
				<p>We may provide reports, newsletters, no-obligation meeting requests and other products and services but ONLY to those who sign up for them.</p>
				<p>All of these lists can be opted-out of at any time.</p>
				<p><?php echo $company_name ?> NEVER share or sell its e-mail lists to third parties.</p>
				<p>Each email that you receive from us has simple instructions on how to unsubscribe from our e-mail list.</p>
				<p>If you have any questions regarding our e-mail policy, please get in touch with us via the address at the bottom of this page.</p>
				<div class="clearfix hidden-xs" style="height:50px;">
				</div>

				<h2>Disclaimer</h2>
				<p>We make every effort to ensure that we accurately represent our products and services and their potential for helping individuals and business owners.</p>
				<p>Examples of client gains, income generated and other results are not necessarily average or typical nor intended as representations of your potential growth.</p>
				<p>As with any product or service, results may vary significantly. Each individual’s results depend on his or her ambitions, background, dedication, motivation and desire.</p>
				<p>Significant financial risk is possible with any supplier if you don’t do your own due diligence and get suitable professional advice.</p>
				<p>No guarantees of specific results are expressly made or implied.</p>
				<p>ALL Rights Reserved.</p>
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