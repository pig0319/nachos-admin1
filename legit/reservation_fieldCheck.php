<?php

	include("connections.php");

	$name = $phone = $email = $d = $tIn = $tOut = $guest = "";
	$nameErr = $phoneErr = $emailErr = $dErr = $tInErr = $tOutErr = $guestErr = "";

	//----------->>>>FIELD CHECKING<<<<<<<<<<---------------
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$nameErr = "*Name is required!";
		}else{
			$name = $_POST["name"];		
		}

		if(empty($_POST["phone"])){
			$phoneErr = "*Phone number is required";
		}else{
			$phone = $_POST["phone"];		
		}
		if(empty($_POST["email"])){
			$phoneErr = "*Email is required";
		}else{
			$phone = $_POST["email"];		
		}
		if(empty($_POST['d'])){
			$dErr = "*Date is required";
		}else{
			$d = $_POST['d'];
		}
		if(empty($_POST['tIn'])){
			$tInErr = "*Time in is required";
		}else{
			$tIn = $_POST['tIn'];
		}
		if(empty($_POST['tOut'])){
			$tOutErr = "*Time out is required";
		}else{
			$tOut = $_POST['tOut'];
		}
		if(empty($_POST['guest'])){
			$guestErr = "*Number of guests is required";
		}else{
			$guest = $_POST['guest'];
		}

	}
	//--------->>>>END OF FIELD CHECKING<<<<-----------------

	//---------->>>EMAIL VERIFICATION<<<----------------
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
		$emailErr = "*Email is invalid!";
	}else{
		$email = $_POST["email"];
	}
	//--------->>>>>END OF EMAIL VERIFICATION<<<<<------

?>