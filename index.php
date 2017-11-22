<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="service station booking web site">
	<meta name="author" content="www.striking.lk">
	<link rel="icon" href="">
	<title>Service Station</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-submenu.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/slick.css" rel="stylesheet">	
    <link href="css/custom.css" rel="stylesheet">
  	<link href="css/color-violet.css" rel="stylesheet">
	<link href="css/color-blue.css" rel="stylesheet">
	<link href="css/color-green.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
  	<link href="css/tools.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="home color-green">	<div class="tools">
		<span class="toggle">
        <img src="images/color-icon.png" class="img-responsive" alt=""></span>
		<a href="index.php#" class="color-yellow">Yellow</a>
		<a href="index.php#" class="color-green">Green</a>
		<a href="index.php#" class="color-blue">Blue</a>
		<a href="index.php#" class="color-violet">Violet</a>
	</div>
	<!-- Loader -->
	<div id="loader-wrapper" style="display: none;">
		<div class="loader">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="subline"></div>
			<div class="loader-circle-1">
				<div class="loader-circle-2"></div>
			</div>
			<div class="needle"></div>
			<div class="loading">Loading</div>
		</div>
	</div>
	<!-- //Loader -->
	<!-- Header -->
	<header class="page-header header-sticky">
		<nav class="navbar" id="slide-nav">
			<div class="container">
				<div class="header-row">				
                	<div class="logo">
						<a href="index.html">
							<!-- add logo image -->
						</a>
					</div>
					<div class="header-right">
						<button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
						<div class="header-right-top">
							<div class="address">
								Monday-Saturday <span class="custom-color">8:30AM - 5:30PM</span>
							</div>
							<a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm">
                            	<i class="fa fa-calendar" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;Appointment</span>
                            </a>
						</div>
						<div class="header-right-bottom">
							<div class="header-phone">
                            	<span class="text">SCHEDULE YOUR APPOINTMENT TODAY</span>
                                <span class="phone-number">+94-711790370</span>
							</div>
						</div>
					</div>
				</div>
				<div id="slidemenu">
					<div class="row">
						<div class="col-md-11">
							<div class="close-menu"><i class="icon-close-cross"></i></div>
							<ul class="nav navbar-nav">
								<li class="active">
                                	<a href="#"><span>Home</span></a>
                                </li>
								<li>
                                	<a href="#"><span>About Us</span></a>
                                </li>
								<li>
                                	<a href="#"><span>Pricing</span></a>
                                </li>
								<li>
                                	<a href="#"><span>FAQ</span></a>
                                </li>
								<li>
                                	<a href="#"><span>Shop</span></a>
                                </li>
								<li>
                                	<a href="#"><span>Contacts</span></a>
                                </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav><div id="navbar-height-col"></div>
	</header>
	<!-- // Header -->
	<!-- Slider -->
	<div id="mainSliderWrapper">
		<div id="mainSlider" class="slick-initialized slick-slider" style="height: 589px;background-image:url(images/1236463291d1c80afcc20a2bfb8894c8.jpg);background-repeat:no-repeat;background-size:cover;">
        </div>
    </div>
	<!-- Slider -->
	<!-- Content  -->
	<div id="pageContent">
		<!-- Under Slider Banner -->
		<div class="block banner-under-slider" style="background-image:url(images/1.jpg);background-repeat:no-repeat;background-size:cover;">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h2>Schedule A Booking</h2>
								<h2 class="h-lg text-right"><span class="color">For Your Vehicle Service</span></h2>
							</div>
							<div class="col-md-6">
								<p>We realize that you lead a busy life, so we've made it easy for you to schedule your service.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6">
						<div class="row">
							<div class="col-md-6 col-lg-8">
								<div class="negative-margin"><img src="images/banner-key.png" class="img-responsive" alt=""></div>
							</div>
							<div class="col-md-6 col-lg-4 action hidden-xs">
								<a href="#" data-toggle="modal" data-target="#appointmentForm" class="btn btn-full btn-border appointment"><span>Schedule</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- // Under Slider Banner -->
		<!-- Services Banner Block -->
		<div class="block">
			<div class="container">
				<div class="text-center">
					<h2 class="h-lg">What We Do</h2>
					<p class="info">We offer full service auto repair &amp; maintenance</p>
				</div>
				<div class="services-block services-carousel">
					<div class="service">
						<div class="image">
                        	<img src="images/service-1-bg.png" alt="#">
                        </div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Preventative</h3>
									<h2>Maintenance</h2>
									<div class="text">The best way to minimize breakdowns is doing routine maintenance
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
                        	<img src="images/service-2-bg.jpg" alt="#">
					</div>
					<div class="service">
						<div class="image">
                        	<img src="images/service-3-bg.jpg" alt="#">
                        </div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Common</h3>
									<h2>Repairs</h2>
									<div class="text">We have over 30 common car
										<br>repairsand the list is growing</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
                        	<img src="images/service-4-bg.jpg" alt="#">
					</div>
					<div class="service dark">
						<div class="image">
                        	<img src="images/service-5-bg.jpg" alt="#">
                        </div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									<h3>Brake</h3>
									<h2>Repair &amp; Service</h2>
									<div class="text">Brake maintenance is important
										<br> in helping ensure the safety of you
										<br> and your passengers
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="service">
                        	<img src="images/service-6-bg.jpg" alt="#">
					</div>
				</div>
			</div>
		</div>
		<!-- //Services Banner Block -->
		<!-- Services List Block -->
		<div class="block bg-1" style="background-image:url(images/modern-4k-car-wallpaper-in-picture-t1xy-with-4k-car-wallpaper-new-on-wallpapers.jpg);background-repeat:no-repeat;background-size:cover;">
			<div class="container">
				<h2 class="h-lg text-center">Our <span class="color">Services</span></h2>
				<p class="info text-center">Below are some of the many auto repair services we offer:</p>
				<div class="row" id="slideMobile">
					<div class="col-sm-4 col-md-4">
						<ul class="marker-list">
							<li>FREE Loaner Cars</li>
							<li>FREE Shuttle Service</li>
							<li>General Auto Repair &amp; Maintenance</li>
							<li>Transmission Repair &amp; Replacement</li>
							<li>Manufacturer Recommended Service</li>
							<li>Brake Repair and Replacement</li>
							<li>Air Conditioning A/C Repair</li>
							<li>Tire Repair and Replacement</li>
						</ul>
					</div>
					<div class="col-sm-4 col-md-4 view-more-mobile">
						<ul class="marker-list">
							<li>Fuel System Repair</li>
							<li>Exhaust System Repair</li>
							<li>Engine Cooling System Maintenance</li>
							<li>Electrical Diagnostics</li>
							<li>Starting and Charging Repair</li>
							<li>Wheel Alignment</li>
							<li>CV Axles</li>
							<li>Computer Diagnostic Testing
							</li>
						</ul>
					</div>
					<div class="col-sm-4 col-md-4 view-more-mobile">
						<ul class="marker-list">
							<li>Vehicle Preventative Maintenance</li>
							<li>State Emissions Inspection</li>
							<li>Emission Repair Facility</li>
							<li>Tune Up</li>
							<li>Oil Change</li>
							<li>Brake Job / Brake Service</li>
							<li>Engine Cooling System Flush &amp; Repair</li>
							<li>Steering and Suspension Work</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- //Services List Block -->
		<!-- How It Works -->
		<div class="block bg-2" style="background-image:url(images/2.jpg);background-repeat:no-repeat;background-size:cover;">
			<div class="container">
				<h2 class="h-lg text-center">How It <span class="color">Works</span></h2>
				<div class="row how-works-row shifted">
					<div class="col-sm-6 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="images/how-works-img-1.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>1</span></div>
									<div class="text">
										<h5>Visit The Web Site</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="images/how-works-img-2.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>2</span></div>
									<div class="text">
										<h5>Make A Booking</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="images/how-works-img-3.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>3</span></div>
									<div class="text">
										<h5>Come On Time</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="images/how-works-img-4.jpg" alt=""></div>
							</div>
							<div class="caption">
								<div class="inside">
									<div class="number"><span>4</span></div>
									<div class="text">
										<h5>Get Your Vehicle Serviced</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //How It Works -->
		<!-- Services Block -->
		<div class="block">
			<div class="container">
				<h2 class="h-lg text-center">Why Choose Certified Service?</h2>
				<p class="info text-center">Years of experience and customer oriented pleasant staff to serve you...</p>
				<div class="row text-icon-carousel slick-initialized slick-slider">
					<div aria-live="polite" class="slick-list draggable" tabindex="0">
                    	<div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
                        	<div class="col-sm-4 col-md-4 slick-slide slick-active" data-slick-index="0" aria-hidden="false" style="width: 400px;">
								<div class="text-icon">
									<div class="icon-wrapper"><span><i class="fa fa-mobile"></i><span class="icon-hover"></span></span>
									</div>
                                        <h3 class="title" style="height: 36px;">Easy</h3>
                                        <p class="text" style="height: 48px;">Just a click away from scheduling a booking for your vehicle service</p>
								</div>
							</div>
                            <div class="col-sm-4 col-md-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 400px;">
							<div class="text-icon">
								<div class="icon-wrapper"><span><i class="fa fa-users"></i><span class="icon-hover"></span></span>
								</div>
                                <h3 class="title" style="height: 36px;">Friendly</h3>
                                <p class="text" style="height: 48px;">Friendly staff waiting to serve you</p>
							</div>
						</div>
                        <div class="col-sm-4 col-md-4 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;">
							<div class="text-icon">
								<div class="icon-wrapper"><span><i class="fa fa-car"></i><span class="icon-hover"></span></span>
								</div>
                                <h3 class="title" style="height: 36px;">Quality</h3>
                                <p class="text" style="height: 48px;">We are devoted to give the best service to our customers</p>
							</div>
						</div>
                    	</div>
                	</div>
				</div>
			</div>
		</div>
		<!-- //Services Block -->
		<!-- Testimonials Block
		<div class="block bg-3">
			<div class="container-fluid">
				<h2 class="h-lg text-center">What <span class="color">Our Clients</span> Say</h2>
				<div class="testimonials-carousel slick-initialized slick-slider">
					<div aria-live="polite" class="slick-list draggable" tabindex="0">
                    	<div class="slick-track" style="opacity: 1; width: 5396px;">
                        	<div class="testimonials slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1349px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
								<div class="testimonials-item">
									<div class="inside">
										<div class="meta">
                                        	<span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span>
                                            <span class="username">Joseph C. Lane</span>
                                     	</div>
										<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
									</div>
									<div class="bg-image" style="background-image: url(images/testimonial-bg-1.jpg);"></div>
									</div>
									<div class="testimonials-item testimonials-item--dark">
										<div class="inside">
											<div class="meta">
                                            	<span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span>
                                            </div>
											<div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
											</div>
											<div class="bg-image" style="background-image: url(images/testimonial-bg-2.jpg);"></div>
										</div>
									</div>
                                    <div class="testimonials slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 800; opacity: 0;">
										<div class="testimonials-item testimonials-item--dark">
											<div class="inside">
												<div class="meta">
                                                	<span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span>
                                                </div>
												<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
											</div>
											<div class="bg-image" style="background-image: url(images/testimonial-bg-2.jpg);"></div>
										</div>
										<div class="testimonials-item">
											<div class="inside">
												<div class="meta">
                                                	<span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph M. Fischer</span>
                                                </div>
												<div class="text">Fast and painless service, very happy with this establishment. I Highly Recommend them. I had my semiannual cleaning and checkup. And as always, it was an excellent experience.</div>
											</div>
											<div class="bg-image" style="background-image: url(images/testimonial-bg-1.jpg);"></div>
										</div>
									</div>
                                    <div class="testimonials slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1349px; position: relative; left: -2698px; top: 0px; z-index: 800; opacity: 0;">
										<div class="testimonials-item">
											<div class="inside">
												<div class="meta">
                                                	<span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span><span class="username">Joseph C. Lane</span>
                                                </div>
												<div class="text">Yesterday's crown preparation went great. I expected the same level of discomfort that I had experienced with another crown done by different dentist. Technique caused so much less difficulty that I went away with a smile on my face.</div>
										</div>
										<div class="bg-image" style="background-image: url(images/testimonial-bg-1.jpg);"></div>
										</div>
									</div>
                                </div>
                            </div>
				<ul class="slick-dots" style="display: block;">
                	<li class="" aria-hidden="true"><button type="button" data-role="none">1</button></li>
                    <li aria-hidden="true" class=""><button type="button" data-role="none">2</button></li>
                    <li aria-hidden="true" class=""><button type="button" data-role="none">3</button></li>
                    <li aria-hidden="false" class="slick-active"><button type="button" data-role="none">4</button></li>
                </ul>
              </div>
			</div>
		</div>
        Testimonials Block -->
		<!-- Statistics Block -->
		<div class="block">
			<div class="container">
				<h2 class="h-lg text-center">Some Statistics <span class="color">About Us</span></h2>
				<p class="info text-center">Auto Repair Technical Statistics You Must Know</p>
				<div class="row" id="counterBlock">
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="5" data-speed="1000">5</span></span><span class="icon"><i class="fa fa-rocket"></i></span></div>
							<div class="text">
								<h5>Years of experience</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="32" data-speed="1000">10</span></span><span class="icon"><i class="fa fa-users"></i></span></div>
							<div class="text">
								<h5>Staff &amp; workers</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="100" data-speed="1000">100</span></span><span class="icon"><i class="fa fa-child"></i></span></div>
							<div class="text">
								<h5>Satisfied customers</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="150" data-speed="1000">150</span></span><span class="icon"><i class="fa fa-bus"></i></span></div>
							<div class="text">
								<h5>Vehicles Serviced</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Statistics Block -->
		<!-- Appointment Block -->
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="text-appointment">
							<h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
							<p class="info">Your Automotive Service Specialist</p>
							<h2 class="h-phone">Call: +94-711790370</h2>
							<div class="btn-inline">
								<a class="btn btn-invert" href="#" data-toggle="modal" data-target="#appointmentForm"><span>Appointment</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="img-move animation" data-animation="fadeInRight" data-animation-delay="0s" style="animation-delay: 0s;">
							<img src="images/img-car-move.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Appointment Block -->
	</div>
	<!-- // Content  -->
	<!-- Footer -->
	<div class="page-footer">
		<div class="footer-bottom">
		  <div class="container">
		    <div class="copyright">
		      <div class="container">
		        <div class="copyright">All Rights Reserved © 2017 <a href="www.striking.lk" class="btn">Striking Solutions</a></div>
	          </div>
              <div class="social-links">
                    <ul>
                        <li>
                            <a class="fa fa-twitter" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-facebook" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-instagram" href="#"></a>
                        </li>
                    </ul>
                </div>
		    </div>
		  </div>
		</div>
	</div>
	<!-- //Footer -->
	<div class="darkout-menu"></div>
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab1Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>The Tires Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab2Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Oil Change Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab3Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Batteries Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab4Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Brakes Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Form Info-->
	<div class="modal modal-info fade" id="tab5Modal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Aligment Price</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li><b>Price:</b> $49.95</li>
						<li><b>Your discount:</b> -20%</li>
						<li><b>Total Price:</b> $39.95</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Form Info -->
	<!--Get Recalls-->
	<div class="modal modal-info fade" id="getRecallsModal">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
					<div class="row">
						<div class="col-xs-9">
							<h3>Recalls, Investigations &amp; Complaints</h3>
						</div>
						<div class="col-xs-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
						</div>
					</div>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae in, perspiciatis iusto rerum non temporibus tenetur.
					<ul class="marker-list-sm marker-list-italic">
						<li>Lorem ipsum dolor sit amet, consectetur</li>
						<li>Repellendus alias unde tempore assumenda fugiat</li>
						<li>Blanditiis impedit repellat, quos minus dolorem autem</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- //Get Recalls -->
	<!-- Appointment Form -->
	<div class="modal fade" id="appointmentForm">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
                <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="icon-shape icon"></i><span>Appointment</span></a>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close-cross"></i></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<h2>Schedule <span class="color">Auto Service</span></h2>
						<p>To schedule an appointment with your friendly neighborhood experts at Car Repair Services, give us a call at 1-800-123-4567 or fill out the form below with your information and requested services. One of our team members will get back to you as soon as possible to confirm your appointment. </p>
						<div class="divider"></div>
						<form id="appointment-form" class="contact-form form-horizontal" name="contactform" method="post" novalidate>
							<div id="successAppointment" class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div id="errorAppointment" class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<h5>Contact information</h5>
							<div class="form-inline">
								<div>
									<input type="text" name="name" class="form-control input-custom" value="" placeholder="First name">
								</div>
								<div>
									<input type="text" name="lastname" class="form-control input-custom" value="" placeholder="Last name">
								</div>
							</div>
							<div class="form-inline">
								<div>
									<input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
								</div>
								<div>
									<input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
								</div>
							</div>
							<div class="divider"></div>
							<h5>Appointment details</h5>
							<div class="form-inline">
								<div class="datetimepicker-wrap">
									<input type="text" name="date" class="form-control input-custom datetimepicker" placeholder="">
								</div>
								<div class="timepicker-wrap">
									<input type="text" name="time" class="form-control input-custom timepicker" placeholder="">
								</div>
							</div>
							<div class="form-inline">
								<div>
									<input name="autoinfo" type="text" class="form-control input-custom" value="" placeholder="Vehicle Year, Make and Model">
								</div>
								<div class="form-inline">
									<div class="select-wrapper">
										<select name="select1" class="input-custom">
											<option value="2000">2000</option>
											<option value="2001">2001</option>
											<option value="2002">2002</option>
											<option value="2003">2003</option>
											<option value="2004">2004</option>
											<option value="2005">2005</option>
											<option value="2006">2006</option>
											<option value="2007">2007</option>
											<option value="2008">2008</option>
											<option value="2009">2009</option>
											<option value="2010">2010</option>
										</select>
									</div>
									<div>
										<input name="kilometers" type="text" class="form-control input-custom" value="" placeholder="Current Kilometers">
									</div>
								</div>
							</div>
							<div class="form-inline">
								<textarea name="message" class="form-control textarea-custom" placeholder="Service Required"></textarea>
							</div>
							<div class="divider"></div>
							<div class="row">
								<div class="col-sm-4 col-md-3 bootstrap-datetimepicker-widget">
									<button type="submit" id="submit" class="btn btn-lg"><span>SUBMIT</span></button>
								</div>
								<div class="divider visible-xs"></div>
								<div class="col-sm-8 col-md-9">
									<p><i>Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</i></p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Appointment Form -->
	<script type="text/javascript" charset="UTF-8" src="js/common.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/map.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/util.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/marker.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/onion.js"></script>
	<script type="text/javascript" charset="UTF-8" src="js/controls.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/jquery.form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/forms.js"></script>
   	<script src="js/tool.js"></script>
</body>
</html>