
<!DOCTYPE html>
<html>
<head>
<title>CART</title>
	<link rel="stylesheet" type="text/css" href="cart.css"/>
	


	<!--start: css-modal-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link href="indes.css" rel="stylesheet">
	 
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
		  <a href="../Reservation.php">Reservation</a>

		  <ul class="nav navbar-nav navbar-right">
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
			$query = "SELECT * FROM nachosmenu ORDER BY product_id ASC";
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
					<label style="padding:5px"> Quantity : </label> <input type="number" name="quantity"  min="1" max="50" value ="1">
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
		<!-- Order details from WEB -->
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

		  <!-- Order details from WEB -->

		  <!-- Start modal -->

		  <div class="modal-container overflow-x:auto;"> <!-- Start: Modal container-->
			<button type="button" class="btn btn-outlined btn-primary" data-toggle="modal" data-target="#myModal" style="text-align: right;
	float: right;">CHECKOUT</button>

			  <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg" style="height:80%;">
			    
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        <div class="modal-body">
			        	<div class ="flex-container"> <!-- start: flex-container -->
			        		<div class = "order-details"> <!-- start: Order details -->
						          				 <!--start: Order details-->
										          <h3>Orders</h3> 
												
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
											
												</table> <!--end: Order details table-->
									

					        </div>	<!-- end: Order details -->
					        	

					        <div class = "customer-details"> <!-- Start: customer-info -->

					        	<div class="tab"><!--Start: Contact info tab -->
					        		 <form class="form-horizontal" action="Transactions.php" method="post">
								          <fieldset>
								            <legend class="text-center">Contact Info</legend>
								    
								            <!-- First Name input-->
								            <div class="form-group">
								              <label class="col-md-3 control-label" for="name">First Name</label>
								              <div class="col-md-9">
								                <input id="fname" name="fname" type="text" placeholder="first name" class="form-control">
								              </div>
								            </div>


								            <!-- Name input-->
								            <div class="form-group">
								              <label class="col-md-3 control-label" for="name">Last Name</label>
								              <div class="col-md-9">
								                <input id="lname" name="lname" type="text" placeholder="last name" class="form-control">
								              </div>
								            </div>
    
								            <!-- Email input-->
								            <div class="form-group">
								              <label class="col-md-3 control-label" for="email">Your E-mail</label>
								              <div class="col-md-9">
								                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
								              </div>
								            </div>
								    
								            <!-- Phone body -->
								            <div class="form-group">
								              <label class="col-md-3 control-label" for="email">Phone Number</label>
								              <div class="col-md-9">
								                <input id="phone" name="phone" type="text" placeholder="phone" class="form-control">
								              </div>
								            </div>
								    	
								            <!-- Form actions -->
								            <div class="form-group">
								              <div class="col-md-12 text-right">
								                <input type="submit" name ="submit" class="btn btn-primary btn-lg">Submit
								              </div>
								            </div>
											 


								          </fieldset>
								          </form>
											   
											   
								</div> <!-- end: Contact info tab -->


								<div class="tab">
											   		<!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                            </div>
                        </div>
                    -->
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
								</div>
					        	
					        </div> <!--end: customer-info-->
			        	</div>	<!-- end: flex-container -->         	
					</div> <!--end: modal-body-->

			          
			        <div class="modal-footer"> <!-- start: modal-footer -->
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <div style="overflow:auto;">
			          						 
											    <div style="float:right;">
											      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
											      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
											    </div>
											  </div> 
											<!--  Circles which indicates the steps of the form: -->
											  <div style="text-align:center;margin-top:40px; display: none">
											    <span class="step"></span>
											    <span class="step"></span>
											    <span class="step"></span>
											    <span class="step"></span>
											  </div>
												
			        </div> <!-- end: modal-footer -->
			      </div>
			      
			    </div>
			  </div>
			  
		</div> <!--end: modal-container
		  <a href="Checkout.php" class="btn btn-outlined btn-primary"z>CHECKOUT</a>
			<br/>	-->
		


		<!--Script for form with multiple steps-->
		<script type="text/javascript" src="indes.js"></script>
			

	
</body>
</html>