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
		if(preg_match('',$name)){
			if(preg_match('',$lastname)){
				if(preg_match('',$phone)){
					if(preg_match('',$vehicleNo)){
						if(preg_match('',$date)){
							if(preg_match('',$time)){
								if($vehicle == "car" || $vehicle == "van" || $vehicle == "bus" || $vehicle == "wheel" || $vehicle == "bike"){
									if(preg_match('',$model)){
										//check for the date time availability
										
									} else {
										//invalid model format
										
									}
								} else {
									//invalid vehicle format
									
								}
							} else {
								//invalid time format
								
							}
						} else {
							//invalid date format
							
						}
					} else {
						//invalid vehicle no format
						
					}
				} else {
					//invalid phone format
					
				}
			} else {
				//invalid last name format
				
			}
		} else {
			//invalid name format
			
		}
	} else {
		//empty fields
		
	}	
} else {
	//form not submitted
	header('Location:../index.php#appointmentForm');	
}
?>