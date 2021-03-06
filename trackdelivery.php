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
<title>Mint :: Track Delivery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons --> 
<link href="css/cart style 2.css" rel="stylesheet">
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
<script>
	$(document).ready(function(){
		checkingPayment();
		
		function checkingPayment() {
						
			$.ajax({
				url:"ajax/select.php",
				dataType:"json",
				type: "POST",
				data: {table : 'orders', column : '*', where : 'orderID='+<?php echo $_GET['orderID']; ?>+'', message : 'gg'},
				success:function(data){
					if(data[0]['paymentStatus'] === null) {
						checkingPayment();
					} else {
						window.location.replace('doneUser.php');
					}
				}
			});
		} 
	});
</script>
</head>
<body> 
	<!-- banner -->
	<div style="background: none;" class="banner about-w3bnr">
		<!-- header -->
		<div class="header">
			<div style="background: rgba(64, 68, 105, 1);" class="w3ls-header"><!-- header-one --> 
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
									</li> 
									<li class="head-dpdn">
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
							<li><a href="index.php" >Home</a></li>	
								<li><a href="about.php">About</a></li> 
								<li><a href="restaurant.php" >Restaurant</a></li>
								<li><a href="products.php" >Food</a></li>
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
					</nav>
				</div>
			</div>
			<!-- //navigation -->
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumb -->  
	<div style="padding: 2em 0;" class="container">	
		<ol style="background: none;" class="breadcrumb w3l-crumbs">
			<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li> 
			
			<li class="active">Track Delivery</li>
		</ol>
	</div>
			  
	<!-- add-products -->
	<div>  
		<div style="padding: 0 0 4em 0;" class="container">
			<h3 class="w3ls-title">We've found Your Delivery Guy!</h3>
			<div id="names" class="add-products-row">
			<div id="map" style="float:left; margin-top: 3em; width: 67%; height: 36em;"></div>
					<?php
						include('class/mysql_crud.php');
						$db = new Database();
						$db->connect();
						
						$db->select('order_menu', 'menuID, quantity', NULL, 'orderID = '.$_GET['orderID'].'');
						$results = $db->getResult();
						$db->select('orders', '*', NULL, 'orderID = '.$_GET['orderID'].'');
						$orderss = $db->getResult();
						$db->select('delivery_person', '*', NULL, 'staffID = '.$orderss[0]['staffID'].'');
						$clientss = $db->getResult();
						$tot = $orderss[0]['subtotal'] + 5;
						$qua = 0;
						foreach($results as $result) {
							$qua += $result['quantity'];
						}
						echo
							'<div class="shopping-cart" style="float: left; box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.1); margin: 2.7em 2em 0;">
										<div class="shopping-cart-header"><i class="fa fa-shopping-cart cart-icon"></i><span class="badge">'.$qua.'</span>
											<div class="shopping-cart-total">
												<span id="tot" class="lighter-text">Total: RM'.sprintf('%0.2f', $tot).'</span>
												<span class="main-color-text"></span>
											</div>
										</div>
										<ul class="shopping-cart-items">
											<li class="clearfix">
												<span class="item-name">Delivery Guys Infomation</span>
												<span class="item-price">'.$clientss[0]['transportType'].'</span>
												<span class="item-quantity">'.$clientss[0]['platNo'].'</span>
											</li>
										</ul>
										<ul id="purchases" class="shopping-cart-items">';

										foreach($results as $result) {
											$db->select('menu', '*', NULL, 'menuID = '.$result['menuID']);
											$foods = $db->getResult();
											$db->select('supplier', '*', NULL, 'supplierName = "'.$foods[0]['supplierName'].'"');
											$supplier = $db->getResult();
											echo
											'<li class="clearfix">
												<div style="margin: 1em 0 1em 0;">
													<span style="font-size: 16px;">Restaurant: '.$supplier[0]['supplierName'].'</span></br>
													<span style="font-size: 16px;">Location: '.$supplier[0]['address'].'</span></br>
												</div>
												<img src="'.$foods[0]['menuImage'].'" alt="item1" width="50" height="50" />
												<span class="item-name">'.$foods[0]['menuName'].'</span>
												<span class="item-price">RM'.$foods[0]['menuPrice'].'</span>
												<span class="item-quantity">Quantity: '.$result['quantity'].'</span>
											</li>';
										}
									echo
										'</ul>
										<ul class="shopping-cart-items">
											<li style="margin-bottom: 4em;" class="clearfix">
												<span class="item-name">Amount to pay</span>
												<span class="item-price">Subtotal: </span>
												<span id="sub" class="item-quantity">RM'.$orderss[0]['subtotal'].'</span></br>
												<span class="item-price">Delivery Charge: </span>
												<span class="item-quantity">RM5.00</span>
											</li>
										</ul>
										<a hidden href="#" id="delivered" style="width: 100%" class="button">Order Delivered</a>
									</div>
									';
					?>
					<script>
						var map;
						function initMap() {
							var directionsService = new google.maps.DirectionsService;
							var directionsDisplay = new google.maps.DirectionsRenderer;
							var map = new google.maps.Map(document.getElementById('map'), {
								zoom: 6,
								center: {lat: 41.85, lng: -87.65}
							});
							directionsDisplay.setMap(map);
							calculateAndDisplayRoute(directionsService, directionsDisplay);
						}

						function calculateAndDisplayRoute(directionsService, directionsDisplay) {
							var waypts = []
							waypts.push({
								location: '<?php echo $supplier[0]['address']; ?>',
								stopover: true
							});

							directionsService.route({
								origin: 'UPM Kolej 6, Serdang, Selangor, Malaysia',
								destination: '<?php echo $orderss[0]['deliveryTo']; ?>',
								waypoints: waypts,
								optimizeWaypoints: true,
								travelMode: 'DRIVING'

							}, function(response, status) {
								if (status === 'OK') {
									directionsDisplay.setDirections(response);
								} else {
									window.alert('Directions request failed due to ' + status);
								}
							});
						}
					</script>
				</div> 
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEgVJUH2bVNp4EWv_wWkqM68XNNw62Bc8&libraries=places&callback=initMap" async defer></script>
			
	</div>
	<!-- //add-products --> 
	<!-- subscribe -->
	<div class="subscribe agileits-w3layouts"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
			<h4>Keep in touch!</h4> 
				<p>Feel free to click on our account!<br></p> 
				<ul>
				<li><a href="https://www.facebook.com/ " target=_blank class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="https://www.twitter.com/" target=_blank class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
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
						<li><a href="restaurant.php">Breakfast</a></li>
						<li><a href="restaurant.php">Lunch</a></li>
						<li><a href="restaurant.php">Dinner</a></li>
					</ul>  
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<div class="copyw3-agile"> 
		<div class="container">
		<center><p>&copy;2018 <a>Mint</a> All rights reserved.</p></center>
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