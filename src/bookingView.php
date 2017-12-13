<?php
if(isset($_GET['date']) && isset($_GET['time']) && isset($_GET['name']) && isset($_GET['last']) && isset($_GET['phone']) && isset($_GET['vehicle']) && isset($_GET['end'])){
	$date = $_GET['date'];
	$time = $_GET['time'];
	$name = $_GET['name'];
	$last = $_GET['last'];
	$phone = $_GET['phone'];
	$vehicle = $_GET['vehicle'];
	$end = $_GET['end'];
	echo $date.' '.$time.' '.$name.' '.$last.' '.$phone.' '.$vehicle.' '.$end;
}