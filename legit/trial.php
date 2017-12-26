<html>
	<head>
		<title>Reservation Form</title>
		<link rel = "stylesheet" type = "text/css" href = "reservationCSS.css">
		<script>
			function startTime() {
			   	var d = new Date();
				d = d.toLocaleTimeString().replace(/:\d+ /, ' ');
			    // document.getElementById('txt').innerHTML = d;
			    var t = setTimeout(startTime, 500);
			}

			function a(){
				var ds = document.getElementById('d').value;
				alert("date: "+ds.toString());
			}

			function checkTime(){
				var check = document.getElementById('tIn').value;
				alert("time: "+check.toString());
			}

			function fDay(){
				var frag = document.createDocumentFragment();
				var collector = 0;
				var d = new Date();
				var year = d.getFullYear();
				var m = document.getElementById('month').value;
				if(m == 'April' || m == 'June' || m == 'November'){
					collector = 31;
				}else if(m == 'February'){
					if(year%4 == 0){
						collector = 29;
					}else{
						collector = 28;
					}
				}else{
					collector = 31;
				}
				for(var i=1;i<=collector;i++){
					var opt = document.createElement("option");
					var sel = document.getElementById("day");	
					opt.innerHTML = i;
					opt.value = i;
					sel.appendChild(opt);
				}

				for(var a=year; a<=(year+1);a++){
					var opt1 = document.createElement("option");
					var sel1 = document.getElementById("year");
					opt1.innerHTML = a;
					opt1.value = a;
					sel1.appendChild(opt1);
				}
				
	

			}

			function Time(){
				
				var choices = ["12:00 NN","12:30 PM","1:00 PM","1:30 PM","2:00 PM", "2:30 PM","3:00 PM","3:30 PM","4:00 PM", "4:30 PM", "5:00 PM", "5:30 PM", "6:00 PM", "6:30 PM", "7:00 PM", "7:30 PM","8:00 PM", "8:30 PM", "9:00 PM","9:30 PM","10:00 PM"];
				
				for(var i=0;i<choices.length;i++){
					var opt = document.createElement("option");
					var sel = document.getElementById("timeIn");
					opt.innerHTML = choices[i];
					opt.value = i;
					sel.appendChild(opt);
				}			
			}
			
		</script>
	</head>
	
	<body onload = "Time()">


		<div id = "txt">
			<div id = "txtBorder">
				<div class = "res">
					
					<form name = "reservation" method = "POST" action = "insertReservation.php" >
								<b><br>CONTACT INFORMATION<br></b><br>
								Name <input type = "text" name = "name" value = ""><br><br>
								<!-- <span class = "error"><?php echo $nameErr; ?></span></br> -->
								Email <input type = "email" name = "email" value = ""><br><br>
								<!-- <span class = "error"><?php echo $emailErr; ?></span></br> -->
								Phone <input type = "tel" name = "phone" placeholder = "9412891/09153192314" minlength = "7" maxlength = "11"><br><br>
								<!-- <span class = "error"><?php echo $phoneErr; ?></span></br> -->
								
								<b><br>BOOKING INFORMATION<br></b><br>
								Venue  
								<select name = "venue">
									<option id = "P1"> Place 1 </option>
									<option id = "P2"> Place 2 </option>
									<option id = "P3"> Place 3 </option>
								</select><br><br>
								Date
								<select id = "month" onChange = "fDay()">
									<option value = "January"> January </option>
									<option value = "February"> February </option>
									<option value = "March"> March </option>
									<option value = "April"> April </option>
									<option value = "May"> May </option>
									<option value = "June"> June </option>
									<option value = "July"> July </option>
									<option value = "August"> August </option>
									<option value = "September"> September </option>
									<option value = "October"> October </option>
									<option value = "November"> November </option>
									<option value = "December"> December </option>
								</select>

								<select id = "day" style = "width: 100px;">

								</select>

								<select id = "year">

								</select>
								<br><br>
								
								Time In
								<select id = "timeIn">
									
								</select>

								Time Out
								<select id = "timeOut">

								</select>
								<br><br>	
								Number of Guests <input type = "number" name = "guest" value = "1" min = "2" max = "200" width>
								<br><br>
								<input type = "submit" name = "submit" value = "Submit" class = "btn">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
