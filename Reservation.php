
<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}


.center { 
    padding: 220px 0;
    text-align: center;
    font-size: 70px;
   
   
}
#make{
    text-decoration: underline;
    text-decoration-style:double;
    font-family: 'Hammersmith One', sans-serif;
    font-size: 35px;
    color:black;
    text-align: center;
}





</style>
	
	<title>Reservation page</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!--FONTS-->

		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Fjalla+One|Hammersmith+One|Kanit" rel="stylesheet">

		<!-- start: CSS -->
	    <link href="OGcss/bootstrap.min.css" rel="stylesheet">
	    <link href="OGcss/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="OGcss/Reservation.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
		 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Mukta+Malar">


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
		<!-- end: CSS -->


		<style>

		#parallax {
		    /* The image used */
		    background-image: url("img/place2.jpg");

		    /* Set a specific height */
		    min-height: 500px; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;


			}

	</style>

	<script>
	function Time(){
						
						var choices = ["12:00 NN","12:30 PM","1:00 PM","1:30 PM","2:00 PM", "2:30 PM","3:00 PM","3:30 PM","4:00 PM", "4:30 PM", "5:00 PM", "5:30 PM", "6:00 PM", "6:30 PM", "7:00 PM", "7:30 PM","8:00 PM", "8:30 PM", "9:00 PM","9:30 PM","10:00 PM"];
						
						for(var i=0;i<choices.length-2;i++){
							var opt = document.createElement("option");
							var sel = document.getElementById("timeIn");
							opt.innerHTML = choices[i];
							opt.value = i;
							sel.appendChild(opt);
						}


						for(var x = 2; x<choices.length;x++){
							var opt1 = document.createElement("option");
							var sel1 = document.getElementById("timeOut");
							opt1.innerHTML = choices[x];
							opt1.value = x;
							sel1.appendChild(opt1);
						}
						
									
					}
				function cp(){
			var val = document.getElementById('p').value;
			var num = document.getElementById('n');



			if(document.getElementById('p').value == '(+63)'){
				num.placeholder = "915xxxxxxx";
			}else{
				num.placeholder = "941xxxx";
			}
		


		}

	</script>


</head>
	
