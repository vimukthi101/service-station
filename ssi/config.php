<?php
//different types of vehicle types. 0 -> type, 1 -> number of points, 2 -> duration in minutes
$vehicle_types = array
  (
	  array(
	  	'model' => "car",
		'points' => 2,
		'duration' => 150
	  ),
	  array(
	  	'model' => "wheel",
		'points' => 2,
		'duration' => 60
	  ),
	  array(
	  	'model' => "bike",
		'points' => 2,
		'duration' => 150
	  ),
	  array(
	  	'model' => "van",
		'points' => 1,
		'duration' => 150
	  ),
	  array(
	  	'model' => "bus",
		'points' => 1,
		'duration' => 360
	  )
  );
//open close hours in 24h format
$open_closed_times = array("08:30","17:30");
//closed days list sunday =0
$closed_days = array(0);
//closed days of the month
$closed_days_month = array
  (
	  array(
	  	'month' => "01",
		'days' => array("02","05","23")
	  ),
	  array(
	  	'month' => "08",
		'days' => array("11")
	  ),
	  array(
	  	'month' => "11",
		'days' => array("09","16")
	  )
  );
?>