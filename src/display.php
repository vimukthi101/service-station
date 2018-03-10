<?php
if(!isset($_SESSION['']))
	session_start();
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
        <h2 class="h-lg text-center" style="color:rgb(255,255,255);">Please select the view to show bookings</span></h2>
        <div class="row col-md-12" id="slideMobile">
            <div class="col-sm-6 col-md-6 view-more-mobile center-block">
                <div class="text-center">
                    <a href="timeTable.php" style="width:200px;height:200px;background-image:url(../images/dailyView.png);background-size:cover;background-color:transparent;border:none;" class="btn btn-info text-center"></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 view-more-mobile center-block">
                <div class="text-center">
                    <a href="monthlyPreview.php" style="width:200px;height:200px;background-image:url(../images/monthlyView.png);background-size:cover;background-color:transparent;border:none;padding:0;margin:0;" class="btn btn-info text-center"></a>
                </div>
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
<?php
session_destroy();
?>