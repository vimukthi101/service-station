<?php
include_once('../ssi/db.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>
<?php
//date
$q = trim(htmlspecialchars(mysqli_real_escape_string($con,$_REQUEST["q"])));
if($q != ""){
	$query = "SELECT * FROM service_schedule WHERE DATE like '".$q."%'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result)!=0){
		echo '<div>
			<table class="table">
			  <thead>
			  <tr class="danger">
			  	<th>
					Vehicle No
			  	</th>
			  	<th>
					Vehicle Type
			  	</th>
			  	<th>
					Vehicle Model
			  	</th>
			  	<th>
					Phone No
			  	</th>
			  	<th>
					Name
			  	</th>
			  	<th>
					Date
			  	</th>
			  	<th>
					Booked Time
			  	</th>
			</tr></thead><tbody>';
		while($row = mysqli_fetch_array($result)){
			$fName_1 = $row['first_name'];
			$lName_1 = $row['last_name'];
			$pNo_1 = $row['phone_no'];
			$vNo_1 = $row['vehicle_no'];
			$date_1 = $row['date'];
			$sTime_1 = $row['start_time'];
			$vType_1 = $row['vehicle_type'];
			$vModel_1 = $row['vehicle_model']; 
			echo '<tr class="warning">
				  <th>
					'.$vNo_1.'
				  </th>
				  <th>
					'.$vType_1.'
				  </th>
				  <th>
					'.$vModel_1.'
				  </th>
				  <th>
					'.$pNo_1.'
				  </th>
				  <th>
					'.$fName_1.' '.$lName_1.'
				  </th>
				  <th>
					'.$date_1.'
				  </th>
				  <th>
					'.$sTime_1.'
				  </th></tr>';
		}
		echo '</tbody></table></div>';
	} else {
		//if no result to show
		echo '<h3 class="text-center" style="padding:50px;">No Bookings To Display.</h3>';
	}	 			  
} else {
	// 404 no operation
	header('Location:../404.php');	
}
?>