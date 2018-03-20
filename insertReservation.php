<?php
	session_start();

	$connections = mysqli_connect("localhost","root","","nachos");

	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}else{
		echo "Connected";
	}

	date_default_timezone_set('UTC');

	$currDate = date('d');
	$currMonth = date('m');
	$currYear = date('Y');

	
	$datep = $_POST['datepicker'];
	$guestNum = $_POST['guest'];
	$n = $_POST['name'];
	$e = $_POST['email'];
	$phone = $_POST['n'];
	$num = $_POST['n'];
	$v = $_POST['venue'];	 
	$timeIn = $_POST['timeIn'];
	$id1 = "";
	$id2 = "";
	
	
	
	$monthNum = substr($datep,0,2);
	$dateNum = substr($datep,3,2);
	$yearNum = substr($datep,6);
	$wholenum = "";
	// ALL TRUE MUNA
	if($currYear > $yearNum){
		//FALSE
	}else{
		if(($currMonth == $monthNum)||($currMonth>$monthNum)){
			// echo("OMG");
			if($dateNum > ($currDate+2)){
				// echo("working");
				if($phone == "(+63)"){
					
					if(strlen($num) == 10){
						
						$wholenum = $phone.$num;
						// echo ($wholenum);
					}else{
						//FALSE PART
						// echo '<script>alert("OMG");</script>';
						// header("Location: homepage.php");
						// exit();
						
					}
				}else{
					
					if(strlen($num) == 7){
						$wholenum = $phone.$num;
					}else{
						//FALSE PART
						//header("Location: homepage.php");
						//exit();
						//echo '<script>alert("OMG");</script>';
					}
				}
			}else{ //FALSE PART
				echo("di pwede");
				echo '<script>alert("OMG");</script>';
				header("Location: homepage.php");
						exit();
			}
		}else{ //FALSE PART
			
		}
	}
		switch($timeIn){
		case 0: $timeIn = "12:00NN"; break;
		case 1: $timeIn = "12:30PM"; break;
		case 2: $timeIn = "1:00PM"; break;
		case 3: $timeIn = "1:30PM"; break;
		case 4: $timeIn = "2:00PM"; break;
		case 5: $timeIn = "2:30PM"; break; 
		case 6: $timeIn = "3:00PM"; break;
		case 7: $timeIn = "3:30PM"; break;
		case 8: $timeIn = "4:00PM"; break;
		case 9: $timeIn = "4:30PM"; break;
		case 10: $timeIn = "5:00PM"; break;
		case 11: $timeIn = "5:30PM"; break;
		case 12: $timeIn = "6:00PM"; break;
		case 13: $timeIn = "6:30PM"; break;
		case 14: $timeIn = "7:00PM"; break;
		case 15: $timeIn = "7:30PM"; break;
		case 16: $timeIn = "8:00PM"; break;
		case 17: $timeIn = "8:30PM"; break;
		case 18: $timeIn = "9:00PM"; break;
		case 19: $timeIn = "9:30PM"; break;
		case 20: $timeIn = "10:00PM"; break;
		}
		

	
		if(isset($_POST['submit'])){
			
			echo"omg";
			echo $n;
			echo $e;
			echo $wholenum;
			echo $guestNum;
			echo $datep;
			echo $timeIn;
			echo $v;
			
			$query = mysqli_query($connections,"INSERT INTO reservations(name,email,phone,pax,dte,timeIn,venue,month,year) values ('$n','$e','$wholenum',$guestNum,'$datep','$timeIn','Naughty Nachos - Maginhawa',$monthNum,$yearNum)");




			?>

			<!-- <script type="text/javascript">
				 alert("Hello! I am an alert box!!");
				
			
			</script> -->


			<?php
			

			echo("tapos na");
		}

		
		
	mysqli_close($connections);
?>