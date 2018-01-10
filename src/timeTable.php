<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Service Station</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/bootstrap-submenu.css" rel="stylesheet">
<link href="../css/animate.min.css" rel="stylesheet">
<link href="../css/slick.css" rel="stylesheet">	
<link href="../css/custom.css" rel="stylesheet">
<link href="../css/color-violet.css" rel="stylesheet">
<link href="../css/color-blue.css" rel="stylesheet">
<link href="../css/color-green.css" rel="stylesheet">
<link href="../css/bootstrap-datetimepicker.css" rel="stylesheet">
<link href="../css/tools.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
include_once('../ssi/db.php');
?>
<style>
body {
  font-family: 'Helvetica Neue', Helvetica, Arial;
  font-size: 14px;
  line-height: 20px;
  font-weight: 400;
  color: #3b3b3b;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
  background: #2b2b2b;
}

@media screen and (max-width: 580px) {
  body {
    font-size: 16px;
    line-height: 22px;
  }
}

.wrapper {
  margin: 0 auto;
  padding: 40px;
  max-width: 800px;
}

.table {
  margin: 0 0 40px 0;
  width: 100%;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  display: table;
}

@media screen and (max-width: 580px) {
  .table {
    display: block;
  }
}

.row {
  display: table-row;
  background: #f6f6f6;
}

.row:nth-of-type(odd) {
  background: #e9e9e9;
}

.row.header {
  font-weight: 900;
  color: #ffffff;
  background: #ea6153;
}

.row.green {
  background: #27ae60;
}

.row.blue {
  background: #2980b9;
}

.row.yellow {
  background: rgb(255,255,0);
}

@media screen and (max-width: 580px) {
  .row {
    padding: 14px 0 7px;
    display: block;
  }
  .row.header {
    padding: 0;
    height: 6px;
  }
  .row.header .cell {
    display: none;
  }
  .row .cell {
    margin-bottom: 10px;
  }
  .row .cell:before {
    margin-bottom: 3px;
    content: attr(data-title);
    min-width: 98px;
    font-size: 10px;
    line-height: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #969696;
    display: block;
  }
}

.cell {
  padding: 6px 12px;
  display: table-cell;
}

@media screen and (max-width: 580px) {
  .cell {
    padding: 2px 16px;
    display: block;
  }
}
</style>
</head>
<body style="background-image:url(../images/4.jpg);background-repeat:no-repeat;background-size:cover;">
<div>
    <div>
        <form class="contact-form form-horizontal" enctype="multipart/form-data" role="form" method="post" action="">
        <div class="col-md-12">
            <div class="col-md-5">
            	<label>Select The Date :</label>
                <input type="date" id="date" name="date" class="form-control input-custom" required placeholder="" title="Please select a date.">
            </div>
            <div class="col-md-5">
            	<label>Select The Service Point :</label>
                <select name="point" id="point" class="form-control input-custom">
                	<option value="1">Point 01</option>
                    <option value="2">Point 02</option>
                    <option value="3">Point 03</option>
                    <option value="4">Point 04</option>
                </select>
            </div>
            <div class="col-md-2">
            	<label>&nbsp;</label>
                <input type="button" value="Search" class="form-control input-custom btn-success" onClick="showHint(document.getElementById('date').value, document.getElementById('point').value);"/>
            </div>
        </div>
        </form>
    </div>
</div>
<script>
function showHint(str, id) {
	if (str.length == 0) { 
		document.getElementById("txtHint").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET", "getTimeTableInfo.php?q=" + str + "&r=" + id, true);
		xmlhttp.send();
	}
}
</script>
<div class="form-horizontal">
    <div style="padding:50px;margin-top:100px;" id="txtHint"></div>
</div>
<div class="col-md-12 text-center navbar-fixed-bottom" style="background-color:rgb(0,0,0);padding:15px;height:8vh;">
    <font class="color" face="Verdana, Geneva, sans-serif">All Rights Reserved <a href="www.striking.lk" class="color">Striking Solutions</a> &copy; <?php $year = getdate(); echo $year['year']; ?></font>
</div>
<script type="text/javascript" charset="UTF-8" src="../js/common.js"></script>
<script type="text/javascript" charset="UTF-8" src="../js/map.js"></script>
<script type="text/javascript" charset="UTF-8" src="../js/util.js"></script>
<script type="text/javascript" charset="UTF-8" src="../js/marker.js"></script>
<script type="text/javascript" charset="UTF-8" src="../js/onion.js"></script>
<script type="text/javascript" charset="UTF-8" src="../js/controls.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/jquery.form.js"></script>
<script src="../js/jquery.validate.min.js"></script>
<script src="../js/moment.js"></script>
<script src="../js/bootstrap-datetimepicker.min.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.countTo.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/tool.js"></script>
</body>
</html>