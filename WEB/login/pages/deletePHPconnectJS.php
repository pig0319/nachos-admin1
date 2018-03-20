<?php


	session_start();


	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}

	$deleteID = $_POST['deleteID'];
	$query = "SELECT prod_name from nachosmenu where id = $deleteID";

	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	echo json_encode($row);


?>