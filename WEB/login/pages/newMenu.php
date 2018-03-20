<?php
session_start();


	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}

	if(isset($_POST['submitAdd'])){
		$newID = $_POST['add_id'];
		$newName = $_POST['add_name'];
		$newPrice = $_POST['add_price'];
		$addQuery = mysqli_query($connections,"INSERT into nachosmenu (id,prod_name,price) values($newID,'$newName',$newPrice)");
		echo $newID;

	
	
	}else if(isset($_POST['submitUpdate'])){
		$updateID = $_POST['updateID'];
		$updateName = $_POST['update_name'];
		$updatePrice = $_POST['update_price'];
		$updateQuery = mysqli_query($connections,"UPDATE 
		nachosmenu set prod_name = '$updateName', price = $updatePrice where id = $updateID");
	}else if(isset($_POST['submitDelete'])){
		$deleteID = $_POST['deleteID'];
		$deleteQuery = mysqli_query($connections,"DELETE from nachosmenu where id = $deleteID");
	}

	header("location: tableView.php");
?>