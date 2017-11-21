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
                            	<i class="icon-shape icon"></i><span>Appointment</span>
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
		<div id="mainSlider" class="slick-initialized slick-slider" style="height: 589px;">
			<div aria-live="polite" class="slick-list draggable" tabindex="0">
            	<div class="slick-track" style="opacity: 1; width: 4047px;">
                	<div class="slide slick-slide" data-slick-index="0" aria-hidden="true" style="width: 1349px; position: relative; left: 0px; top: 0px; z-index: 800; opacity: 0;">
						<div class="img--holder" style="background-image:url(images/how-works-img-1.jpg); height: 589px;"></div>
						<div class="slide-content center">
						<div class="vert-wrap container">
						<div class="vert">
							<div class="container">
								<h4 data-animation="zoomIn" data-animation-delay="0.5s" class="">Looking for Right Vehicle</h4>
								<h3 data-animation="scaleOut" data-animation-delay="0.2s" class="">Repair Service?</h3>
								<p data-animation="fadeIn" data-animation-delay="0.9s" class="">Get your fair-price repair estimates</p>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="slide slick-slide slick-active slidein" data-slick-index="1" aria-hidden="false" style="width: 1349px; position: relative; left: -1349px; top: 0px; z-index: 900; opacity: 1;">
				<div class="img--holder" style="background-image:url(images/how-works-img-3.jpg); height: 589px;"></div>
				<div class="slide-content container left">
					<div class="vert-wrap">
						<div class="vert">
							<div class="container">
								<h4 data-animation="fadeInLeft" data-animation-delay="0.2s" class="">Full Service of</h4>
								<h3 data-animation="flipInX" data-animation-delay="0.8s" class="">Auto Repair</h3>
								<h3 data-animation="flipInX" data-animation-delay="1.2s" class="">&amp; Maintenance</h3>
								<p data-animation="fadeIn" data-animation-delay="1.5s" class="">Over 35 Years Of Quality Auto Service</p>
							</div>
						</div>
					</div>
				</div>
			</div><div class="slide slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1349px; position: relative; left: -2698px; top: 0px; z-index: 800; opacity: 0;">
				<div class="img--holder" style="background-image:url(images/how-works-img-1.jpg); height: 589px;"></div>
				<div class="slide-content container center">
					<div class="vert-wrap">
						<div class="vert">
							<div class="container">
								<h4 data-animation="zoomIn" data-animation-delay="0.8s">Trust Your Vehicle to</h4>
								<h3 data-animation="fadeInUp" data-animation-delay="0.2s">Certified</h3>
								<h3 data-animation="fadeInUp" data-animation-delay="0.5s">Technicians</h3>
								<p data-animation="fadeIn" data-animation-delay="1.2s">SERVICE, MAINTENANCE &amp; REPAIR BY THE CERTIFIED SERVICE EXPERTS</p>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            </div>
		<button type="button" data-role="none" class="slick-prev" aria-label="previous" style="display: block;">Previous<span class="icon-wrap"></span></button>
        <button type="button" data-role="none" class="slick-next" aria-label="next" style="display: block;">Next<span class="icon-wrap"></span></button></div>
	</div>
	<!-- Slider -->
	<!-- Content  -->
	<div id="pageContent">
		<!-- Under Slider Banner -->
		<div class="block banner-under-slider">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-6">
						<div class="row">
							<div class="col-md-6">
								<h2>After Hours</h2>
								<h2 class="h-lg text-right"><span class="color">Drop-OFF</span></h2>
							</div>
							<div class="col-md-6">
								<p>We realize that you lead a busy life, so we've made it easy for you to drop off your vehicle 24/7.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6">
						<div class="row">
							<div class="col-md-6 col-lg-8">
								<div class="negative-margin"><img src="images/banner-key.png" class="img-responsive" alt=""></div>
							</div>
							<div class="col-md-6 col-lg-4 action hidden-xs">
								<a href="#" class="btn btn-full btn-border"><span>Know more</span></a>
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
						<a href="#" class="image image-scale">
                        	<img src="images/service-2-bg.jpg" alt="#">
                        </a>
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
						<a href="#" class="image image-scale">
                        	<img src="images/service-4-bg.jpg" alt="#">
                        </a>
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
						<a href="#" class="image image-scale">
                        	<img src="images/service-6-bg.jpg" alt="#">
                        </a>
					</div>
				</div>
			</div>
		</div>
		<!-- //Services Banner Block -->
		<!-- Services List Block -->
		<div class="block bg-1">
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
				<div class="text-center"><a href="index.php#slideMobile" class="view-more-link color"><span class="more">All Services</span><span class="less">Hide All Services</span></a>
				</div>
			</div>
		</div>
		<!-- //Services List Block -->
		<!-- Block -->
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-5">
						<div class="vertical-tab-container" id="tabForm">
							<div class="vertical-tab-menu">
								<div class="list-group">
									<a href="#" class="list-group-item active text-center">
										<span>Tires</span>
										<i class="icon icon-car-wheel"></i>
									</a>
									<a href="#" class="list-group-item text-center">
										<span>Oil change</span>
										<i class="icon icon-oil"></i>
									</a>
									<a href="#" class="list-group-item text-center">
										<span>Batteries</span>
										<i class="icon icon-power"></i>
									</a>
									<a href="#" class="list-group-item text-center">
										<span>Brakes</span>
										<i class="icon icon-disc-brake"></i>
									</a>
									<a href="#" class="list-group-item text-center">
										<span>Alignment</span>
										<i class="icon icon-balance"></i>
									</a>
								</div>
							</div>
							<div class="vertical-tab">
								<!-- Tires section -->
								<div class="vertical-tab-content active">
									<h3>Get the Right Tires</h3>
									<div class="clearfix">
										<a href="index.php#tabForm" class="toggle-btn active">By Vehicle</a>
                                        <a href="index.php#tabForm" class="toggle-btn">By Tire</a>
									</div>
									<p class="comment">All fields are required</p>
									<form id="tab1-form">
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select1" class="input-custom">
													<option value="">Year</option>
													<option value="">2010</option>
													<option value="">2015</option>
													<option value="">2016</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select2" class="input-custom">
													<option value="">Make</option>
													<option value="">Ford</option>
													<option value="">Audi</option>
													<option value="">Honda</option>
													<option value="">Toyota</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select3" class="input-custom">
													<option value="">Model</option>
													<option value="">Escort</option>
													<option value="">Prius</option>
													<option value="">Camaro</option>
													<option value="">Civic</option>
													<option value="">240DL</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select4" class="input-custom">
													<option value="">Submodel</option>
													<option value="">Sedan</option>
													<option value="">Hatchback</option>
													<option value="">Regular Cab</option>
													<option value="">Crew Cab</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7">
												<div class="form-group">
													<div class="select-wrapper">
														<select name="select5" class="input-custom">
															<option value="">TPMS</option>
															<option value="">RDKS</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xs-5">
                                            	<a href="#" class="comment">What’s this?</a>
                                            </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-7">
													<div class="form-group">
														<div class="select-wrapper">
															<select name="select6" class="input-custom">
																<option value="">60605</option>
																<option value="">20105</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-xs-5">
                                                	<a href="#" class="comment">Why?</a>
                                                 </div>
											</div>
										</div>
										<a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab1Modal"><span>Get Tire Pricing</span></a>
									</form>
								</div>
								<!-- Oil section -->
								<div class="vertical-tab-content">
									<h3>Get the Right Oil</h3>
									<div class="clearfix">
										<a href="index.php#tabForm" class="toggle-btn active">By Vehicle</a>
                                        <a href="index.php#tabForm" class="toggle-btn">By Tire</a>
									</div>
									<p class="comment">All fields are required</p>
									<form id="tab2-form">
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select1" class="input-custom">
													<option value="">Year</option>
													<option value="">2010</option>
													<option value="">2015</option>
													<option value="">2016</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select2" class="input-custom">
													<option value="">Make</option>
													<option value="">Ford</option>
													<option value="">Audi</option>
													<option value="">Honda</option>
													<option value="">Toyota</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select3" class="input-custom">
													<option value="">Model</option>
													<option value="">Escort</option>
													<option value="">Prius</option>
													<option value="">Camaro</option>
													<option value="">Civic</option>
													<option value="">240DL</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select4" class="input-custom">
													<option value="">Submodel</option>
													<option value="">Sedan</option>
													<option value="">Hatchback</option>
													<option value="">Regular Cab</option>
													<option value="">Crew Cab</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7">
												<div class="form-group">
													<div class="select-wrapper">
														<select name="select5" class="input-custom">
															<option value="">TPMS</option>
															<option value="">RDKS</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xs-5">
                                           		<a href="#" class="comment">What’s this?</a>
                                            </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-7">
													<div class="form-group">
														<div class="select-wrapper">
															<select name="select6" class="input-custom">
																<option value="">60605</option>
																<option value="">20105</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-xs-5">
                                                	<a href="#" class="comment">Why?</a>
                                                </div>
											</div>
										</div>
										<a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab2Modal"><span>Get Oil Pricing</span></a>
									</form>
								</div>
								<!-- Batteries section -->
								<div class="vertical-tab-content">
									<h3>Select the Model</h3>
									<div class="clearfix">
										<a href="index.php#tabForm" class="toggle-btn active">By Vehicle</a>
                                        <a href="index.php#tabForm" class="toggle-btn">By Tire</a>
									</div>
									<p class="comment">All fields are required</p>
									<form id="tab3-form">
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select1" class="input-custom">
													<option value="">Year</option>
													<option value="">2010</option>
													<option value="">2015</option>
													<option value="">2016</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select2" class="input-custom">
													<option value="">Make</option>
													<option value="">Ford</option>
													<option value="">Audi</option>
													<option value="">Honda</option>
													<option value="">Toyota</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select3" class="input-custom">
													<option value="">Model</option>
													<option value="">Escort</option>
													<option value="">Prius</option>
													<option value="">Camaro</option>
													<option value="">Civic</option>
													<option value="">240DL</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select4" class="input-custom">
													<option value="">Submodel</option>
													<option value="">Sedan</option>
													<option value="">Hatchback</option>
													<option value="">Regular Cab</option>
													<option value="">Crew Cab</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7">
												<div class="form-group">
													<div class="select-wrapper">
														<select name="select5" class="input-custom">
															<option value="">TPMS</option>
															<option value="">RDKS</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xs-5">
                                            	<a href="#" class="comment">What’s this?</a>
                                            </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-7">
													<div class="form-group">
														<div class="select-wrapper">
															<select name="select6" class="input-custom">
																<option value="">60605</option>
																<option value="">20105</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-xs-5">
                                                	<a href="#" class="comment">Why?</a>
                                                </div>
											</div>
										</div>
										<a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab3Modal"><span>Get Batteries Pricing</span></a>
									</form>
								</div>
								<!-- Brakes section -->
								<div class="vertical-tab-content">
									<h3>Select the Model</h3>
									<div class="clearfix">
										<a href="index.php#tabForm" class="toggle-btn active">By Vehicle</a>
                                        <a href="index.php#tabForm" class="toggle-btn">By Tire</a>
									</div>
									<p class="comment">All fields are required</p>
									<form id="tab4-form">
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select1" class="input-custom">
													<option value="">Year</option>
													<option value="">2010</option>
													<option value="">2015</option>
													<option value="">2016</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select2" class="input-custom">
													<option value="">Make</option>
													<option value="">Ford</option>
													<option value="">Audi</option>
													<option value="">Honda</option>
													<option value="">Toyota</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select3" class="input-custom">
													<option value="">Model</option>
													<option value="">Escort</option>
													<option value="">Prius</option>
													<option value="">Camaro</option>
													<option value="">Civic</option>
													<option value="">240DL</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select4" class="input-custom">
													<option value="">Submodel</option>
													<option value="">Sedan</option>
													<option value="">Hatchback</option>
													<option value="">Regular Cab</option>
													<option value="">Crew Cab</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7">
												<div class="form-group">
													<div class="select-wrapper">
														<select name="select5" class="input-custom">
															<option value="">TPMS</option>
															<option value="">RDKS</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xs-5">
                                            	<a href="#" class="comment">What’s this?</a>
                                            </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-7">
													<div class="form-group">
														<div class="select-wrapper">
															<select name="select6" class="input-custom">
																<option value="">60605</option>
																<option value="">20105</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-xs-5">
                                                	<a href="#" class="comment">Why?</a>
                                                </div>
											</div>
										</div>
										<a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab4Modal"><span>Get Brakes Pricing</span></a>
									</form>
								</div>
								<!-- Alignment section -->
								<div class="vertical-tab-content">
									<h3>Select the Model</h3>
									<div class="clearfix">
										<a href="index.php#tabForm" class="toggle-btn active">By Vehicle</a>
                                        <a href="index.php#tabForm" class="toggle-btn">By Tire</a>
									</div>
									<p class="comment">All fields are required</p>
									<form id="tab5-form">
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select1" class="input-custom">
													<option value="">Year</option>
													<option value="">2010</option>
													<option value="">2015</option>
													<option value="">2016</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select2" class="input-custom">
													<option value="">Make</option>
													<option value="">Ford</option>
													<option value="">Audi</option>
													<option value="">Honda</option>
													<option value="">Toyota</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select3" class="input-custom">
													<option value="">Model</option>
													<option value="">Escort</option>
													<option value="">Prius</option>
													<option value="">Camaro</option>
													<option value="">Civic</option>
													<option value="">240DL</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="select-wrapper">
												<select name="select4" class="input-custom">
													<option value="">Submodel</option>
													<option value="">Sedan</option>
													<option value="">Hatchback</option>
													<option value="">Regular Cab</option>
													<option value="">Crew Cab</option>
												</select>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-7">
												<div class="form-group">
													<div class="select-wrapper">
														<select name="select5" class="input-custom">
															<option value="">TPMS</option>
															<option value="">RDKS</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xs-5">
                                            	<a href="#" class="comment">What’s this?</a>
                                            </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-xs-7">
													<div class="form-group">
														<div class="select-wrapper">
															<select name="select6" class="input-custom">
																<option value="">60605</option>
																<option value="">20105</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-xs-5">
                                                	<a href="#" class="comment">Why?</a>
                                                </div>
											</div>
										</div>
										<a class="btn btn-lg btn-full" data-toggle="modal" data-target="#tab5Modal"><span>Get Pricing</span></a>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="divider-lg visible-sm visible-xs"></div>
					<div class="col-md-6 col-lg-7">
						<h2>About Car Repair Services</h2>
						<p>Our service facility is independently owned and operated providing full-service repair and maintenance services. We use the latest diagnostic equipment to guarantee your vehicle is repaired or serviced properly and in a timely fashion. We are a member of Professional Auto Service, an elite performance network, where independent service facilities share common goals of being world-class automotive service centers.</p>
						<ul class="marker-list-sm marker-list-italic">
							<li>24 Month / 24,000km Nationwide Warranty</li>
							<li>ASE Certified Technicians</li>
							<li>Customer Rewards Program</li>
							<li>24-Hour Roadside Assistance</li>
							<li>Courtesy Local Shuttle Service</li>
							<li>Courtesy Loaner Vehicle</li>
						</ul>
						<div class="coupon">
							<div class="coupon-row">
								<div class="coupon-col-left text-center">
									<div class="coupon-text1">Coupons from</div>
									<div class="coupon-text2"><span>$</span>25<span>off</span></div>
									<div class="coupon-text3">Repairs!</div>
								</div>
								<div class="coupon-col-right text-center">
									<div class="coupon-text4">Our Latest Specials</div>
									<div class="coupon-text5">Any Servcie of $250 or More</div>
									<a href="#" class="coupon-all">SEE ALL COUPONS<span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Block -->
		<!-- How It Works -->
		<div class="block bg-2">
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
										<h5>Make an Appointment</h5>
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
										<h5>Select Services</h5>
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
										<h5>Select Quote, Confirm Request</h5>
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
										<h5>GET YOUR CAR</h5>
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
				<p class="info text-center">We partnered with RepairPal to bring you the most sophisticated fair-price estimates </p>
				<div class="row text-icon-carousel slick-initialized slick-slider">
					<div aria-live="polite" class="slick-list draggable" tabindex="0">
                    	<div class="slick-track" style="opacity: 1; width: 1200px; transform: translate3d(0px, 0px, 0px);">
                        	<div class="col-sm-4 col-md-4 slick-slide slick-active" data-slick-index="0" aria-hidden="false" style="width: 400px;">
								<div class="text-icon">
									<div class="icon-wrapper"><span><i class="icon icon-technology"></i><span class="icon-hover"></span></span>
									</div>
                                        <h3 class="title" style="height: 36px;">Estimates</h3>
                                        <p class="text" style="height: 48px;">We bring you the most accurate and fair-price service estimates</p>
								</div>
							</div>
                            <div class="col-sm-4 col-md-4 slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 400px;">
							<div class="text-icon">
								<div class="icon-wrapper"><span><i class="icon icon-tool"></i><span class="icon-hover"></span></span>
								</div>
                                <h3 class="title" style="height: 36px;">Trusted</h3>
                                <p class="text" style="height: 48px;">Trusted Service Centers
								<br> are certified for high quality
								</p>
							</div>
						</div>
                        <div class="col-sm-4 col-md-4 slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 400px;">
							<div class="text-icon">
								<div class="icon-wrapper"><span><i class="icon icon-diploma"></i><span class="icon-hover"></span></span>
								</div>
                                <h3 class="title" style="height: 36px;">Guarantees</h3>
                                <p class="text" style="height: 48px;">Covers parts and labor on qualifying repairs and services for
								<br>24 months/24,000 miles
								</p>
							</div>
						</div>
                    	</div>
                	</div>
				</div>
			</div>
		</div>
		<!-- //Services Block -->
		<!-- Testimonials Block -->
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
		<!-- //Testimonials Block -->
		<!-- Statistics Block -->
		<div class="block">
			<div class="container">
				<h2 class="h-lg text-center">Some Statistics <span class="color">About Us</span></h2>
				<p class="info text-center">Auto Repair Technical Statistics You Must Know</p>
				<div class="row" id="counterBlock">
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="10" data-speed="1000">10</span></span><span class="icon"><i class="icon-rocket"></i></span></div>
							<div class="text">
								<h5>Years of experience</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="32" data-speed="1000">32</span></span><span class="icon"><i class="icon-people-1"></i></span></div>
							<div class="text">
								<h5>Technicians &amp; workers</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="2500" data-speed="1000">2500</span></span><span class="icon"><i class="icon-people"></i></span></div>
							<div class="text">
								<h5>Satisfied customers</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="stat-box">
							<div><span class="number"><span class="count" data-to="1900" data-speed="1000">1900</span></span><span class="icon"><i class="icon-transport"></i></span></div>
							<div class="text">
								<h5>Vehicle Repaired</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Statistics Block -->
		<!-- Recalls Block -->
		<div class="block bg-dark full-block pad-sm">
			<div class="container">
				<div class="text-center">
					<h2 class="h-lg">Safety <span class="color">&amp;</span> Recalls</h2>
					<p class="info">Are there any recalls on your car? Find out!
					</p>
				</div>
				<form action="#" class="form-table">
					<div class="form-group form-group-cell">
						<div class="select-wrapper">
							<select class="input-custom">
								<option value="">Enter make</option>
								<option value="">Enter make</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-cell">
						<div class="select-wrapper">
							<select class="input-custom">
								<option value="">Enter model</option>
								<option value="">Enter model</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-cell sm">
						<div class="select-wrapper">
							<select class="input-custom">
								<option value="">Year</option>
								<option value="">2015</option>
							</select>
						</div>
					</div>
					<div class="form-group form-group-cell sm">
						<input type="text" class="form-control input-custom" placeholder="ZIP">
					</div>
					<div class="form-group form-group-cell action">
						<a class="btn btn-full btn-invert" data-toggle="modal" data-target="#getRecallsModal"><span>Get Recalls</span></a>
					</div>
				</form>
			</div>
		</div>
		<!-- //Recalls Block -->
		<!-- Appointment Block -->
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="text-appointment">
							<h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
							<p class="info">Your Automotive Repair &amp; Maintenance Service Specialist</p>
							<h2 class="h-phone">Call: 1-800-123-4567</h2>
							<div class="btn-inline">
								<a class="btn btn-invert" href="#" data-toggle="modal" data-target="#appointmentForm"><span>Appointment</span></a>
								<div class="form-popup-wrap">
									<a class="btn form-popup-link" href="#"><span>Get Quote</span></a>
									<div class="form-popup">
										<form id="quote-form" method="post" novalidate>
											<div id="successQuote" class="successform">
												<p>Your message was sent successfully!</p>
											</div>
											<div id="errorQuote" class="errorform">
												<p>Something went wrong, try refreshing and submitting the form again.</p>
											</div>
											<div class="form-inline">
												<input type="text" name="name" class="form-control input-custom" value="" placeholder="Your Name">
											</div>
											<div class="form-inline">
												<div>
													<input type="text" name="email" class="form-control input-custom" value="" placeholder="Your E-mail">
												</div>
												<div>
													<input type="text" name="phone" class="form-control input-custom" value="" placeholder="Phone number">
												</div>
											</div>
											<div class="form-inline">
												<div class="select-wrapper">
													<select name="select1" class="input-custom">
														<option value="Vehicle">Vehicle</option>
														<option value="Car">Car</option>
														<option value="Bike">Bike</option>
													</select>
												</div>
												<div class="select-wrapper">
													<select name="select2" class="input-custom">
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
											</div>
											<div class="form-inline">
												<div class="select-wrapper">
													<select name="select3" class="input-custom">
														<option value="">Choose service</option>
														<option value="Preventative Maintenance">Preventative Maintenance</option>
														<option value="Brake Repair">Brake Repair &amp; Service</option>
														<option value="Transmission Service">Transmission Service &amp; Repair</option>
													</select>
												</div>
											</div>
											<div class="form-inline">
												<textarea name="message" class="form-control textarea-custom" placeholder="Your comment"></textarea>
											</div>
											<button type="submit" id="submit" class="btn btn-lg btn-full"><span>get a quote</span></button>
										</form>
									</div>
								</div>
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
		<div class="footer-content">
			<div class="footer-col-left">
				<div class="inside">
					<div class="footer-phone">
						<h2 class="h-phone">Call: <span class="number">+94-711790370</span></h2>
					</div>
					<div class="contact-info"><i class="icon icon-locate"></i>2605 Piliyanda, Colombo.
					</div>
					<div class="contact-info"><i class="icon icon-clock"></i>Monday-Saturday <span class="color">8:30AM - 5:30PM</span>
						<br> Sunday Closed
					</div>
					<div class="social-links">
						<ul>
							<li>
								<a class="icon icon-facebook-logo" href="#"></a>
							</li>
							<li>
								<a class="icon icon-twitter-logo" href="#"></a>
							</li>
							<li>
								<a class="icon icon-instagram-logo" href="#"></a>
							</li>
							<li>
								<a class="icon icon-google-plus-logo" href="#"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
		  <div class="container">
		    <div class="copyright">
		      <div class="container">
		        <div class="copyright">© 2017 <a href="www.striking.lk">Striking Solutions</a>, All Rights Reserved</div>
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