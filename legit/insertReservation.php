<?php
	session_start();

	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected. A";
	}

	$g = $_POST['guest'];
	$da = $_POST['d'];
	$n = $_POST['name'];
	$e = $_POST['email'];
	$p = $_POST['phone'];
	$v = $_POST['venue']; 
	$timeIn = $_POST['tIn'];
	$timeOut = $_POST['tOut'];
	$check1 = $_POST['tIn'];
	$check2 = $_POST['tOut'];
	$id1 = "";
	$id2 = "";


	$phoneCheck = $p;

	$phoneCheck = strlen($p);
	
	if($phoneCheck >7 && $phoneCheck<11){
		echo "Must be a 7-digit landline number or 11-digit mobile number.";
	}else if($phoneCheck == 7 || $phoneCheck == 11){
		
		if(substr($timeIn,0,2) < 12){
			$id1 = " AM";

		}else{
			$id1 = " PM";
		}

		if(substr($timeOut,0,2) < 12){
			$id2 = " AM";
		}else{
			$id2 = " PM";
		}

		if(substr($timeIn,0,2) == substr($timeOut,0,2)){
			echo "Booking duration must be at least 1 hour.";
		}else{ //--------------------------------------------->>>>>>>>>>>>>>>>>>>>
			if(isset($_POST['submit'])){
			echo "pumapasok";	
				$query = mysqli_query($connections, "INSERT INTO reservations(name,email,phone,pax,dte,timeIn, timeOut, venue) values ('$n','$e',$p,'$g','$da','$timeIn $id1','$timeOut $id2','$v')");
			}
		}
}
	mysqli_close($connections);
?>

