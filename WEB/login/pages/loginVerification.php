<?php

	
session_start();

	$connections = mysqli_connect("localhost","root","","nachos-admin");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected"."A";
	}
	
	
	$user = $_POST["id"];
	$pass = $_POST["password"];

	// Connect to the database

	// Select the database to use
	
	$result = mysqli_query($connections, "SELECT userid,password FROM users WHERE userid = '$user' and password = '$pass'");

	echo "go";
	$row = mysqli_num_rows($result);

	if($row==1){
		header("location: index.html");
	}else{
		echo $row;
	}

	
?>