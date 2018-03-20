
<!DOCTYPE html>
<html>
<head>
<title>CART</title>
	<link rel="stylesheet" type="text/css" href="cart.css"/>
	


	<!--start: css-modal-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	 
  	<!--end: css-modal-->

  	<?php include('menu.php'); ?>
	
</head>
<body>
		<div class="topnav">
		
			<div class="logo">
				<img src="logo.png" width="10px" height="10px">
			</div>

		  <a class="active" href="../homepage.php">Home</a>
		  <a href="#about">About</a>
		  <a href="index.php">Menu</a>
		  <a href="../">Reservation</a>

		  <ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
								
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								
								</div>
							</div>
							
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				
			</ul>
			
		</div>

		<div class ="container" style="width:1000px; padding:25px ;"  >
			<h3 align ="center">M E N U </h3><br/>
			
			<?php
			$query = "SELECT * FROM nachosmenu ORDER BY id ASC";
			$result = mysqli_query($connect, $query);
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
				{
			?>	
			<div class="col-md-3">
				<form method ="post" action="index.php?action=add&id=<?php echo $row["id"];?>">
					<div style = "border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align ="center">
					<img src="wings1.jpg" width="90%" height="30%">
				
					<h4 class="text-info"><?php echo $row["prod_name"]; ?> </h4>
					<h4 class="text-danger"> P<?php echo $row["price"]; ?> </h4>
					<label style="padding:5px"> Quantity : </label> <input type="number" name="quantity"  min="1" max="50">
					<!--<input type="text" name ="quantity" class="form-control" value=" "/>-->
					<input type="hidden" name ="hidden_name" value="<?php echo $row["prod_name"]; ?>"/>
					<input type="hidden" name ="hidden_price" value="<?php echo $row["price"]; ?>"/>
					<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart"/>
				</div>	
			</form>
		</div>
		<?php
			}
		}	
		?>
		<div style="clear:both"></div>
		<br />
		

		  <div class="modal-container overflow-x:auto;"> <!-- Start: Modal container-->
			<button type="button" class="btn btn-outlined btn-primary" data-toggle="modal" data-target="#myModal">CHECKOUT</button>

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg" style="height:80%;">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Modal Header</h4>
			        </div>
			        <div class="modal-body">
			         
			          <div class ="checkout-container">
			          	<table class = "table-wrapper table-bordered">
			          		<tr> <!--start: first row - Order details-->
			          			<td> 
			          				 <!--start: Order details-->
							          <h3>Order Details</h3> 
										<div class ="table-reponsive">
											<table class= "table table-bordered"> 
												<!-- start: Order details table-->
											
											<?php
											
												if(!empty($_SESSION["shopping_cart"]))
												{
													$total = 0;
													foreach($_SESSION["shopping_cart"] as $keys => $values)
													{
											?>

											<tr>
										

												 <td width="50%"><?php echo $values["item_quantity"]; echo" x "; echo $values["item_name"];?> </td>
												 <td width="10%"><?php echo $values["item_price"]; ?></td>
												 <td width="5%"><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> </td>
												<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>

											</tr>

											<?php
													 $total = $total + ($values["item_quantity"] * $values["item_price"]);
												}
												?>
													<tr>
													<td colspan ="2" align="right"> Total</td>
													<td align ="left" colspan="2"> P  <?php echo number_format($total, 2); ?> </td>
												
													</tr>
												
												<?php
											}
											?>
											
												</table>
											<!--end: Order details table-->
						  				</div> 
							        </div> <!--end: Order details-->

			        			</td> <!-- end: first row - Order details -->

			        			<td>
			        				<!-- start: Contact info -->
									
			        			</td>
			        		</tr>			        		
			          	</table>
			        			
			        		<div class="containers"> <!-- start: container for tabs -->
										    <div class="row">
										    <div class="col-md-6">
										      <h3>Default Tab</h3>

										      <div class="tabbable-panel">
										        <div class="tabbable-line">
										          <ul class="nav nav-tabs ">
										            <li class="active">
										              <a href="#tab_default_1" data-toggle="tab">
										              Tab 1 </a>
										            </li>
										            <li>
										              <a href="#tab_default_2" data-toggle="tab">
										              Tab 2 </a>
										            </li>
										            <li>
										              <a href="#tab_default_3" data-toggle="tab">
										              Tab 3 </a>
										            </li>
										          </ul>
										          <div class="tab-content">
										            <div class="tab-pane active tab" id="tab_default_1">
										              <p>
										                I'm in Tab 1.
										              </p>
										              <p>
										                <p><input type="text" placeholder="First name..." oninput="this.className = ''" name="fname"></p>
													    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
													    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
													    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
										              </p>
										              <p>
										                <a class="btn btn-success" href="http://j.mp/metronictheme" target="_blank">
										                  Learn more...
										                </a>
										              </p>
										            </div>
										            <div class="tab-pane tab" id="tab_default_2">
										              <p>
										                Howdy, I'm in Tab 2.
										              </p>
										              <p>
										               	Cash ba daw or paypal
										              </p>
										              <p>
										                <a class="btn btn-warning" href="http://j.mp/metronictheme" target="_blank">
										                  Click for more features...
										                </a>
										              </p>
										            </div>
										            <div class="tab-pane tab" id="tab_default_3">
										              <p>
										                Howdy, I'm in Tab 3.
										              </p>
										              <p>
										                idk what to put here tbh
										              </p>
										              <p>
										                <a class="btn btn-info" href="http://j.mp/metronictheme" target="_blank">
										                  Learn more...
										                </a>
										              </p>
										            </div>
										          </div>
										        </div>
										      </div> <!-- end: container for tabs -->

								
			          </div> <!--end: modal-body-->

			          
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <input type = "submit" name = "submit" value = "Continue" class = "btn btn-outlined btn-primary right" id="sub">
			        </div>
			      </div>
			      
			    </div>
			  </div>
			  
		</div> <!--end: modal-container-->
		  <a href="Checkout.php" class="btn btn-outlined btn-primary"z>CHECKOUT</a>
			<br/>	
		
		<!--Script for form with multiple steps-->	
		<script type="text/javascript" src="index.js"></script>

	
</body>
</html>