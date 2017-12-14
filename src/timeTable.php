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
<div class="wrapper">
  <div class="table">
  	<?php
		$date = date('Y-m-d');
		$query_1 = "SELECT * FROM service_schedule WHERE DATE='".$date."' AND (vehicle_type='car' OR vehicle_type='wheel' OR vehicle_type='bike') AND POINT='1'";
		$result_1 = mysqli_query($con, $query_1);
		if(mysqli_num_rows($result_1)!=0){
			echo '<div class="row header">
					<h3>POINT 01</h3>
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
			while($row_1 = mysqli_fetch_array($result_1)){
				$fName_1 = $row_1['first_name'];
				$lName_1 = $row_1['last_name'];
				$pNo_1 = $row_1['phone_no'];
				$vNo_1 = $row_1['vehicle_no'];
				$date_1 = $row_1['date'];
				$sTime_1 = $row_1['start_time'];
				$vType_1 = $row_1['vehicle_type'];
				$vModel_1 = $row_1['vehicle_model']; 
				$eTime_1 = $row_1['end_time']; 
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
					</div>';
			}
		}
	?>
  </div>
  
  <div class="table">
  	<?php
		$query_2 = "SELECT * FROM service_schedule WHERE DATE='".$date."' AND (vehicle_type='car' OR vehicle_type='wheel' OR vehicle_type='bike') AND POINT='2'";
		$result_2 = mysqli_query($con, $query_2);
		if(mysqli_num_rows($result_2)!=0){
			echo '<div class="row header green">
					<h3>POINT 02</h3>
				</div>
				<div class="row header green">
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
			while($row_2 = mysqli_fetch_array($result_2)){
				$fName_2 = $row_2['first_name'];
				$lName_2 = $row_2['last_name'];
				$pNo_2 = $row_2['phone_no'];
				$vNo_2 = $row_2['vehicle_no'];
				$date_2 = $row_2['date'];
				$sTime_2 = $row_2['start_time'];
				$vType_2 = $row_2['vehicle_type'];
				$vModel_2 = $row_2['vehicle_model']; 
				$eTime_2 = $row_2['end_time']; 
				echo '<div class="row">
					  <div class="cell" data-title="Name">
						'.$vNo_2.'
					  </div>
					  <div class="cell" data-title="Age">
						'.$vType_2.'
					  </div>
					  <div class="cell" data-title="Occupation">
						'.$vModel_2.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$pNo_2.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$fName_2.' '.$lName_2.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$date_2.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$sTime_2.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$eTime_2.'
					  </div>
					</div>';
			}
		}
	?>
  </div>
  
  <div class="table">
    <?php
		$query_3 = "SELECT * FROM service_schedule WHERE DATE='".$date."' AND vehicle_type='van'";
		$result_3 = mysqli_query($con, $query_3);
		if(mysqli_num_rows($result_3)!=0){
			echo '<div class="row header blue">
					<h3>POINT 03</h3>
				</div>
				<div class="row header blue">
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
			while($row_3 = mysqli_fetch_array($result_3)){
				$fName_3 = $row_3['first_name'];
				$lName_3 = $row_3['last_name'];
				$pNo_3 = $row_3['phone_no'];
				$vNo_3 = $row_3['vehicle_no'];
				$date_3 = $row_3['date'];
				$sTime_3 = $row_3['start_time'];
				$vType_3 = $row_3['vehicle_type'];
				$vModel_3 = $row_3['vehicle_model']; 
				$eTime_3 = $row_3['end_time']; 
				echo '<div class="row">
					  <div class="cell" data-title="Name">
						'.$vNo_3.'
					  </div>
					  <div class="cell" data-title="Age">
						'.$vType_3.'
					  </div>
					  <div class="cell" data-title="Occupation">
						'.$vModel_3.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$pNo_3.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$fName_3.' '.$lName_3.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$date_3.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$sTime_3.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$eTime_3.'
					  </div>
					</div>';
			}
		}
	?>
  </div>
  
  <div class="table">
    <?php
		$query_4 = "SELECT * FROM service_schedule WHERE DATE='".$date."' AND vehicle_type='bus'";
		$result_4 = mysqli_query($con, $query_4);
		if(mysqli_num_rows($result_4)!=0){
			echo '<div class="row header yellow">
					<h3>POINT 04</h3>
				</div>
				<div class="row header yellow">
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
			while($row_4 = mysqli_fetch_array($result_4)){
				$fName_4 = $row_4['first_name'];
				$lName_4 = $row_4['last_name'];
				$pNo_4 = $row_4['phone_no'];
				$vNo_4 = $row_4['vehicle_no'];
				$date_4 = $row_4['date'];
				$sTime_4 = $row_4['start_time'];
				$vType_4 = $row_4['vehicle_type'];
				$vModel_4 = $row_4['vehicle_model']; 
				$eTime_4 = $row_4['end_time']; 
				echo '<div class="row">
					  <div class="cell" data-title="Name">
						'.$vNo_4.'
					  </div>
					  <div class="cell" data-title="Age">
						'.$vType_4.'
					  </div>
					  <div class="cell" data-title="Occupation">
						'.$vModel_4.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$pNo_4.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$fName_4.' '.$lName_4.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$date_4.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$sTime_4.'
					  </div>
					  <div class="cell" data-title="Location">
						'.$eTime_4.'
					  </div>
					</div>';
			}
		}
	?>
  </div>
</div>