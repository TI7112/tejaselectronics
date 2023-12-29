<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Tejas</title>
	<link rel="icon" href="img\Fevicon.jpg" type="img\Fevicon.jpg">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />


	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- Pic carousel -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>


<body>
<!-- HEADER -->
<header>

	<!-- MAIN HEADER -->

	<div id="header">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- LOGO -->
				<div class="col-md-3">
					<div class="header-logo">
						<a href="#" class="logo">
							<img src="img\Untitled-1.png" alt="Your Logo" width="150" height="50">
						</a>
					</div>
				</div>
				<!-- /LOGO -->

				<!-- SEARCH BAR -->
				<div class="col-md-6">
					<div class="header-search">
						<form>
							<input class="input" placeholder="Search here">
							<button class="search-btn">Search</button>
						</form>
					</div>
				</div>
				<!-- /SEARCH BAR -->

				<!-- ACCOUNT -->
				<div class="col-md-3 clearfix">
					<div class="header-ctn">
						<!-- MyAccount -->
						<div class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-user"></i>
								<span>My Account</span>
								<div class="qty">2</div>
							</a>
							<ul class="dropdown-menu">
								<li><a href="login and registration page.html">Login & SignUP</a></li>
								<li><a href="my account.html">My Profile</a></li>
								<li><a href="Logout.html">Logout</a></li>
								<!-- Add more dropdown items as needed -->
							</ul>
						</div>
						<!-- /MyAccount ->
							
							<!--/Cart -->

						<div class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-shopping-cart"></i>
								<span>Your Cart</span>
								<div class="qty">2</div>
							</a>
							<div class="cart-dropdown">
								<div class="cart-list">
									<div class="product-widget">
										<div class="product-img">
											<img src="img\Torche image\4.jpg" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-name"><a href="#">Emergency Light</a></h3>
											<h4 class="product-price"><span class="qty">1x</span>₹11,099.00</h4>
										</div>
										<button class="delete"><i class="fa fa-close"></i></button>
									</div>

									<div class="product-widget">
										<div class="product-img">
											<img src="img\TV\Untitled-2.jpg" alt="">
										</div>
										<div class="product-body">
											<h3 class="product-name"><a href="#">tv</a></h3>
											<h4 class="product-price"><span class="qty">1x</span>₹18,999.00</h4>
										</div>
										<button class="delete"><i class="fa fa-close"></i></button>
									</div>
								</div>
								<div class="cart-summary">
									<small>3 Item(s) selected</small>
									<h5>SUBTOTAL:₹30,098.00</h5>
								</div>
								<div class="cart-btns">
									<a href="wishlist.html">View Cart</a>
									<a href="checkout.html">Checkout <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /Cart -->
						<!-- Wishlist -->
						<div>
							<a href="wishlist.html">
								<i class="fa fa-heart-o"></i>
								<span>Your Wishlist</span>
								<div class="qty">2</div>
							</a>
						</div>
						<!-- /Wishlist ->
							<!-- Menu Toogle -->
						<div class="menu-toggle">
							<a href="#">
								<i class="fa fa-bars"></i>
								<span>Menu</span>
							</a>
						</div>
						<!-- /Menu Toogle -->
					</div>
				</div>
				<!-- /ACCOUNT -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>
	<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="store.html">Store</a></li>
					<!-- Categories Dropdown -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="AC.html">AC</a></li>
							<li><a href="Tv.html">TV</a></li>
							<li><a href="Speeker.html">Speakers</a></li>
							<li><a href="Induction.html">Induction Cooktops</a></li>
							<li><a href="Torch image.html">Emergency Lights</a></li>
							<li><a href="LED Bulb.html">Light Bulbs</a></li>
							<li><a href="fan.html">Fans</a></li>
							<li><a href="Refrigerator.html">Refrigerators</a></li>
							<li><a href="Mixer.html">Mixers</a></li>
							<li><a href="Ro.html">RO Water Purifiers</a></li>
							<li><a href="Dry iron.html">Dry Irons</a></li>
							<li><a href="Dishwasher.html">Dishwashers</a></li>
							<li><a href="Washing Machine .html">Washing Machines</a></li>
							<li><a href="Air Cooler.html">Air Coolers</a></li>
							<li><a href="Geyser.html">Geysers</a></li>
							<li><a href="Immersion Heater.html">Immersion Heaters</a></li>
							<!-- Add more category items as needed -->
						</ul>
					</li>

					<!-- About Us Dropdown -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> More About Us <b
								class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="About_US.html">About US</a></li>
							<li><a href="mantiance.html">Maintanence Services</a></li>
							<li><a href="Contact_Us.html">Contact Us</a></li>
						</ul>
					</li>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->


	<!--category slides-->

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<div class="category-slider">
			<div class="slider-content">
				<div class="slider" id="slider">
					<div class="slide">
						<a href="product_link.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\percentage.webp" width="90" height="auto" alt="">
						</a>
					</div>

					<div class="slide">
						<a href="Air Cooler.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\cooller.webp" width="90" height="auto" alt="">
						</a>
					</div>

					<div class="slide">
						<a href="Dishwasher.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\diswasher.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Dry iron.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\dry iron.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="fan.html"> <!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\fan2.webp" width="90" height="auto" alt="">
						</a>
					</div>

					<div class="slide">
						<a href="Refrigerator.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\firij.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Induction.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\induction.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Ro.html"> <!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\Ro.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Mixer.html"> <!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\mixer.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Immersion Heater.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\rod.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Speeker.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\sound.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="LED Bulb.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\spot light.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Geyser.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\geysey .webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Torch image.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\torches.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="LED Bulb.html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\tubelight.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Washing Machine .html">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\washing machine.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="Tv.html"> <!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\ledt tv.webp" width="90" height="auto" alt="">
						</a>
					</div>
					<div class="slide">
						<a href="https://evtejas.com/">
							<!-- Replace "product_link.html" with the actual link to your product -->
							<img src="img\product design\bike.webp" width="90" height="auto" alt="">
						</a>
					</div>

					<!-- Add more slides with images as needed -->
				</div>
			</div>
		</div>

		<!-- Add more category slides with images -->
		<!-- Add the right and left buttons to your HTML -->
		</div>
		<script src="js\script.js"></script>

	

	<!-- Pic carousel -->

	<div id="clientCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#clientCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#clientCarousel" data-slide-to="1"></li>
            <li data-target="#clientCarousel" data-slide-to="2"></li>
            <li data-target="#clientCarousel" data-slide-to="3"></li>
            <li data-target="#clientCarousel" data-slide-to="4"></li>
            <!-- Add more indicators for additional images if needed -->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img\banner_img\banner-6555f02e0ccd5.webp" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="img\banner_img\banner22-6555f02d1e7f7.webp" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="img\banner_img\banner33-6555f036a4e0c.webp" class="img-fluid" alt="">
            </div>
			<div class="item">
                <img src="img\banner_img\banner44-6555f03a04aa6.webp" class="img-fluid" alt="">
            </div>
			<div class="item">
                <img src="img\banner_img\banner55-6555f043b4c8a.webp" class="img-fluid" alt="">
            </div>
            <!-- Add more items for additional images if needed -->
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#clientCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#clientCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

