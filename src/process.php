<?php
include_once('../ssi/db.php');
include_once('../ssi/config.php');
if(isset($_POST['submit'])){
	if(isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['phone']) && isset($_POST['vehicleNo']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['vehicle']) && isset($_POST['model'])){
		$name = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['name'])));
		$lastname = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['lastname'])));
		$phone = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['phone'])));
		$vehicleNo = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['vehicleNo'])));
		$date = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['date'])));
		$time = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['time'])));		
		$vehicle = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['vehicle'])));		
		$model = trim(htmlspecialchars(mysqli_real_escape_string($con,$_POST['model'])));	
		if(preg_match('/(([A-Z])|([a-z]))+/',$name)){
			if(preg_match('/(([A-Z])|([a-z]))+/',$lastname)){
				if(preg_match('/^[0-9]{10}$/',$phone)){
					if(preg_match('/^\w+.\w+-\w+$/',$vehicleNo)){
						if($vehicle == "car" || $vehicle == "van" || $vehicle == "bus" || $vehicle == "wheel" || $vehicle == "bike"){
							if(preg_match('/^(\b\s\b|\w)+$/',$model)){
								//check for the closed days
								$day = date('w', strtotime($date));
								if($day != $closed_days[0]){
									//check for time, within the open and closed times
									if((strtotime($open_closed_times[0]) < strtotime($time)) && (strtotime($time) < strtotime($open_closed_times[1]))){
										//check for vehicle type
										for($i=0; $i < count($vehicle_types); $i++){
											if($vehicle_types[$i]['model'] == $vehicle){
												//matches the vehicle type and get the relevant details
												$available_points = $vehicle_types[$i]['points'];
												$duration_for_service = $vehicle_types[$i]['duration'];
												//booked time (start time) + duration = end time, search from mysql table for existing records. with relevant to the number of points
												echo $available_points.' '.$duration_for_service;die();
											}
										}
										//not matching vehicle type
										header('Location:../index.php?error=7#schedule-appointment');
									} else {
										//not within open close times
										header('Location:../index.php?error=10#schedule-appointment');	
									}
								} else {
									//closed on these days
									header('Location:../index.php?error=9#schedule-appointment');	
								}
							} else {
								//invalid model format
								header('Location:../index.php?error=8#schedule-appointment');
							}
						} else {
							//invalid vehicle format
							header('Location:../index.php?error=7#schedule-appointment');
						}
					} else {
						//invalid vehicle no format
						header('Location:../index.php?error=6#schedule-appointment');
					}
				} else {
					//invalid phone format
					header('Location:../index.php?error=5#schedule-appointment');
				}
			} else {
				//invalid last name format
				header('Location:../index.php?error=4#schedule-appointment');
			}
		} else {
			//invalid name format
			header('Location:../index.php?error=3#schedule-appointment');
		}
	} else {
		//empty fields
		header('Location:../index.php?error=2#schedule-appointment');
	}	
} else {
	//form not submitted
	header('Location:../index.php?error=1#schedule-appointment');	
}
?>