<body onload = "Time()">
	
	<!--start: Header -->
	<header>
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
				<div class="navigation"> 
				
					<div class="navbar navbar-fixed-top">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
				            		menu
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			            			  <li><a href="homepage.php" class="home">Home</a></li>
									  <li><a href="WEB/index.php" class="menu">Menu</a></li>
									  <li><a href="#container-aboutus" class="about">About</a></li>
									  <li class="active"><a href="Reservation.php" class="services">Reservation</a></li>
									  <li><a href="homepage.php" class="contact">Contact</a></li>

									
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
				</div>	
				<!--end: Navigation -->	
			</div>
			<!--end: Row -->
		</div>
		<!--end: Container-->			
	</header>
	<!--end: Header-->


	<div id="parallax">
		<div class="center">
		<font color= "white">BOOK YOUR TABLE </font>
		<br>
		<font face="Crimson Text" font size="4">We accept reservation. Call us or complete the form below.</font>
		</div>
	</div>
	<!--end: parallax-->

	
	<!-- start: 6th Page - Reservation -->
	<div id="Reservation-container">
		<br>
		<br>
			<div id="make">
		MAKE A RESERVATION
	</div>
	<br>
	<br>
	<br>
		<h2>You may make a reservation any time online or by calling (000) 111 2222 during our opening hours:</h2>
		<div id = "txt">
			<div id = "txtBorder">
				<div class = "res">

					<table>

						<form name = "reservation" method = "POST" action = "insertReservation.php" target="myIframe" onsubmit="div_show()">
							 <!--  -->

					<tr>
						    <th></th>
						    <th><b>CONTACT INFORMATION<b></th> 
						    <th></th>
					</tr>


		<!-- Booking information-->	
						  <tr>  <!-- first ROW(r1) -->
						    <td> <!-- 1st COLUMNr1-->
						    	Venue
						    	<input type = "text" name = "venue" id = "venue" value = "Naughty Nachos - Maginhawa" readonly>
								<!-- <select id = "venue"  name = "venue" >
									<option value = "Whole Place"> Whole Place</option>
									<option value = "First Floor"> First Floor</option>
									<option value = "Second Floor" selected> Second Floor</option>
								</select> -->
						    </td> <!-- end of 1st COLUMNr1-->

						    <td > <!-- 2nd COLUMNr1-->
						    	
								<script>

							   $(function() {
							   $( "#datepicker" ).datepicker({
								  minDate: 3
								});

							     $("#datepicker").change(function(){


							    
							         var date = Date.parse($(this).val());

							         if (date <= Date.now()){
							             alert('Please select another date');
							             $(this).val('');
							         }
							         
							     });
							});
							    </script>
							    Date:  <input type="text" id="datepicker" name = "datepicker"/>
						    </td> <!-- end of 2nd COLUMNr1-->

						    <td > <!-- 3rd COLUMNr1 -->
						    	Time
						    	<select id = "timeIn" name = "timeIn">				
								</select>

						    </td> <!-- end of 3rd COLUMNr1 -->

						  </tr> 

						  <!-- #########-end of first ROW(r1) ############ -->

						<!-- start of second ROW(r2) Contact info -->
						
						  <tr>
						    <th>
						    	 Name <input type = "text" name = "name" id = "name" placeholder = "Juan dela Cruz" required>
							</th>
						    <th>
						    	 Email <input type = "email" name = "email" id = "email" placeholder = "juandc@gmail.com" required>
						    </th> 
						    <th>
						    	Phone
								<input type = "text" name = "n" id = "n"  placeholder = "09xxxxxxxxx" required pattern="[0-9]{11}">

						    </th>
						  </tr>

						  <!-- ######### end of second ROW(r2) Contact info #########-->
			

						  <!-- start of third ROW(r3) Guest Num -->

						  <tr> 
						    <td>  </td>
						    <td>
						    	 Number of Guests
						    	 <input type = "number" name = "guest" value = "2" min = "2" max = "100" width placeholder="Number of Guests">
						    </td>
						    <td>  </td>
						  </tr>


						  <tr>
						  	<td colspan="3"><br>
						  		Special Request
						  		<input type = "text" id = "req" name = "request" value ="" placeholder="Special Request">
						  	</td>
						  </tr>

						  <!-- ######### end of third ROW(r3) Contact info #########-->

						 <tr>
						 	<th>  </th>
						 	<th>
						 	<input type = "submit" name = "submit" value = "Submit" class = "btn btn-outlined btn-primary" id="sub">
						 	</th>
						 	<tH>  </th>
						 </tr>
						
						</table>
					</form>


	<iframe name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 100%; height: 120px;"></iframe>
	
	</div>



	<div class ="puta" style="display: none;">
		<br><center>
		<font face="Hammersmith One" font size="6" font color ="black">Message sent</font>
		<br>
		<br>
		<p>Thanks for contacting us! We will get to your message as soon as we can</p>
		<br>
		<br>
		<a href="homepage.php" class="btn btn-outlined btn-primary">FIND MORE</a>
		<br>
		</center>
	</div>



	
	<!--start: footer-->
	<footer>
		<!--start: footer row-->
		<div class ="row">

			<div class="column">
				<p>ADDRESS:</p>
				<font face="Crimson Text" font size="3">95 Magiting St. Corner Maginhawa Quezon City</font>
		    </div>

				<div class="column">
					<p>RESERVATION:</p>
					<font face="Crimson Text" font size="3">contact@nachos.com</font>
			</div>

				<div class="column">
					<p>OPEN HOURS:</p>
					<font face="Crimson Text" font size="3">Monday-Friday: 10 AM - 11 PM</font>
					<br>
					<font face="Crimson Text" font size="3">Saturday-Sunday: 10 AM - 11 PM</font>
			</div>

		</div>
		<!--end: row-->

		<div id="copyright">
			Naughty Nachos Est. 2014 &copy
		</div>
		<div id="social">
			<a href="http://facebook.com/naughtnachos" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
		</div>	
	</footer>
	<!--end: footer-->


<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->




<script type="text/javascript">	



	function div_show() {
			 $("div.res").hide();
			 $("div.puta").show();

			}
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
		  				slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});



</script>


	
<!-- end: Java Script -->



</body>
</html>