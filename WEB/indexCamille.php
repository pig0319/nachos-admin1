<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--start: css-modal-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 
	<!--for add to cart button--> 
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	
	 <link href="newM.css" rel="stylesheet">
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
		<button class="accordion">Wings</button>
		<div class="panel">
          <div class ="items"> <!-- start: items div-->	
              <div class="col-md-12">
            <?php
            		require_once 'dbconfig.php';
            		$query = "SELECT * FROM menu WHERE category ='wings' ORDER BY product_id ASC";
            		$stmt = $DBcon->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
						?>
                   
						  	<ul>
                   		<li>
						<div class="w3-panel">
	                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
						<div>
					  </li>
                   	</ul>

                    <?php
                }  
                ?>
                 </div> <!--end of col-ms-12-->

                 <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	             	<div class="modal-dialog"> 
	                  <div class="modal-content"> 
	                  
	                       <div class="modal-header"> 
	                            <button type="button" class="close" style="color:black" data-dismiss="modal" aria-hidden="true">-</button> 
	                            <h4 class="modal-title" style="color:black">
	                            	<i class="glyphicon glyphicon-user" ></i> User Profile
	                            </h4> 
	                       </div> 
	                       <div class="modal-body"> 
	                       
	                       	   <div id="modal-loader" style="display: none; text-align: center;">
	                       	   	<img src="ajax-loader.gif">
	                       	   </div>
	                       
	                       	   <div id="dynamic-content">
	                                        
	                           <div class="row"> 
	                           	
	                                <div class="col-md-6"> 

	                                	<p id = "prod_name" style ="color:black; font-size:25px"> </p>
										<p style ="color:black; font-size:15px; float:left">&#8369;</p>
										<p style ="color:black; font-size:15px; float:center" id ="prod_price"> </p>
	                                	<p id = "prod_desc" style ="color:black; font-size:15px"> </p>
										
										
										<hr width="100%">
										<p style ="color:black; font-size:15px">Special Request ?<p>
										<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:100px;" ></textarea>	
										
	                                	<!--<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" style="color:black" />-->
										
	                                </div> 
									
									 <div class="col-md-6"> 
									
									<img src="wings1.jpg" width="90%" height="30%"></img>
									
										
										<br/>
										<br/>
										<p style="color:black; font-size:14px; word-spacing:20px; float:center"> Quantity  <input type="number" name="quantity"  min="1" max="50" value ="1" style="width:130px" > </p>
	                                	
	                            	<br/>
									
	                                </div>
										
									<div class="col=md-12">
									<br/>
									<br/>
									
									<div class="w3-panel">
										<button  class="w3-button w3-block w3-black">+ ADD TO MY ORDER</button>
									   </div>
									   </div>
									
	                          </div>
	                          
	                          </div> 
	                             
	                        </div> 
	                        <div class="modal-footer"> 
									
									   
	                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
	                        </div> 
	                        
		                 </div> 
		              </div>
		       		</div><!-- /.modal -->    
	        </div> <!--end of items div-->
        </div> <!-- end of panel -->

		<button class="accordion">Nachos</button>
		<div class="panel">
		 	 <div class ="items"> <!-- start: items div-->	
              <div class="col-lg-12">
            <?php
            		require_once 'dbconfig.php';
            		$query = "SELECT * FROM menu WHERE category ='nachos' ORDER BY product_id ASC";
            		$stmt = $DBcon->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
						?>
                   	<ul>
                   		<li>
	                   <div class="w3-panel">
	                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
						<div>
	                    </li>
                   	</ul>
                    <?php
                }  
                ?>
                 </div> <!--end of col-ms-12-->

                 <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	             	<div class="modal-dialog"> 
	                  <div class="modal-content"> 
	                  
	                       <div class="modal-header"> 
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
	                            <h4 class="modal-title">
	                            	<i class="glyphicon glyphicon-user"></i> User Profile
	                            </h4> 
	                       </div> 
	                       <div class="modal-body"> 
	                       
	                       	   <div id="modal-loader" style="display: none; text-align: center;">
	                       	   	<img src="ajax-loader.gif">
	                       	   </div>
	                       
	                       	     
	                       	    <div id="dynamic-content">
	                                        
	                           <div class="row"> 
	                                <div class="col-md-6"> 

	                                	<p id = "prod_name" style ="color:black; font-size:25px"> </p>
										
										
									<p style ="color:black; font-size:15px; float:left">&#8369;</p>
									<p style ="color:black; font-size:15px; float:center" id ="prod_price"> </p>

	                                	<p id = "prod_desc" style ="color:black; font-size:15px"> </p>
										
										
										<hr width="100%">
										<p style ="color:black; font-size:15px">Special Request ?<p>
										<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:100px;" ></textarea>	
										
	                                	<!--<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" style="color:black" />-->
										
	                                </div> 
									
									 <div class="col-md-6"> 
									
										<img  src="wings1.jpg" width="90%" height="30%" style="border: 1px solid black">
										<br/>
										<br/>
										<p style="color:black; font-size:14px; word-spacing:20px; float:center"> Quantity  <input type="number" name="quantity"  min="1" max="50" value ="1" style="width:130px" > </p>
	                                	
	                            	<br/>
									
	                                </div>
										
									<div class="col=md-12">
									<br/>
									<br/>
									
									<div class="w3-panel">
										<button  class="w3-button w3-block w3-black">+ ADD TO MY ORDER</button>
									   </div>
									   </div>
									
	                          </div>
	                          
	                          </div> 
	                             
	                        </div> 
	                        <div class="modal-footer"> 
	                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
	                        </div> 
	                        
	                 </div> 
	              </div>
	       		</div><!-- /.modal -->    
     	   </div> <!--end of items div-->
		</div>

		<button class="accordion">Burgers</button>
		<div class="panel">
		   <div class ="items"> <!-- start: items div-->	
              <div class="col-lg-12">
            <?php
            		require_once 'dbconfig.php';
            		$query = "SELECT * FROM menu WHERE category ='burgers' ORDER BY product_id ASC";
            		$stmt = $DBcon->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
						?>
                   	<ul>
                   		<li>
	                    <div class="w3-panel">
	                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
						<div>
	                    </li>
                   	</ul>
                    <?php
                }  
                ?>
                 </div> <!--end of col-ms-12-->

                 <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	             	<div class="modal-dialog"> 
	                  <div class="modal-content"> 
	                  
	                       <div class="modal-header"> 
	                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
	                            <h4 class="modal-title">
	                            	<i class="glyphicon glyphicon-user"></i> User Profile
	                            </h4> 
	                       </div> 
	                       <div class="modal-body"> 
	                       
	                       	   <div id="modal-loader" style="display: none; text-align: center;">
	                       	   	<img src="ajax-loader.gif">
	                       	   </div>
	                       
	                         
	                          <div id="dynamic-content">
	                                        
	                           <div class="row"> 
	                                <div class="col-md-6"> 

	                                	<p id = "prod_name" style ="color:black; font-size:25px"> </p>
										
										
									<p style ="color:black; font-size:15px; float:left">&#8369;</p>
									<p style ="color:black; font-size:15px; float:center" id ="prod_price"> </p>

	                                	<p id = "prod_desc" style ="color:black; font-size:15px"> </p>
										
										
										<hr width="100%">
										<p style ="color:black; font-size:15px">Special Request ?<p>
										<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:100px;" ></textarea>	
										
	                                	<!--<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart" style="color:black" />-->
										
	                                </div> 
									
									 <div class="col-md-6"> 
									
										<img  src="wings1.jpg" width="90%" height="30%" style="border: 1px solid black">
										<br/>
										<br/>
										<p style="color:black; font-size:14px; word-spacing:20px; float:center"> Quantity  <input type="number" name="quantity"  min="1" max="50" value ="1" style="width:130px" > </p>
	                                	
	                            	<br/>
									
	                                </div>
										
									<div class="col=md-12">
									<br/>
									<br/>
									
									<div class="w3-panel">
										<button  class="w3-button w3-block w3-black">+ ADD TO MY ORDER</button>
									   </div>
									   </div>
									
	                          </div>
	                          
	                          </div> 
	                             
	                        </div> 
	                             
	                        </div> 
	                        <div class="modal-footer"> 
	                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
	                        </div> 
	                        
	                 </div> 
	              </div>
	       		</div><!-- /.modal -->    
        </div> <!--end of items div-->
		</div> <!-- end of panel-->

	</div> <!-- end: accordion container -->
	<!-- end: accordion -->


	<div class = "Orders">
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


	
<script>
$(document).ready(function(){
	
	$(document).on('click', '#getUser', function(e){
		
		e.preventDefault();
		
		var uid = $(this).data('id'); // get id of clicked row
		
		$('#dynamic-content').hide(); // hide dive for loader
		$('#modal-loader').show();  // load ajax loader
		
		$.ajax({
			url: 'getuser.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'json'
		})
		.done(function(data){
			console.log(data);
			$('#dynamic-content').hide(); // hide dynamic div
			$('#dynamic-content').show(); // show dynamic div
			$('#prod_name').html(data.product_name);
			$('#prod_price').html(data.price);
			$('#prod_img').html(data.img);
			$('#prod_category').html(data.category);
			$('#prod_desc').html(data.description);
			$('#modal-loader').hide();    // hide ajax loader
		})
		.fail(function(){
			$('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
		});
		
	});
	
});

</script>




</body>
</html>