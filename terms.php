<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mint | Food Delivery Platform</title>
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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare turpis ut porta aliquet. Morbi quis dictum lacus. Donec scelerisque lacus nec lobortis tempor. Morbi orci arcu, ullamcorper ut arcu vel, ultricies congue lacus. Phasellus porta cursus tempor. Nunc ultricies sapien nec est ornare pulvinar. Vivamus mollis faucibus purus sed blandit. Praesent fermentum dapibus risus id rutrum. Aliquam rutrum vel nulla eu fringilla.</p>
				<p>Nunc ornare turpis ut porta aliquet. Morbi quis dictum lacus. Donec scelerisque lacus nec lobortis tempor. Morbi orci arcu, ullamcorper ut arcu vel, ultricies congue lacus. Phasellus porta cursus tempor. Nunc ultricies sapien nec est ornare pulvinar. Vivamus mollis faucibus purus sed blandit. Praesent fermentum dapibus risus id rutrum. Aliquam rutrum vel nulla eu fringilla. Curabitur efficitur justo a est tempor, pretium accumsan leo sagittis. Ut imperdiet sapien velit, a auctor neque laoreet sed. Praesent ornare nulla sit amet ullamcorper vulputate. Suspendisse vitae magna finibus, egestas eros quis, ornare risus. Duis magna ex, ultrices quis tellus non, commodo eleifend odio. Donec et faucibus risus. Aliquam laoreet justo sapien. </p>
				
				<h5>GENERAL</h5>
				<p>-> These Terms are an agreement between You and Mint and apply to You when using or accessing the Site or Services. </p>
				<p>-> The Terms constitute the entire agreement between You and Mint concerning the Services and supersedes any prior agreements.</p>
				<p>-> If You do not agree to anything in the Terms You should not use the Site or Services. </p>
				<p>-> The Terms will remain in full force and effect and apply whenever You access the Site or Services, regardless of how You access the Site or Services, which You may access in several ways, including but not limited to the Web, mobile phones, tablets and RSS feeds </p>
				<p>-> foodora reserves the right to amend the Terms at any time as notified to You via the Site. Continued use of the Site or Services will be deemed to constitute Your acceptance of those changes. </p>
				
				<h5>PRICES AND PAYMENT</h5>
				<p>Maecenas malesuada leo dui, at venenatis ligula sodales ut. Cras a feugiat orci. </p>
				<p>Pellentesque metus enim, aliquet eu felis sed, pretium ultrices ante convallis nec turpis.</p>
				<p>Phasellus imperdiet nibh et lorem tincidunt aliquam. Integer elementum purus non venenatis volutpat. Curabitur sit amet neque sed arcu pretium iaculis. Phasellus posuere egestas tortor a molestie. Nulla sed urna dignissim, maximus magna et, elementum metus. Ut dolor lorem, mattis eu consectetur non, euismod quis nulla. </p>			
				
				<h5>SECURITY</h5>  
				<p>Phasellus imperdiet nibh et lorem tincidunt aliquam. Integer elementum purus non venenatis volutpat. Curabitur sit amet neque sed arcu pretium iaculis. Phasellus posuere egestas tortor a molestie. Nulla sed urna dignissim, maximus magna et, elementum metus. Ut dolor lorem, mattis eu consectetur non, euismod quis nulla. </p>
				<p>Donec scelerisque lacus nec lobortis tempor donec et faucibus risus. Aliquam laoreet justo sapien. </p>
				<p>Pellentesque quis sagittis est. Nam placerat ante at nunc ornare, sed faucibus odio interdum. Nam viverra, purus ac ullamcorper convallis, lorem erat consequat enim, at pharetra magna. </p>
				
				<h5>ORDER CONDITIONS, DELIVERY</h5>  
				<p>Maecenas malesuada leo dui, at venenatis ligula sodales ut. Cras a feugiat orci. </p>
				<p>Pellentesque metus enim, aliquet eu felis sed, pretium ultrices ante convallis nec turpis.</p>
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