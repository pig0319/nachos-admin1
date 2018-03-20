<?php
	
	session_start();

	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected"."A";
	}

	if(isset($_POST['butt'])===true && empty($_POST['butt']===false)){

		$connections = mysqli_connect("localhost","root","","nachos");
		$query = mysqli_query("SELECT 'nachosmenu.id', 'nachosmenu.prod_name','nachosmenu.price' FROM 'nachosmenu")

			if(mysql_num_rows($query)!==0){
				while($row = mysql_fetch_array($query,MYSQLI_ASSOC)){
					?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['prod_name'];?></td>
						<td><?php echo $row['price'];?></td>
						
					</tr>
					<?php
				}
			} 
	}
	
?>