<!-- Pic carousel -->
	
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- shop -->
				<div class="col-lg-4 col-md-4  col-xs-12">
					<div class="shop">
						<div class="shop-img">
							<img src="img\fan\7.jpg" alt="">
						</div>
						<div class="shop-body">
							<h3>Fan</h3>
							<a href="fan.html" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->
				<!-- shop -->
				<div class="col-lg-4 col-md-4  col-xs-12">
					<div class="shop">
						<div class="shop-img">
							<img src="img\Dry iron\1.jpg" alt="">
						</div>
						<div class="shop-body">
							<h3>Dry iron</h3>
							<a href="Dry iron.html" class="cta-btn">Shop now <i
									class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->
				<!-- shop -->
				<div class="col-lg-4 col-md-4  col-xs-12">
					<div class="shop">
						<div class="shop-img">
							<img src="img\Mixer\2.jpg" alt="">
						</div>
						<div class="shop-body">
							<h3>Mixer</h3>
							<a href="Mixer.html" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-lg-4 col-md-4  col-xs-12">
					<div class="shop">
						<div class="shop-img">
							<img src="img\Ro\1.jpg" alt="">
						</div>
						<div class="shop-body">
							<h3>RO</h3>
							<a href="Ro.html" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-lg-4 col-md-4  col-xs-12">
					<div class="shop">
						<div class="shop-img">
							<img src="img\Air Cooler image\11.webp" alt="">
						</div>
						<div class="shop-body">
							<h3>Air Cooler</h3>
							<a href="Air Cooler.html" class="cta-btn">Shop now <i
									class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

				<!-- shop -->
				<div class="col-lg-4 col-md-4  col-xs-12">
					<div class="shop">
						<div class="shop-img">
							<img src="img\Washing Machine image\3.jpg" alt="">
						</div>
						<div class="shop-body">
							<h3>Washing Machine</h3>
							<a href="Washing Machine .html" class="cta-btn">Shop now <i
									class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div>
				</div>
				<!-- /shop -->

			</div>
			<!-- /row -->
			</section>

			<!-- SECTION -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<!-- shop -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="shop">
								<div class="shop-img">
									<img src="img\Speeker\1.jpg" alt="">
								</div>
								<div class="shop-body">
									<h3>Speeker</h3>
									<a href="Speeker.html" class="cta-btn">Shop now <i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->
						<!-- shop -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="shop">
								<div class="shop-img">
									<img src="img\Geyser\3.jpg" alt="">
								</div>
								<div class="shop-body">
									<h3>Geyser</h3>
									<a href="Geyser.html" class="cta-btn">Shop now <i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->

						<!-- shop -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="shop">
								<div class="shop-img">
									<img src="img\Induction image\2.jpg" alt="">
								</div>
								<div class="shop-body">
									<h3>Induction</h3>
									<a href="Induction.html" class="cta-btn">Shop now <i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->

						<!-- shop -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="shop">
								<div class="shop-img">
									<img src="img\Dishwasher\1.jpg" alt="">
								</div>
								<div class="shop-body">
									<h3>Dishwasher</h3>
									<a href="Dishwasher.html" class="cta-btn">Shop now <i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->

						<!-- shop -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="shop">
								<div class="shop-img">
									<img src="img\Immersion Heater\1.jpg" alt="">
								</div>
								<div class="shop-body">
									<h3>Immersion</h3>
									<a href="Immersion Heater.html" class="cta-btn">Shop now <i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->
						<!-- shop -->
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="shop">
								<div class="shop-img">
									<img src="img\TV\Untitled-2.jpg" alt="">
								</div>
								<div class="shop-body">
									<h3>TV</h3>
									<a href="Tv.html" class="cta-btn">Shop now <i
											class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->
						</section>
						<!-- SECTION -->
						<div class="section">
							<!-- container -->
							<div class="container">
								<!-- row -->
								<div class="row">
									<!-- shop -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="shop">
											<div class="shop-img">
												<img src="img\AC\ac.jpg" alt="">
											</div>
											<div class="shop-body">
												<h3>AC</h3>
												<a href="AC.html" class="cta-btn">Shop now <i
														class="fa fa-arrow-circle-right"></i></a>
											</div>
										</div>
									</div>
									<!-- /shop -->

									<!-- shop -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="shop">
											<div class="shop-img">
												<img src="img\LE.jpg" alt="">
											</div>
											<div class="shop-body">
												<h3>LED Bulb</h3>
												<a href="LED Bulb.html" class="cta-btn">Shop now <i
														class="fa fa-arrow-circle-right"></i></a>
											</div>
										</div>
									</div>
									<!-- /shop -->

									<!-- shop -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="shop">
											<div class="shop-img">
												<img src="img\Torche image\4.jpg" alt="">
											</div>
											<div class="shop-body">
												<h3>LED Torch</h3>
												<a href="Torch image.html" class="cta-btn">Shop now <i
														class="fa fa-arrow-circle-right"></i></a>
											</div>
										</div>
									</div>
									<!-- /shop -->
									<!-- shop -->
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="shop">
											<div class="shop-img">
												<img src="img\Refrigerator image\6.jpg" alt="">
											</div>
											<div class="shop-body">
												<h3>Refrigerator</h3>
												<a href="Refrigerator.html" class="cta-btn">Shop now <i
														class="fa fa-arrow-circle-right"></i></a>
											</div>
										</div>
									</div>
									<!-- /shop -->
									</section>
									
						<!-- section title -->
						<div class="col-md-12">
							<div class="section-title">
								<h3 class="title">New Products</h3>
								<div class="section-nav">
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a data-toggle="Dry iron.html"
												href="Dry iron.html">Dry iron</a></li>
										<li><a data-toggle="Refrigerator.html"
												href="Refrigerator.html">Fridge</a></li>
										<li><a data-toggle="Washing Machine .html"
												href="Washing Machine .html">Washing Machine</a></li>
										<li><a data-toggle="fan.html" href="fan.html">Fan</a></li>
										<li><a data-toggle="Speeker.html" href="Speeker.html">Speeker</a>
										</li>

									</ul>
								</div>
							</div>
						</div>
						<!-- /section title -->
									<!-- Products tab & slick -->
									<div class="col-md-12">
										<div class="row">
											<div class="products-tabs">
												<!-- tab -->
												<div id="tab1" class="tab-pane active">
													<div class="products-slick" data-nav="#slick-nav-1">
														<!-- product -->
														<div class="product">
															<div class="product-img">
																<img src="img\product01.jpg" alt="">
																<div class="product-label">
																	<span class="sale">-30%</span>
																	<span class="new">NEW</span>
																</div>
															</div>
															<div class="product-body">
																<p class="product-category"></p>
																<h3 class="product-name"><a href="Refrigerator.html">Fridge</a></h3>
																<h4 class="product-price">₹18999.00 <del
																		class="product-old-price">₹26000.00</del></h4>
																<div class="product-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</div>
																<div class="product-btns">
																	<button class="add-to-wishlist"><i
																			class="fa fa-heart-o"></i><span
																			class="tooltipp">add to
																			wishlist</span></button>
																	<button class="add-to-compare"><i
																			class="fa fa-exchange"></i><span
																			class="tooltipp">add to
																			compare</span></button>
																	<button class="quick-view"><i
																			class="fa fa-eye"></i><span
																			class="tooltipp">quick view</span></button>
																</div>
															</div>
															<div class="add-to-cart">
																<button class="add-to-cart-btn"><i
																		class="fa fa-shopping-cart"></i> add to
																	cart</button>
															</div>
														</div>
														<!-- /product -->

														<!-- product -->
														<div class="product">
															<div class="product-img">
																<img src="img\product03.jpg" alt="">
																<div class="product-label">
																	<span class="new">NEW</span>
																</div>
															</div>
															<div class="product-body">
																<p class="product-category"></p>
																<h3 class="product-name"><a href="Ro.html">Water Purifier</a></h3>
																<h4 class="product-price">₹16,999.00<del
																		class="product-old-price">₹18,449.00</del></h4>
																<div class="product-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="product-btns">
																	<button class="add-to-wishlist"><i
																			class="fa fa-heart-o"></i><span
																			class="tooltipp">add to
																			wishlist</span></button>
																	<button class="add-to-compare"><i
																			class="fa fa-exchange"></i><span
																			class="tooltipp">add to
																			compare</span></button>
																	<button class="quick-view"><i
																			class="fa fa-eye"></i><span
																			class="tooltipp">quick view</span></button>
																</div>
															</div>
															<div class="add-to-cart">
																<button class="add-to-cart-btn"><i
																		class="fa fa-shopping-cart"></i> add to
																	cart</button>
															</div>
														</div>

														<!-- product -->
														<div class="product">
															<div class="product-img">
																<img src="img\product12.jpg" alt="">
																<div class="product-label">
																	<span class="sale">-30%</span>
																	<span class="new">NEW</span>
																</div>
															</div>
															<div class="product-body">
																<p class="product-category"></p>
																<h3 class="product-name"><a href="Dishwasher.html">Dish Washer</a></h3>
																<h4 class="product-price">₹5,34,999.00<del
																		class="product-old-price">₹5,99,999.00</del></h4>
																<div class="product-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</div>
																<div class="product-btns">
																	<button class="add-to-wishlist"><i
																			class="fa fa-heart-o"></i><span
																			class="tooltipp">add to
																			wishlist</span></button>
																	<button class="add-to-compare"><i
																			class="fa fa-exchange"></i><span
																			class="tooltipp">add to
																			compare</span></button>
																	<button class="quick-view"><i
																			class="fa fa-eye"></i><span
																			class="tooltipp">quick view</span></button>
																</div>
															</div>
															<div class="add-to-cart">
																<button class="add-to-cart-btn"><i
																		class="fa fa-shopping-cart"></i> add to
																	cart</button>
															</div>
														</div>
														<!-- /product -->
														<!-- product -->
														<div class="product">
															<div class="product-img">
																<img src="img\Air Cooler image\6.webp" alt="">
																<div class="product-label">
																	<span class="sale">-30%</span>
																</div>
															</div>
															<div class="product-body">
																<p class="product-category"></p>
																<h3 class="product-name"><a href="Air Cooler.html">Cooler</a></h3>
																<h4 class="product-price">₹12,999.00<del
																		class="product-old-price">₹19,999.00</del></h4>
																<div class="product-rating">
																</div>
																<div class="product-btns">
																	<button class="add-to-wishlist"><i
																			class="fa fa-heart-o"></i><span
																			class="tooltipp">add to
																			wishlist</span></button>
																	<button class="add-to-compare"><i
																			class="fa fa-exchange"></i><span
																			class="tooltipp">add to
																			compare</span></button>
																	<button class="quick-view"><i
																			class="fa fa-eye"></i><span
																			class="tooltipp">quick view</span></button>
																</div>
															</div>
															<div class="add-to-cart">
																<button class="add-to-cart-btn"><i
																		class="fa fa-shopping-cart"></i> add to
																	cart</button>
															</div>
														</div>
														<!-- /product -->

														<!-- product -->
														<div class="product">
															<div class="product-img">
																<img src="img\product05.jpg" alt=""></div>
															<div class="product-body">
																<p class="product-category"></p>
																<h3 class="product-name"><a href="Tv.html">TV</a></h3>
																<h4 class="product-price">₹22,999.00<del
																		class="product-old-price">₹25,999.00</del></h4>
																<div class="product-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</div>
																<div class="product-btns">
																	<button class="add-to-wishlist"><i
																			class="fa fa-heart-o"></i><span
																			class="tooltipp">add to
																			wishlist</span></button>
																	<button class="add-to-compare"><i
																			class="fa fa-exchange"></i><span
																			class="tooltipp">add to
																			compare</span></button>
																	<button class="quick-view"><i
																			class="fa fa-eye"></i><span
																			class="tooltipp">quick view</span></button>
																</div>
															</div>
															<div class="add-to-cart">
																<button class="add-to-cart-btn"><i
																		class="fa fa-shopping-cart"></i> add to
																	cart</button>
															</div>
														</div>
														<!-- /product -->

														<!-- product -->
														<div class="product">
															<div class="product-img">
																<img src="img\product.06.jpg" alt="">
															</div>
															<div class="product-body">
																<p class="product-category"></p>
																<h3 class="product-name"><a href="Washing Machine .html">Washing Machine</a>
																</h3>
																<h4 class="product-price">₹19,999.00<del
																		class="product-old-price">₹24,999.00</del></h4>
																<div class="product-rating">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</div>
																<div class="product-btns">
																	<button class="add-to-wishlist"><i
																			class="fa fa-heart-o"></i><span
																			class="tooltipp">add to
																			wishlist</span></button>
																	<button class="add-to-compare"><i
																			class="fa fa-exchange"></i><span
																			class="tooltipp">add to
																			compare</span></button>
																	<button class="quick-view"><i
																			class="fa fa-eye"></i><span
																			class="tooltipp">quick view</span></button>
																</div>
															</div>
															<div class="add-to-cart">
																<button class="add-to-cart-btn"><i
																		class="fa fa-shopping-cart"></i> add to
																	cart</button>
															</div>
														</div>
														<!-- /product -->
													</div>
													<div id="slick-nav-1" class="products-slick-nav"></div>
												</div>
												<!-- /tab -->
											</div>
										</div>
									</div>
									<!-- Products tab & slick -->
								</div>
								<!-- /row -->
							</div>
							<!-- /container -->
						</div>
						<!-- /SECTION -->




						<!-- HOT DEAL SECTION -->
						<div id="hot-deal" class="section">
							<!-- container -->
							<div class="container">
								<!-- row -->
								<div class="row">
									<div class="col-md-12">
										<div class="hot-deal">
											<img src="img\hotdeal.webp" alt="Your Image Description">
											<h2 class="text-uppercase">hot deal this week</h2>
											<a class="primary-btn cta-btn" href="#">Shop now</a>
										</div>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /container -->
						</div>
						<!-- /HOT DEAL SECTION -->

						<!-- SECTION -->
						<div class="section">
							<!-- container -->
							<div class="container">
								<!-- row -->
								<div class="row">

								<!-- NEWSLETTER -->
									<div id="newsletter" class="section">
										<!-- container -->
										<div class="container">
											<!-- row -->
											<div class="row">
												<div class="col-md-12">
													<div class="newsletter">
														<p>Sign Up for the <strong>NEWSLETTER</strong></p>
														<form>
															<input class="input" type="email"
																placeholder="Enter Your Email">
															<button class="newsletter-btn"><i
																	class="fa fa-envelope"></i> Subscribe</button>
														</form>
														<ul class="newsletter-follow">
															<li>
																<a href="https://www.facebook.com/tejaskamakhyagroup/"><i
																		class="fa fa-facebook"></i></a>
															</li>
															<li>
																<a href="https://twitter.com/tejaskamakhya/"><i
																		class="fa fa-twitter"></i></a>
															</li>
															<li>
																<a href="https://www.instagram.com/tejaskamakhyagroup/"><i
																		class="fa fa-instagram"></i></a>
															</li>
															<li>
																<a href="https://in.pinterest.com/tejaskamakhyagroup/"><i
																		class="fa fa-pinterest"></i></a>
															</li>
															<li>
																<a href="https://www.linkedin.com/company/tejas-kamakhya-group/"><i
																		class="fa fa-linkedin-square"></i></a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- /row -->
										</div>
										<!-- /container -->
									</div>
								<!-- /NEWSLETTER -->
								<!-- FOOTER -->
