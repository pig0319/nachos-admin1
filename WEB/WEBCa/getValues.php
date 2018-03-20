<?php
session_start();


	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}

	$storage = array();

	while($row = mysqli_fetch_array($storage)){
		echo $row[0];
	}
				// $query = "INSERT INTO transaction(cust_id,line_id,order_name,quantity,request,subtotal,total,payment_method,branch,dte) values (1,1,'$storage[0]',$quantity[0],'Pumasok',$totalP,$grand,'PayPal','Maginhawa','01/18/18')";
?>