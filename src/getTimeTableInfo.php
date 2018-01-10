<?php
include_once('../ssi/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
a {
	color:rgba(255,0,0,0.5);
}
a:hover {
    color:rgba(255,0,0,1);
}
a:visited{
	color:rgba(255,0,0,0.5);
}
</style>
</head>
<?php
//date
$q = trim(htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST["q"])));
//point
$r = trim(htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST["r"])));
if($q != "" && $r != ""){
	if($r == "1"){
		$query = "SELECT * FROM service_schedule WHERE DATE='".$q."' AND (vehicle_type='car' OR vehicle_type='wheel' OR vehicle_type='bike') AND POINT='1'";
	} else if($r == "2") {
		$query = "SELECT * FROM service_schedule WHERE DATE='".$q."' AND (vehicle_type='car' OR vehicle_type='wheel' OR vehicle_type='bike') AND POINT='2'";
	} else if($r == "3"){
		$query = "SELECT * FROM service_schedule WHERE DATE='".$q."' AND vehicle_type='van'";
	} else if($r == "4"){
		$query = "SELECT * FROM service_schedule WHERE DATE='".$q."' AND vehicle_type='bus'";
	}
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result)!=0){
		echo '<div class="table">
			  <div class="row header">
				<h3>POINT 0'.$r.'</h3>
			</div>
			<div class="row header">
			  <div class="cell">
				Vehicle No
			  </div>
			  <div class="cell">
				Vehicle Type
			  </div>
			  <div class="cell">
				Vehicle Model
			  </div>
			  <div class="cell">
				Phone No
			  </div>
			  <div class="cell">
				Name
			  </div>
			  <div class="cell">
				Date
			  </div>
			  <div class="cell">
				Start Time
			  </div>
			  <div class="cell">
				Approximate End Time
			  </div>
			</div>';
		while($row = mysqli_fetch_array($result)){
			$fName_1 = $row['first_name'];
			$lName_1 = $row['last_name'];
			$pNo_1 = $row['phone_no'];
			$vNo_1 = $row['vehicle_no'];
			$date_1 = $row['date'];
			$sTime_1 = $row['start_time'];
			$vType_1 = $row['vehicle_type'];
			$vModel_1 = $row['vehicle_model']; 
			$eTime_1 = $row['end_time']; 
			echo '<div class="row">
				  <div class="cell" data-title="Name">
					'.$vNo_1.'
				  </div>
				  <div class="cell" data-title="Age">
					'.$vType_1.'
				  </div>
				  <div class="cell" data-title="Occupation">
					'.$vModel_1.'
				  </div>
				  <div class="cell" data-title="Location">
					'.$pNo_1.'
				  </div>
				  <div class="cell" data-title="Location">
					'.$fName_1.' '.$lName_1.'
				  </div>
				  <div class="cell" data-title="Location">
					'.$date_1.'
				  </div>
				  <div class="cell" data-title="Location">
					'.$sTime_1.'
				  </div>
				  <div class="cell" data-title="Location">
					'.$eTime_1.'
				  </div>
				</div>
				</div>';die();
		}
	} else {
		//if no result to show
		echo '<h3 class="text-center" style="padding:50px;">No Bookings To Display.</h3>';
	}	 			  
} else {
	// 404 no operation
	header('Location:../404.php');	
}
?>