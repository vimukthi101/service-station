<?php
if(!isset($_SESSION[''])){
	session_start();
}
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="../css/animate.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
a {
	text-decoration:none;
	color:rgba(255,255,255,1);
}
a:hover {
	text-decoration:none;
	color:rgba(255,255,255,0.5);
}
a:visited {
	text-decoration:none;
	color:rgba(255,255,255,1);
}
p {
	color:rgb(255,255,255);
	font-size:18px;
}
.vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */
  display: flex;
  align-items: center;
}
</style>
</head>
<body style="background-image:url(../images/2.jpg);background-repeat:no-repeat;background-size:cover;width:100%;">
<div class="block bg-1 vertical-center">
    <div class="container center-block">
        <h2 class="h-lg text-center" style="color:rgb(255,255,255);">You have added the <span class="color">booking successfully!</span></h2>
        <p class="info text-center" style="color:rgb(255,255,255);">Please find the booking details below,</p>
        <div class="row" id="slideMobile">
            <div class="col-sm-4 col-md-4">
            </div>
            <div class="col-sm-4 col-md-4 view-more-mobile">
                <ul class="marker-list">
                     <?php
						if(isset($_GET['date']) && isset($_GET['time']) && isset($_GET['name']) && isset($_GET['last']) && isset($_GET['phone']) && isset($_GET['vehicle']) && isset($_GET['end'])){
							$date = $_GET['date'];
							$time = $_GET['time'];
							$name = $_GET['name'];
							$last = $_GET['last'];
							$phone = $_GET['phone'];
							$vehicle = $_GET['vehicle'];
							$end = $_GET['end'];
							echo '<p>Scheduler\'s Name : '.$name.' '.$last.'</p>';
							echo '<p>Contact No : '.$phone.'</p>';
							echo '<p>Vehicle No : '.$vehicle.'</p>';
							echo '<p>Date : '.$date.'</p>';
							echo '<p>Scheduled Time : '.$time.'</p>';
							echo '<p>Approximate End Time : '.$end.'</p>';
						}
					?>
                </ul>
            </div>
            <div class="col-sm-4 col-md-4 view-more-mobile">
            </div>
        </div>
        <div class="text-center">
        	<a href="../index.php" class="btn btn-info text-center">HOME</a>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>