<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mint :: About </title>
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
							<li class="head-dpdn">
								<i class="fa fa-phone" aria-hidden="true"></i> Call us: +01 222 33345 
							</li> 
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
								<li><a href="index.php">Home</a></li>	
								<li><a href="about.php" class="active">About</a></li> 
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
			<li class="active">About</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!--  about-page -->
	<div class="about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">About Us</h3>
			<div class="about-text">	
				<p>Mint is an online food ordering & delivery company founded in 2018 by Mint.Co who wants to bring conveniences to hungry diners 
				by providing the marvelous delivery service. Our mission is to provide reliable food delivery to diners and at the same time, assisting 
				restaurants to manage their delivery manpower efficiently.In the spirit of diversifying the food culture and the depth of culinary 
				types of the world around, we’re also keen on ensuring that diners are given the exposure of diversification which allows everyone to have 
				a catch and the enjoyment of the experience of trying something new or that’s out of the norm. As so we provide an array of culinary fields 
				such as Chinese, Western, Fusion, Italian, Korean, Thai, Portuguese, Middle Eastern, Mediterranean, Indian, Desserts, Pastries of all kinds,
				 your local favorites like Mamak and a whole lot more. 
				 </p> 
				<div class="ftr-toprow">
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Delivery</h4>
							<p>We will deliver your food right to your doorstep within one hour of ordering. </p>
						</div> 
						<div class="clearfix"> </div>
					</div> 
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Customer</h4>
							<p>target customer to all society that want the best delivery food and spend time and delicious food at time.</p>
						</div> 
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 ftr-top-grids">
						<div class="ftr-top-left">
							<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						</div> 
						<div class="ftr-top-right">
							<h4>Feedback</h4>
							<p>Customer satisfaction with Mint delivery is the feedback to us to improve our service and products. </p>
						</div>
						<div class="clearfix"> </div>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="history">
				<h3 class="w3ls-title">How does it work ?</h3>
				<p> Meals are delivered to diner’s doorstep with just a few simple clicks. Mint allows diners to enjoy variety of food from more 
				than 200 restaurants at the comfort of their own premise hassle free!

				Paying your food is also as flexible as you can want it to be, at Mint we hold no barriers against customers who insist on paying by cash. 
				Not a fan of handling notes in your wallet, no problem, process your transactions with your credit or debit card.

				In the norm of also enhancing user capabilities on the go, diners can also by using our website Mint. </p> 
				<h3 class="w3ls-title">Our history</h3>
				<p>Throughout Delivereat’s years of serving patrons, we have established partnerships and business acquaintances with large 
				chain outlets that you’re probably familiar with as a foodie, aren’t we all? Venture your heart out into the broad world of culinary wonders with your well known
				 giants in the industries like Sushi King, Chili’s, Sakae Sushi, Morganfield’s, Nandos, Kenny Rogers and Roasters, Subway, Tealive, Yoshinoya and Hanamaru, and many
				  more! We’re also no strangers to outlets of smaller scales as so don’t feel left out if you’re a foodie of a varied preference.</p> 
			</div>
		</div>
	</div>
	<!-- //about-page --> 
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
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
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
						<li><a href="help.php">Partner With Us</a></li>   
					</ul>
				</div> 
				<div class="col-xs-6 col-sm-3 footer-grids w3-agileits">
					<h3>help</h3>
					<ul>
						<li><a href="faq.php">FAQ</a></li> 
						<li><a href="login.php">Returns</a></li>   
						<li><a href="login.php">Order Status</a></li> 
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
			<p>&copy; 2017 Staple Food. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
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