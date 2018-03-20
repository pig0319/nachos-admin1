<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--start: css-modal-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link href="newMenu.css" rel="stylesheet">
	 <?php include('menu.php'); ?>


		<style>

		#parallax {
		    /* The image used */
		    background-image: url("place2.jpg");

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
				
					

			      	<div class="navbar">  
					    <div class="navbar-inner">
					      <a class="navbar-brand" href="#">Naughty Nachos</a>
					    </div>
					    <ul class="nav navbar-nav">
					      <li class="active"><a href="#">Home</a></li>
						  <li><a href="WEB/index.php" class="menu">Menu</a></li>
						  <li><a href="#container-aboutus" class="about">About</a></li>
						  <li><a href="Reservation.php" class="services">Reservation</a></li>
						  <li><a href="#" class="contact">Contact</a></li>
					    </ul>
					 
					</div>
				
				
				</div>	
				<!--end: Navigation -->	

				<
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->

	<!-- start: parallax -->
	<div id="parallax">
		<div class="center">
		<font color= "white">BOOK YOUR TABLE </font>
		<br>
		<font face="Crimson Text" font size="4">We accept reservation. Call us or complete the form below.</font>
		</div>
	</div>
	<!--end: parallax-->


	<!-- start: accordion -->
	<div class =" accordion-container">
		<button class="accordion">Section 1</button>
		<div class="panel">
		  <div class ="items"> <!-- start: items div-->
		 		<?php
					$query = "SELECT * FROM nachosmenu WHERE category ='nachos' ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_array($result))
						{
					?>	
			<div class="col-md-12">
					 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				  	<h2><?php echo $row["prod_name"]; ?></h2>

				  		P<?php echo $row["price"]; ?> 
				  	</button>

				  	<!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    	<form method ="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Modal Header</h4>
				        </div>
				        <div class="modal-body">
				          	<h2><?php echo $row["prod_name"]; ?></h2>

				  				P<?php echo $row["price"]; ?> 

				  			<input type="hidden" name ="hidden_name" value="<?php echo $row["prod_name"]; ?>"/>
							<input type="hidden" name ="hidden_price" value="<?php echo $row["price"]; ?>"/>

							<div class="col-lg-6">
                                        <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </div>

				        </div>
				        <div class="modal-footer">
				          <input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart"/>
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				      		</form>
				    </div>
				  </div>
  			</div> <!-- end of col-md-12-->

					<?php
					}
				}	
				?>

		
				<div style="clear:both"></div>
									
		 	</div> <!--end of items div-->

		</div>

		<button class="accordion">Section 2</button>
		<div class="panel">
		 	<div class ="items"> <!-- start: items div-->
		 		<?php
					$query = "SELECT * FROM nachosmenu WHERE category ='nachos' ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_array($result))
						{
					?>	
					<div class="col-md-12">

						<ul style="list-style-type:circle">
						  <li>
						  	<h2><?php echo $row["prod_name"]; ?></h2>
						  	<h2> P<?php echo $row["price"]; ?> </h2>
						  </li>
						</ul>

					</div>

					<?php
					}
				}	
				?>
				<div style="clear:both"></div>
									
		 	</div> <!--end of items div-->
		</div>

		<button class="accordion">Section 3</button>
		<div class="panel">
		  <div class ="items"> <!-- start: items div-->
		 			<?php
					$query = "SELECT * FROM nachosmenu WHERE category ='wings' ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					if(mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_array($result))
						{
					?>	
					<div class="col-md-12">

						<ul style="list-style-type:circle">
						  <li>
						  	<h2><?php echo $row["prod_name"]; ?></h2>
						  	<h2> P<?php echo $row["price"]; ?> </h2>
						  </li>
						</ul>

					</div>

					<?php
					}
				}	
				?>
				<div style="clear:both"></div>
									
		 	</div> <!--end of items div-->
		</div>

	</div> <!-- end: accordion container -->
	<!-- end: accordion -->


	<div class = "Order">
		<h3>Order Details</h3>
		<div class ="table-reponsive">
			<table class= "table table-bordered">
			<tr>
				<th width="40%">Item Name </th>  
				<th width="10%">Quantity </th>
				<th width="20%">Price </th>
				<th width="15%">Total </th>
				<th width="5%">Action </th>
			</tr>
			<?php
			
				if(!empty($_SESSION["shopping_cart"]))
				{
					$total = 0;
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
			?>
			<tr>
			
				<td><?php echo $values["item_name"]; ?> </td>
				<td><?php echo $values["item_quantity"]; ?> </td>
				<td>P<?php echo $values["item_price"]; ?> </td>
				<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> </td>
				<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				
				
			</tr>
			<?php
					 $total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
				?>
					<tr>
					<td colspan ="3" align="right"> Total</td>
					<td align ="right"> P  <?php echo number_format($total, 2); ?> </td>
					<td></td>
					</tr>
				
				<?php
			}
			?>
			
			</table>
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



			<script>
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight){
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    } 
			  });
			}
			</script>

</body>
</html>