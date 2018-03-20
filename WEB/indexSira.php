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
              <div class="col-lg-12">
            <?php
            		require_once 'dbconfig.php';
            		$query = "SELECT * FROM menu WHERE category ='wings' ORDER BY product_id ASC";
            		$stmt = $DBcon->prepare( $query );
            		$stmt->execute();
            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
						?>
                   	<ul>
                   		<li>
	                    <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price'];?></button>
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
	                       			Item Description
	                            </h4> 
	                       </div> 
	                       <div class="modal-body"> 
	                       
	                       	   <div id="modal-loader" style="display: none; text-align: center;">
	                       	   	<img src="ajax-loader.gif">
	                       	   </div>
	                       
	                       	   <div id="dynamic-content">
	                                        
	                           <div class="row"> 
	                                <div class="col-md-12"> 
	                                	<h1 id="prod_name"></h1> 
										
	                            	
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

		<button class="accordion">Section 2</button>
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
	                    <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
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
	                                <div class="col-md-12"> 

	                                	<h1 id = "prod_name"> </h1>
	                                	<h2 id = "prod_price"> </h2>
	                                	<h2 id = "prod_desc"> </h2>

	                                	<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="btn btn-success" value="Add to Cart"/>
	                            	
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

		<button class="accordion">Section 3</button>
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
	                    <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["product_name"]."&nbsp;".$row['price']; ?></button>
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
	                            	Item desc
	                            </h4> 
	                       </div> 
	                       <div class="modal-body"> 
	                       
	                       	   <div id="modal-loader" style="display: none; text-align: center;">
	                       	   	<img src="ajax-loader.gif">
	                       	   </div>
	                       
	                       	   <div id="dynamic-content">
	                                        
	                           <div class="row"> 
	                                <div class="col-md-12"> 
	                                	asdasd

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
				$storage = array();
				$quantity = array();
				$price = array();
				$totalP = array();
				$grand = array();

				if(!empty($_SESSION["shopping_cart"]))
				{
					$total = 0;
					foreach($_SESSION["shopping_cart"] as $keys => $values)
					{
			?>
			<tr>
			
				<td><?php echo $values["item_name"]; array_push($storage, $values["item_name"]); ?> </td>
				<td><?php echo $values["item_quantity"]; array_push($quantity,$values["item_quantity"]); ?> </td>
				<td>P<?php echo $values["item_price"]; array_push($price,$values["item_price"]);?> </td>
				<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); array_push($totalP,number_format($values["item_quantity"]* $values["item_price"],2)); ?> </td>
				<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
				
				
			</tr>

			<?php
					 $total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
				?>	
					<tr>
					<td colspan ="3" alight="right"></td>
					<td></td>
					<td><a href="index.php?action=remove"><span class="text-danger">Remove All</span></a></td>
					</tr>
					<tr>
					<td colspan ="3" align="right"> Total</td>
					<td align ="right"> P  <?php echo number_format($total, 2); array_push($grand,number_format($total,2));?> </td>
					<td></td>
					</tr>

					
				
				<?php
		$connections = mysqli_connect("localhost","root","","nachos-admin");
		$a = "";
		$b = 0;
		$c = 0;
		$d = 0;
		$e = 0;
					for($n = 0; $n<count($storage);$n++){
					
				 
						$a = json_encode($storage[$n]);
						$b = json_encode($quantity[$n],JSON_NUMERIC_CHECK);
						$c = json_encode($price[$n],JSON_NUMERIC_CHECK);
						$d = json_encode($totalP[$n],JSON_NUMERIC_CHECK);
						$e = json_encode($total,JSON_NUMERIC_CHECK);
					
						
		if(isset($_POST['submit'])){
			$q = mysqli_query($connections, "INSERT INTO transaction (cust_id,line_id,order_name,quantity, request, subtotal,total,dte) value(1,$n+1,$a,$b,'None',$c,$e,'01/18/18')");
			}
		}

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
			$('#name').val(data.product_name);
		})
		.fail(function(){
			$('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
		});

	    $("#btn1").click(function(){
	        $("#test1").text("Hello world!");
	    });

	});
		
	});
	
});





</script>



</body>
</html>