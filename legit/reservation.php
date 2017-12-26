<html>
	<head>
		<title>Reservation Form</title>
		<script>
			function startTime() {
			   	var d = new Date();
				d = d.toLocaleTimeString().replace(/:\d+ /, ' ');
			    document.getElementById('txt').innerHTML = d;
			    var t = setTimeout(startTime, 500);
			}
		</script>
	</head>
	
	<body onload = "startTime()">

		<div id = "txt">
			<form method = "POST" action = "<?php htmlspecialcharacters("PHP_SELF"); ?>" name = "reservation">
						<br>Contact Information<br>
						Name <input type = "text" name = "Name" value = ""><br><br>
						<span class = "error"><?php echo $nameErr; ?></span></br>
						Email <input type = "email" name = "email" value = ""><br><br>
						<span class = "error"><?php echo $emailErr; ?></span></br>
						Phone <input type = "text" name = "phone" value = ""><br><br>
						<span class = "error"><?php echo $phoneErr; ?></span></br>
						
						<br>Booking Information<br>
						Date <input type = "date" name = "d" value = ""><br><br>
						<iframe src="https://calendar.google.com/calendar/embed?src=cpeep89ko6s22iaqr59t7k8vbo%40group.calendar.google.com&ctz=Asia%2FManila" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
						Time In <input type = "time" name = "tIn" value = ""><br><br>
						Time Out <input type = "time" name = "tOut" value = ""><br><br>
						Number of Guests<input type = "text" name = "guest" value = "1">

						<br><br>
						<input type = "submit" name = "submit" value = "Submit">
			</form>
		</div>
	</body>
</html>
