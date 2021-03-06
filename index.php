<?php
if(!isset($_SESSION[''])){
	session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="service station booking web site">
	<meta name="author" content="www.striking.lk">
	<link rel="icon" href="">
	<title>Dunhinda Auto Service</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
		$(function() {
			
			$("#json-one").change(function() {
			
				var $dropdown = $(this);
			
				$.getJSON("src/data.json", function(data) {
				
					var key = $dropdown.val();
					var vals = [];
										
					switch(key) {
						case 'car':
							vals = data.car.split(",");
							break;
						case 'van':
							vals = data.van.split(",");
							break;
						case 'wheel':
							vals = data.wheel.split(",");
							break;
						case 'bike':
							vals = data.bike.split(",");
							break;
						case 'bus':
							vals = data.bus.split(",");
							break;
						case 'base':
							vals = ['Please choose from above'];
					}
					
					var $jsontwo = $("#json-two");
					$jsontwo.empty();
					$.each(vals, function(index, value) {
						$jsontwo.append("<option value="+value+">" + value + "</option>");
					});
			
				});
			});

		});
	</script>
</head>

<body class="home color-blue table-responsive">	
	<div class="tools">
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
                    	<div>
                        	<img src="images/logo.png" style="width:100px;height:100px;">
                        </div>
					</div>
					<div class="header-right">
                    	<div><!--
							<button type="button" class="navbar-toggle"><i class="icon icon-lines-menu"></i></button>
						-->
                        </div>
                        <div class="header-right-top">
							<div class="address">
								Monday-Saturday <span class="custom-color">8:30AM - 5:30PM</span>
							</div>
							<div class="appointment">
                            	<font face="eras medium ITC" size="+1"><b>Dunhinda Auto Service</b></font>
                            </div>
						</div>
						<div class="header-right-bottom">
							
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
                                	<a href="#schedule-appointment"><span>Schedule</span></a>
                                </li>
								<li>
                                	<a href="#what-we-do"><span>What We Do</span></a>
                                </li>
                                <!--
								<li>
                                	<a href="#our-services"><span>Our Services</span></a>
                                </li>
                                -->
								<li>
                                	<a href="#how-it-works"><span>How It Works</span></a>
                                </li>
								<li>
                                	<a href="#why-choose-us"><span>Why Choose Us</span></a>
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
	<div id="mainSliderWrapper" class="table-responsive">
		<div id="mainSlider" class="slick-initialized slick-slider img-responsive" style="height: 589px;background-image:url(images/1236463291d1c80afcc20a2bfb8894c8.jpg);background-repeat:no-repeat;background-size:cover;">
        </div>
    </div>
	<!-- Slider -->
    <!-- Schedule Block -->
<div class="block" id="schedule-appointment" style="padding-top:70px;">
			<div class="container">
				<div class="text-center">
					<h2 class="h-lg">Schedule <span class="color">Auto Service</span></h2>
					<p class="info">To schedule an appointment with your friendly neighborhood experts at Vehicle Services, give us a call at +94 632 250 616 or fill out the form below with your information and preferred date and time.</p>
				</div>
            </div>
            <div class="container">
				<div>
					<?php
						if(isset($_GET['error'])){
							$error = $_GET['error'];
							if($error == 1){
								echo '<p style="color:rgb(255,0,0);">Form was not submitted. Please fill the form and submit.</p>';
							} else if($error == 2){
								echo '<p style="color:rgb(255,0,0);">Mandatory fields cannot be empty.</p>';
							} else if($error == 3){
								echo '<p style="color:rgb(255,0,0);">Please enter a valid first name e.g. : John</p>';
							} else if($error == 4){
								echo '<p style="color:rgb(255,0,0);">Please enter a valid last name e.g. : Doe</p>';
							} else if($error == 5){
								echo '<p style="color:rgb(255,0,0);">Please enter a valid telephone number e.g. : 0711790370</p>';
							} else if($error == 6){
								echo '<p style="color:rgb(255,0,0);">Please enter a valid vehicle number e.g. : XXX-0000</p>';
							} else if($error == 7){
								echo '<p style="color:rgb(255,0,0);">Please select a vehicle format.</p>';
							} else if($error == 8){
								echo '<p style="color:rgb(255,0,0);">Sorry, we are closed on the selected date.</p>';
							} else if($error == 9){
								echo '<p style="color:rgb(255,0,0);">Sorry, we are closed on Sundays.</p>';
							} else if($error == 10){
								echo '<p style="color:rgb(255,0,0);">Sorry, we are open from 08:30 AM to 05:30 PM only.</p>';
							} else if($error == 11){
								echo '<p style="color:rgb(255,0,0);">Sorry, already the time is booked.</p>';
							} else if($error == 12){
								echo '<p style="color:rgb(255,0,0);">Sorry, please try again later.</p>';
							}
						}
					?>
				</div>
            </div>
            <div class="container">
            	<div class="text-center">
                    <div class="divider"></div>
                    <div class="row">
                        <form class="contact-form form-horizontal" enctype="multipart/form-data" role="form" method="post" action="src/process.php">
                        <div>
                            <h5 class="text-center">Contact information</h5>
                           </div>
                            <div>
                            	<div class="col-md-6">
                                <input type="text" name="name" class="form-control input-custom"  title="Please enter a valid first name e.g. : John" required pattern="(([A-Z])|([a-z]))+" placeholder="First name*" value="<?php if(isset($_SESSION['fName'])){ echo $_SESSION['fName'];} ?>">
                                </div>
                                <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control input-custom" required placeholder="Last name*" title="Please enter a valid last name e.g. : Doe" pattern="(([A-Z])|([a-z]))+"  value="<?php  if(isset($_SESSION['lName'])){echo $_SESSION['lName'];} ?>">
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" class="form-control input-custom" required  value="<?php if(isset($_SESSION['phone'])){echo $_SESSION['phone'];} ?>" placeholder="Phone number*" title="Please enter a valid telephone number e.g. : 0711790370" pattern="^[0-9]{10}$">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="vehicleNo" class="form-control input-custom" required  value="<?php if(isset($_SESSION['vNo'])){echo $_SESSION['vNo'];} ?>" placeholder="Vehicle number* XXX-0000" title="Please enter a valid vehicle number e.g. : XXX-0000" pattern="^\w+-\w+$">
                                </div>
                            </div>
                            <div class="divider"></div>
                            <h5>Vehicle details</h5>
                            <div>
                                <div class="col-md-6">
                                    <select name="vehicle" id="json-one" class="form-control input-custom" required title="Please select your vehicle type">
                                        <option <?php if(!isset($_SESSION['vehicle'])){ ?> selected <?php } ?> disabled>--Select your vehicle type (approximate time for each type is mentioned)--</option>
                                        <option <?php if(isset($_SESSION['vehicle'])){if($_SESSION['vehicle'] == "car"){ ?> selected <?php }} ?> value="car">Car (2.5 h)</option>
                                        <option <?php if(isset($_SESSION['vehicle'])){if($_SESSION['vehicle'] == "van"){ ?> selected <?php }} ?> value="van">Van/ SUV (2.5 h)</option>
                                        <option <?php if(isset($_SESSION['vehicle'])){if($_SESSION['vehicle'] == "bus"){ ?> selected <?php }} ?> value="bus">Bus/ Lorries (6 h)</option>
                                        <option <?php if(isset($_SESSION['vehicle'])){if($_SESSION['vehicle'] == "wheel"){ ?> selected <?php }} ?> value="wheel">Three Wheel (1 h)</option>
                                        <option <?php if(isset($_SESSION['vehicle'])){if($_SESSION['vehicle'] == "bike"){ ?> selected <?php }} ?> value="bike">Bike (2.5 h)</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="json-two" name="model" class="form-control input-custom" required title="Please select your vehicle model">
                                        <?php
                                        if(isset($_SESSION['model'])){
											if(isset($_SESSION['model'])){
												echo '<option selected value="'.$_SESSION['model'].'">'.$_SESSION['model'].'</option>';
											}
										} else {
                                        	echo '<option selected disabled>--Please choose vehicle type first--</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <h5>Appointment details</h5>
                            <div>
                                <div class="col-md-6">
                                    <input type="date" name="date"  value="<?php if(isset($_SESSION['date'])){echo $_SESSION['date'];} ?>" class="form-control input-custom" required placeholder="" title="Please select a date. We are closed on Sundays.">
                                </div>
                                <div class="col-md-6">
                                    <input type="time" name="time"  value="<?php if(isset($_SESSION['time'])){echo $_SESSION['time'];} ?>" class="form-control input-custom" required placeholder="" title="Please select a time. We are open from 08:30 AM to 05:30 PM only.">
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="text-center">
                                <button type="submit" name="submit" id="submit" class="btn btn-lg"><span>SCHEDULE</span></button>
                            </div>
                        </form>
                    </div>
                </div>
			</div>
		</div>
		<!-- //Schedule Block -->
	<!-- Content  -->
	<div id="pageContent">
    
		<!-- Under Slider Banner -->
		<div class="block banner-under-slider img-responsive" style="background-image:url(images/1.jpg);background-repeat:no-repeat;background-size:cover;">
			<div class="container center-block text-center">
				<div class="row center-block text-center">
					<div class="col-sm-8 col-md-6 table-responsive center-block text-center" style="overflow:hidden;border:none;">
						<div class="row center-block text-center">
							<div class="col-md-6">
								<h2>Schedule A Booking</h2>
								<h2 class="h-lg text-right"><span class="color">For Your Vehicle Service</span></h2>
							</div>
							<div class="col-md-6 center-block text-center">
								<p>We realize that you lead a busy life, so we've made it easy for you to schedule your service.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-6 img-responsive">
						<div class="row">
							<div class="col-md-6 col-lg-8">
								<div class="negative-margin"><img src="images/banner-key.png" class="img-responsive" alt=""></div>
							</div>
							<div class="col-md-6 col-lg-4 action hidden-xs">
								<a href="#schedule-appointment" class="btn btn-full btn-border appointment"><span>Schedule</span></a>
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
                        	<img src="images/service-1-bg.png" class="img-responsive" alt="#">
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
                        	<img src="images/service-2-bg.jpg" class="img-responsive" alt="#">
					</div>
					<div class="service">
						<div class="image">
                        	<img src="images/service-3-bg.jpg" class="img-responsive" alt="#">
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
                        	<img src="images/service-4-bg.jpg" class="img-responsive" alt="#">
					</div>
					<div class="service dark">
						<div class="image">
                        	<img src="images/service-5-bg.jpg" class="img-responsive" alt="#">
                        </div>
						<div class="caption">
							<div class="vert-wrap">
								<div class="vert">
									
								</div>
							</div>
						</div>
					</div>
					<div class="service">
                        	<img src="images/service-6-bg.jpg" class="img-responsive" alt="#">
					</div>
				</div>
			</div>
		</div>
		<!-- //Services Banner Block -->
		<!-- Services List Block -->
        <!--
		<div class="block bg-1 img-responsive" style="background-image:url(images/modern-4k-car-wallpaper-in-picture-t1xy-with-4k-car-wallpaper-new-on-wallpapers.jpg);background-repeat:no-repeat;background-size:cover;padding-top:80px;margin-top:30px;" id="our-services">
			<div class="container text-center">
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
        -->
		<!-- //Services List Block -->
		<!-- How It Works -->
		<div class="block bg-2 img-responsive" style="background-image:url(images/2.jpg);background-repeat:no-repeat;background-size:cover;" id="how-it-works">
			<div class="container">
				<h2 class="h-lg text-center">How It <span class="color">Works</span></h2>
				<div class="row how-works-row shifted">
					<div class="col-sm-6 col-md-3">
						<div class="how-works-block">
							<div class="image">
								<div class="image-scale"><img src="images/how-works-img-1.jpg" class="img-responsive" alt=""></div>
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
								<div class="image-scale"><img src="images/how-works-img-2.jpg" class="img-responsive" alt=""></div>
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
								<div class="image-scale"><img src="images/how-works-img-3.jpg" class="img-responsive" alt=""></div>
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
								<div class="image-scale"><img src="images/how-works-img-4.jpg" class="img-responsive" alt=""></div>
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
		<!-- Appointment Block -->
		<div class="block">
			<div class="container">
				<div class="row">
					<div>
						<div class="text-appointment">
							<h2 class="h-lg">Schedule <span class="color">Your Appointment</span> Today</h2>
							<p class="info">Your Automotive Service Specialist</p>
							<h2 class="h-phone">Call: +94 632 250 616</h2>
                            <h2 class="h-phone">370/1, Kandy Road, Uhana</h2>
						</div>
					</div>
					<div>
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
    <div class="container-fluid" style="margin:0;padding:0;">
        <div class="text-center" style="background-color:rgb(0,0,0);padding:15px;height:8vh;">
            <font class="color" face="Verdana, Geneva, sans-serif">All Rights Reserved <a  href="http://www.striking.lk" target="_blank" class="color">Striking Solutions</a> &copy; <?php $year = getdate(); echo $year['year']; ?></font>
        </div>
    </div>
	<!-- //Footer -->
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