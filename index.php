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

<body class="home color-blue">	<div class="tools">
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
                                	<a href="#what-we-do"><span>What We Do</span></a>
                                </li>
								<li>
                                	<a href="#our-services"><span>Our Services</span></a>
                                </li>
								<li>
                                	<a href="#how-it-works"><span>How It Works</span></a>
                                </li>
								<li>
                                	<a href="#why-choose-us"><span>Why Choose Us</span></a>
                                </li>
								<li>
                                	<a href="#schedule-appointment"><span>Schedule</span></a>
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
		<div class="block" id="what-we-do" style="padding-top:70px;padding-bottom:30px;">
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
		<div class="block bg-1" style="background-image:url(images/modern-4k-car-wallpaper-in-picture-t1xy-with-4k-car-wallpaper-new-on-wallpapers.jpg);background-repeat:no-repeat;background-size:cover;padding-top:80px;margin-top:30px;" id="our-services">
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
		<div class="block bg-2" style="background-image:url(images/2.jpg);background-repeat:no-repeat;background-size:cover;" id="how-it-works">
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
		<div class="block" id="why-choose-us" style="padding-top:80px;">
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
                                <p class="text" style="height: 48px;">We are dedicated to give the best service to our customers</p>
							</div>
						</div>
                    	</div>
                	</div>
				</div>
			</div>
		</div>
		<!-- //Services Block -->
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
		<div class="block" id="schedule-appointment">
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
    <div class="col-md-12 text-center" style="background-color:rgb(0,0,0);padding:15px;height:8vh;">
        <font class="color" face="Verdana, Geneva, sans-serif">All Rights Reserved <a href="www.striking.lk" class="color">Striking Solutions</a> &copy; <?php $year = getdate(); echo $year['year']; ?></font>
    </div>
	<!-- //Footer -->
	<!-- Appointment Form -->
	<div class="modal fade" id="appointmentForm">
		<div class="modal-dialog container">
			<div class="modal-content">
				<div class="modal-header">
                <a href="#" class="appointment" data-toggle="modal" data-target="#appointmentForm"><i class="fa fa-calendar"></i><span>&nbsp;&nbsp;&nbsp;Appointment</span></a>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<h2>Schedule <span class="color">Auto Service</span></h2>
						<p>To schedule an appointment with your friendly neighborhood experts at Vehicle Services, give us a call at +94-711790370 or fill out the form below with your information and preferred date and time.</p>
						<div class="divider"></div>
						<form id="appointment-form" class="contact-form form-horizontal" name="contactform" method="post" action="src/process.php">
							<div id="successAppointment" class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div id="errorAppointment" class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<h5>Contact information</h5>
							<div class="form-inline">
								<div>
									<input type="text" name="name" class="form-control input-custom"  title="Please enter a valid first name e.g. : John" required value="" placeholder="First name">
								</div>
								<div>
									<input type="text" name="lastname" class="form-control input-custom" required value="" placeholder="Last name" title="Please enter a valid last name e.g. : Doe">
								</div>
							</div>
							<div class="form-inline">
								<div>
									<input type="tel" name="phone" class="form-control input-custom" required value="" placeholder="Phone number" title="Please enter a valid telephone number e.g. : 0711790370">
								</div>
								<div>
									<input type="text" name="vehicleNo" class="form-control input-custom" required value="" placeholder="Vehicle number" title="Please enter a valid vehicle number e.g. : WP XXX-0000">
								</div>
							</div>
							<div class="divider"></div>
							<h5>Appointment details</h5>
							<div class="form-inline">
								<div>
									<input type="date" name="date" class="form-control input-custom" required placeholder="" title="Please select a date">
								</div>
								<div>
									<input type="time" name="time" class="form-control input-custom" required placeholder="" title="Please select a time">
								</div>
							</div>
                            <h5>Vehicle details</h5>
							<div class="form-inline">
								<div>
                                	<select name="vehicle" class="form-control input-custom" required title="Please select your vehicle type">
                                    	<option selected disabled>--Select your vehicle type--</option>
                                        <option value="car">Car</option>
                                        <option value="van">Van/ SUV</option>
                                        <option value="bus">Bus</option>
                                        <option value="wheel">Three Wheel</option>
                                        <option value="bike">Bike</option>
                                    </select>
								</div>
								<div>
									<input name="model" type="text" class="form-control input-custom" value="" required placeholder="Vehicle Model" title="Please enter a valid vehicle model e.g. : Mazda RX8">
								</div>
							</div>
							<div class="divider"></div>
							<div class="row">
								<div class="col-sm-4 col-md-3 bootstrap-datetimepicker-widget">
									<button type="submit" id="submit" class="btn btn-lg"><span>SCHEDULE</span></button>
								</div>
								<div class="divider visible-xs"></div>
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
   	<script src="js/tool.js"></script>
</body>
</html>