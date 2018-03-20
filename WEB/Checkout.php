
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




</style>
	
	<title>Reservation page</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!--FONTS-->

		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Fjalla+One|Hammersmith+One|Kanit" rel="stylesheet">

		<!-- start: CSS -->
	    <link href="Contact.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
		 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Mukta+Malar">


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- end: CSS -->


		<style>

		#parallax {
		    /* The image used */
		    background-image: url("../img/place1.jpg");

		    /* Set a specific height */
		    min-height: 500px; 

		    /* Create the parallax scrolling effect */
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;


			}

	</style>


</head>
	
<body>
	
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
									<li><a href="../homepage.php" class="home">Home</a></li>
									<li><a href="index.php" class="menu">Menu</a></li>
									<li><a href="../homepage.php" class="about">About</a></li>
									<li><a href="../homepage.php" class="services">Services</a></li>
									<li><a href="../homepage.php" class="contact">Contact</a></li>
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
	</div>
	<!--end: parallax-->
	<div class="container">
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


	
	<!-- start: Contact info -->
	
	<div class = "contact-info">
		<div class = "bg">  <!-- start: bg -->
			<form name = "Contact-info" method = "POST" action = "" target="myIframe" onsubmit="div_show()">

				
				<h4>Let's add your contact details</h4>
				<table>
					<tr>
						<td>
							<input type = "text" name = "firstname" value="" placeholder = "first name" required=""><br>
						</td>

						<td>
							<input type = "text" name = "lastname" value="" placeholder = "last name" required="">
						</td>
					</tr>

					<tr>
						<td>
							<input type = "email" name ="email" value ="" placeholder = "you@example.com" required="">
						</td>

						<td>
							<input type ="number" name = "phonenumber" value ="" placeholder ="phone" required="">
						</td>
					</tr>
				</table>
				
				<br><br>
				<input type = "submit" name = "submit" value = "Continue" class = "btn btn-outlined btn-primary right" id="sub">
		</form>
		<iframe name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 100%; height: 120px;"></iframe>
		</div> <!-- end: bg -->



	</div>
	<!-- end: Contact info -->




	<!--	<iframe name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 100%; height: 120px;"></iframe> -->
	

	<div class ="payment-container">
		<div class ="payment" style="display:none">
			<form name = "payment-info" method = "POST" action = "" target="myIframe" onsubmit="div_show()">
				<table>
					<tr>
						<td>
							<input type = "submit" name = "submit" value = "Cash upon arrival" class = "btn btn-outlined btn-primary" id="sub">
						</td>

						<td>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="business" value="accounts@freelanceswitch.com">
						    <input type="hidden" name="item_name" value="Donation">
						    <input type="hidden" name="item_number" value="1">
						    <input type="hidden" name="amount" value="9.00">
						    <input type="hidden" name="no_shipping" value="0">
						    <input type="hidden" name="no_note" value="1">
						    <input type="hidden" name="currency_code" value="USD">
						    <input type="hidden" name="lc" value="AU">
						    <input type="hidden" name="bn" value="PP-BuyNowBF">
							<input type="hidden" name="return" value="http://net.tutsplus.com/payment-complete/">
							<input type = "submit" name = "submit" value = "         PayPal         " class = "btn btn-outlined btn-primary rightBut" id="sub">
							</form>
							
						</td>
					</tr>
				</table>
			</form>
			<iframe name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 100%; height: 120px;"></iframe>
		</div>
	</div>



	
	<!--start: footer-->
	<footer>
		<!--start: footer row-->
		<div class ="row">

			<div class="column">
				<p>ADDRESS:</p>
				<font face="Crimson Text" font size="3">Magiting st. corner Maginhawa Quezon City</font>
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
			 $("div.bg").hide();
			 $("div.payment").show();
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