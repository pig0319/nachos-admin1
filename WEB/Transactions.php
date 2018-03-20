<?php
session_start();
  
    // Create connection
    $connect = mysqli_connect("localhost", "root", "", "nachos-admin"); 
    
    if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}

	if(isset($_POST['submit'])){

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$query = mysqli_query($connect,"INSERT INTO customers(lastname,firstname,email,phone) values('$lname','$fname','$email','$phone')");
	}


	mysqli_close($connect);


?>	