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
<script>
	$(document).ready(function(){
		
		var url = "" + window.location.href;
		var res = url.split("?");
		
		$("#locating").click(function(){
			var delivery_destination = $("#pac-input").val();
			var dest = "payment.php?" + res[1] + "&deliveryTo=" + delivery_destination;
			window.location.replace(dest);
		});
	});
</script>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      
    </style>
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
						<div class="cart cart box_1"> 
							<form action="#" method="post" class="last"> 
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="display" value="1" />
								<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
							</form>   
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
			<li class="active">Destination</li>
		</ol>
	</div>
			  
	<!-- add-products -->
	<div>  
		<div style="padding: 0 0 4em 0;" class="container">
			<h3 class="w3ls-title">Choose Your Delivery Destination</h3>
			<div id="map" style="margin-top: 3em; width: 100%; height: 30em;"></div>
				<div class="agileits_search">
					<input id="pac-input" type="text" size="50" placeholder="Enter Your Delivery Destination">
					<input type="submit" id="locating" value="Confirm Destination">
					<script>
						function initAutocomplete() {
							var map = new google.maps.Map(document.getElementById('map'), {
							center: {lat: 2.999695, lng: 101.710688},
							zoom: 13,
							});

							// Create the search box and link it to the UI element.
							var input = document.getElementById('pac-input');
							var input2 = document.getElementById('locating');
							var searchBox = new google.maps.places.SearchBox(input);
							map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
							map.controls[google.maps.ControlPosition.TOP_LEFT].push(input2);

							// Bias the SearchBox results towards current map's viewport.
							map.addListener('bounds_changed', function() {
							searchBox.setBounds(map.getBounds());
							});

							var markers = [];
							// Listen for the event fired when the user selects a prediction and retrieve
							// more details for that place.
							searchBox.addListener('places_changed', function() {
							var places = searchBox.getPlaces();

							if (places.length == 0) {
								return;
							}

							// Clear out the old markers.
							markers.forEach(function(marker) {
								marker.setMap(null);
							});
							markers = [];

							// For each place, get the icon, name and location.
							var bounds = new google.maps.LatLngBounds();
							places.forEach(function(place) {
								if (!place.geometry) {
								console.log("Returned place contains no geometry");
								return;
								}
								var icon = {
								url: place.icon,
								size: new google.maps.Size(71, 71),
								origin: new google.maps.Point(0, 0),
								anchor: new google.maps.Point(17, 34),
								scaledSize: new google.maps.Size(25, 25)
								};

								// Create a marker for each place.
								markers.push(new google.maps.Marker({
								map: map,
								icon: icon,
								title: place.name,
								position: place.geometry.location
								}));

								if (place.geometry.viewport) {
								// Only geocodes have viewport.
								bounds.union(place.geometry.viewport);
								} else {
								bounds.extend(place.geometry.location);
								}
							});
							map.fitBounds(bounds);
							});
						}
					</script>
				</div> 
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEgVJUH2bVNp4EWv_wWkqM68XNNw62Bc8&libraries=places&callback=initAutocomplete" async defer></script>
				<div class="clearfix"> </div>  	 
		</div>
	</div>
	<!-- //add-products --> 
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