<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mint:: terms and condition</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
				<div class="w3ls-header-left">
						<p>Food delivery platform | UPM</p>
					</div>
					<div class="w3ls-header-right">
						<ul>
							<?php
								if(!isset($_SESSION['customer'])){
									echo '
									<li class="head-dpdn">
										<a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
									</li> 
									<li class="head-dpdn">
										<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
									</li> <li class="head-dpdn">
										<a href="register.php"><i class="fa fa-car" aria-hidden="true"></i> Join our delivery team</a>
									</li>
									';
								}

								else if(isset($_SESSION['customer'])  && count($_SESSION['customer']) == 0){
									echo '
									<li class="head-dpdn">
										<a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
									</li> 
									<li class="head-dpdn">
										<a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</a>
									</li> <li class="head-dpdn">
										<a href="register.php"><i class="fa fa-car" aria-hidden="true"></i> Join our delivery team</a>
									</li>
									';
								}
							?>
							
							
							<li class="head-dpdn">
								<a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="index.php">Mint<span>An Oasis Of Food</span></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php" class="active">Home</a></li>	
								<li><a href="about.php">About</a></li> 
								<li><a href="contact.php">Contact Us</a></li>
								<?php
								if(isset($_SESSION['customer'])  && count($_SESSION['customer']) != 0){
									echo '
									<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $_SESSION['customer'][0]['username'] . ' <span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="logout.php">Logout</a></li>    
										</ul>
									</li>';
								}
							?>
							</ul>
						</div>
						<?php
							if(isset($_SESSION['customer'])  && count($_SESSION['customer']) != 0){
								echo '
								<div class="cart cart box_1"> 
									<form action="#" method="post" class="last"> 
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="display" value="1" />
										<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
									</form>   
								</div> 
								';
							}
						?>
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Delicious food from the <br> <span>Best Chefs For you.</span></h2> 
			</div>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Terms & Conditions</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- privacy-page -->
	<div class="privacy about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Terms & Conditions</h3>  
			<div class="privacy-w3row">
				<p>Kindly read the terms and conditions (Terms and Conditions) set out below carefully before ordering any Goods and Services from this website, Mint.com.my.
				 By ordering any Goods and Services from this website, you have agreed to be bound by these Terms and Conditions.</p>
				 
				
				<h5>GENERAL</h5>
				<p>The following terminology applies to these Terms and Conditions and any or all Agreements: "Clients", "You" and "Your" refers to you, the person 
				 accessing this website and accepting the company's terms and conditions. "The company", "Ourselves", "We" and "Us" refers to our company. "Parties", "Party", or "Us", 
				 refers to both the client and ourselves, or the client or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our 
				 assistance to the client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the client's needs in 
				 respect of provision of the company's stated services/products, in accordance with and subject to the prevailing Malaysian Law. Any use of the above terminology or other words in the singular, 
				 plural, capitalisation and/or/ he/she/ or they, as taken as interchangeable and therefore as referring to same.</p>
				
				<h5>PRICES AND PAYMENT</h5>
				<p>1.1 All prices listed on the website of the products and services is the price of listing at that given time. Our company reserves the rights to change and amend these price lists.Gst not included.</p>
					<p>1.2 Prices and list of pricing will be listed in the website when your order is placed. We accept cash as well as online payment. </p>		
				
				<h5>CONFIDENTIALITY</h5>
				<p>You agree not to disclose information you obtain from us and or from our clients, advertisers, suppliers and forum members. </p>
				<p>All information submitted to by an end-user customer pursuant to a Program is proprietary information of www.mint.com.my. </p>
				<p>Such customer information is confidential and may not be disclosed. Publisher agrees not to reproduce, disseminate, sell, distribute or commercially exploit any such proprietary information in any manner.</p>
				<h5>ENTIRE AGREEMENT</h5>  
				<p>This Agreement shall be governed by and construed in accordance with the substantive laws of Malaysia, without any reference to conflict-of-laws principles. </p>
				<p>The Agreement describes and encompasses the entire agreement between us and you, and supersedes all prior or contemporaneous agreements, representations, warranties and understandings with respect to the Site, the contents and materials provided by or through the Site, and the subject matter of this Agreement. </p>
				
				<h5>SEVERABILITY OF TERMS</h5>  
				<p>In the event that any provision of these Terms and Conditions is found invalid or unenforceable pursuant to any judicial decree or decision, such provision shall be deemed to apply only to the maximum extent permitted by law, and the remainder of these Terms and Conditions shall remain valid and enforceable according to its terms.</p>
			</div>
		</div>
	</div>
	<!-- //privacy-page -->  
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul>
			</div> 
			<div class="col-md-6 subscribe-right">
				<h3 class="w3ls-title">Subscribe to Our <br><span>Newsletter</span></h3>  
				<form action="#" method="post"> 
					<input type="email" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div> 
				</form> 
				<img src="images/i1.png" class="sub-w3lsimg" alt=""/>
			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer agileits-w3layouts">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>company</h3>
					<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>  
						<li><a href="careers.php">Careers</a></li>   
					</ul>
				</div> 
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>help</h3>
					<ul>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="offers.php">Offers</a></li> 
					</ul>  
				</div>
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>policy info</h3>
					<ul>  
						<li><a href="terms.php">Terms & Conditions</a></li>  
						<li><a href="privacy.php">Privacy Policy</a></li>
						<li><a href="login.php">Return Policy</a></li> 
					</ul>    
				</div>
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>Menu</h3> 
					<ul>
						<li><a href="restaurant.php">All Day Menu</a></li> 
						<li><a href="restaurant.php">Lunch</a></li>
						<li><a href="restaurant.php">Dinner</a></li>
						<li><a href="restaurant.php">Flavours</a></li> 
					</ul>  
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>&copy;All rights reserved | Design by Mint</a></p>
		</div>
	</div>
	<!-- //footer -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>