<footer id="footer">
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">About Us</h3>
						<p>TEJAS is the Best Indian Electronic products
							manufacturing company that was established in vision
							Make in India with a mission Enhancing Lives Through
							innovative Technology to create Electronic Products that
							have good quality. Lower running costs Low maintenance
							and good performances</p>
						<ul class="footer-links"><br>
							<li><a href="https://maps.app.goo.gl/TXekDoftvV6DywsD6."><i class="fa fa-map-marker"></i>
									Kamakhya Group, 4th Floor, TC 34,V/2, Levana
									Cyber Tower, Vibhuti Khand, Gomti Nagar,
									Lucknow, Uttar Pradesh 226010.</a></li>
							<li><a href="#"><i class="fa fa-phone"></i>0522-3166636,
									73111 54913, <p>1800 8430828</p></a></li>
							<li><a href="#"><i
										class="fa fa-envelope-o"></i>sales@kamakhyagroups.com</a>
							</li>
							<li><a href="https://tejasonline.in/"><i
										class="fa fa-Site"></i>tejasonline.in</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Categories</h3>
						<ul class="footer-links">
							<li><a href="Tv.html">TV</a></li>
							<li><a href="AC.html">AC</a></li>
							<li><a href="Refrigerator.html">Fridge</a></li>
							<li><a href="Washing Machine .html">Waching Machine</a>
							</li>
							<li><a href="Torch image.html">Torch</a></li>
						</ul>
					</div>
				</div>

				<div class="clearfix visible-xs"></div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Information</h3>
						<ul class="footer-links">
							<li><a href="About_US.html">About Us</a></li>
							<li><a href="Contact_Us.html">Contact Us</a></li>
							<li><a href="privacy-and-polices.html">Privacy Policy</a></li>
							<li><a href="return_and_REFUND_POLICES.HTML">Returns And Refund Polices</a>
							</li>
							<li><a href="terms-and-condition.html">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Our Services</h3>
						<ul class="footer-links">
							<li><a
									href="https://kamakhyagroups.com/">Construction</a>
							</li>
							<li><a href="https://evtejas.com/">Electric Vehicles</a>
							</li>
							<li><a href="https://kamakhyagroups.com/">Solar
									Panels</a></li>
							<li><a href="#">Electronic Goods</a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /top footer -->

	<!-- bottom footer -->
	<div id="bottom-footer" class="section">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-payments">
						<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
						<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
					</ul>
					<span class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						&copy;
						<script>document.write(new Date().getFullYear());</script>
						All rights reserved | Tejas Group </a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</span>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>