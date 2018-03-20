<?php

	session_start();

	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}
	if(isset($_POST['Settled'])){
		$value = $_POST['Customer_ID'].value();
		$query = mysqli_query($connections,"UPDATE 
		reservations where cust_id = $value set status = 'Settled'");

		echo 1;
}

?>