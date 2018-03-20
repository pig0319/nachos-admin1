<?php
	
	session_start();
	$connections = mysqli_connect("localhost","root","","nachos-admin");

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$query=mysqli_query($connections,"INSERT INTO contact (name,email,message) values ('$name','$email','$message')");

		header("location:homepage.php");
	}
?>