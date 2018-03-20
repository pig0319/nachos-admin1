<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--start: css-modal-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link href="../newMenu.css" rel="stylesheet">

	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	

	 <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	 <?php 
	 	include('menu.php'); 
	 	require('dbconfig.php');
	 	?>


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
				.fa {
  padding: 15px;
  font-size: 17px;
  width: 50px;
  height: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 4px;
  border-radius: 50%;
  border: 3px solid white;
  
}

.fa-facebook {
  background: #404040;
  color:white;
  border: 3px solid white;
}

.fa-twitter {
  background: #404040;
  color:white;
  border: 3px solid white;
}

.fa-instagram {
  background: #404040;
  color:white;
  border: 3px solid white;
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
					      
						  <li><a href="../homepage.php" class="home">Home</a></li>
						  <li ><a href="#">Menu</a></li>
						  <li><a href="../homepage.php/#container-aboutus" class="about">About</a></li>
						  <li><a href="../Reservation.php" class="services">Reservation</a></li>
						  <li><a href="#" class="contact">Contact</a></li>
					    </ul>
					 
					</div>
				
				
				</div>	
				<!--end: Navigation -->		
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->

	<!-- start: parallax -->
	<center>
	<div id="parallax">
		<div class="center">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<p style="font-size:8vw; font-family:impact;letter-spacing: 8px;color:white">O U R M E N U</p>
	
	
		<p style="font-family:impact; font-size:1vw;letter-spacing: 8px; color:white">N A U G H T Y N A C H O S</p>
		</div>
	</div>
	</center>
	<!--end: parallax-->
	
	<div class ="whole-container" style = "height: 1000px;">
		<!-- start: accordion -->
	<div class =" accordion-container">
		<div class="col-md-8">
<!-- **************************************WINGS ************************************************************************************************************* -->
			<button class="accordion" id = "1" style="background-color:black; color:white; font-size:25px; text-align:center" selected>W I N G S</button>
				<div class="panel" >
		          <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Wings' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                           	<form method ="post" action="index.php">
			                                <div class="col-md-6"> 
			                                	
			                                	<p id = "prod_name" style ="color:black; font-size:25px"> </p>
												<p style ="color:black; font-size:15px; float:left">&#8369;</p>
												<p style ="color:black; font-size:15px; float:center" id ="prod_price"> </p>
	                                	        <p id = "prod_desc" style ="color:black; font-size:15px"> </p>

	                                	        <hr width="100%">
												<p style ="color:black; font-size:15px">Special Request ?<p>
												<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:100px;" ></textarea>	
	                                	    </div>

	                                	     <div class="col-md-6">

	                                	     	 <?php
								            		require_once 'dbconfig.php';
								            		$query = "SELECT img FROM nachosmenu WHERE category ='Wings' AND product_id = '1'";
								            		$stmt = $DBcon->prepare( $query );
								            		$stmt->execute();
								            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
														?>
								                   		<img src="<?php echo $row['img']; ?>" width="90%" height="30%">
								                   		<script type="text/javascript">
								                   		//	alert("<?php echo $row['img']; ?>");
								                   		</script>
								                    <?php
								                }  
								                ?>
																
																
																<label style="padding:5px"> Quantity : </label> <input type="number" name="quantity"  min="1" max="50" value ="1">
																<!--<input type="text" name ="quantity" class="form-control" value=" "/>-->
																<input type="hidden" name ="hidden_id" = id=id_Val value=""/>
																<input type="hidden" name ="hidden_name" id ="nameVal" value=""/>
																
																<input type="hidden" name ="hidden_price" id="priceVal" value=""/>
																
			                            	</div>

			                            	<div class="col-lg-12">
			                            		<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="w3-button w3-block w3-black" value="+ ADD TO MY ORDER"/>
			                            	</div>

			                            	</form>
			                               
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
<!-- **************************************END OF WINGS ************************************************************************************************************* -->

<!-- **************************************MILKSHAKES ************************************************************************************************************* -->
		<button class="accordion" id = "2" style="background-color:black; color:white; font-size:25px; text-align:center">M I L K S H A K E S</button>
				<div class="panel">
		          <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Milkshake' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                           	<form method ="post" action="index.php">
			                                <div class="col-md-6"> 
			                                	
			                                	<p id = "prod_name" style ="color:black; font-size:25px"> </p>
												<p style ="color:black; font-size:15px; float:left">&#8369;</p>
												<p style ="color:black; font-size:15px; float:center" id ="prod_price"> </p>
	                                	        <p id = "prod_desc" style ="color:black; font-size:15px"> </p>

	                                	        <hr width="100%">
												<p style ="color:black; font-size:15px">Special Request ?<p>
												<textarea class="form-control" id="message" name="message" placeholder="MESSAGE" style="height:100px;" ></textarea>	
	                                	    </div>

	                                	     <div class="col-md-6">

	                                	     	 <?php
								            		require_once 'dbconfig.php';
								            		$query = "SELECT img FROM nachosmenu WHERE category ='Wings' AND product_id = '1'";
								            		$stmt = $DBcon->prepare( $query );
								            		$stmt->execute();
								            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
														?>
								                   		<img src="<?php echo $row['img']; ?>" width="90%" height="30%">
								                   		<script type="text/javascript">
								                   		//	alert("<?php echo $row['img']; ?>");
								                   		</script>
								                    <?php
								                }  
								                ?>
																
																
																<label style="padding:5px"> Quantity : </label> <input type="number" name="quantity"  min="1" max="50" value ="1">
																<!--<input type="text" name ="quantity" class="form-control" value=" "/>-->
																<input type="hidden" name ="hidden_id" = id=id_Val value=""/>
																<input type="hidden" name ="hidden_name" id ="nameVal" value=""/>
																
																<input type="hidden" name ="hidden_price" id="priceVal" value=""/>
																
			                            	</div>

			                            	<div class="col-lg-12">
			                            		<input type="submit"  name="add_to_cart" style="margin-top:5px;"  class="w3-button w3-block w3-black" value="+ ADD TO MY ORDER"/>
			                            	</div>

			                            	</form>
			                               
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
 <!-- **************************************END OF MILKSHAKES******************************************************************************************************* -->

 <!-- **************************************BURGER ************************************************************************************************************* -->
				<button class="accordion" id = "3" style="background-color:black;color:white; font-size:25px; text-align:center">B U R G E R </button>
				<div class="panel">
				 	 <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Burgers' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                      <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
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
<!-- **************************************END OF BURGER *********************************************************************************************************** -->

<!-- **************************************NACHOS ************************************************************************************************************* -->
				<button class="accordion" id = "4" style="background-color:black;color:white; font-size:25px; text-align:center">N A C H O S</button>
				<div class="panel">
				   <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Burgers' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
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
<!-- **************************************END OF NACHOS********************************************************************************************************* -->

<!-- **************************************FRIES********************************************************************************************************* -->

<button class="accordion" id = "5" style="background-color:black;color:white; font-size:25px; text-align:center">F R I E S</button>
				<div class="panel">
				   <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Fries' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
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

<!-- **************************************END OF FRIES********************************************************************************************************* -->



<!-- **************************************PASTA********************************************************************************************************* -->


				<button class="accordion"  id = "6" style="background-color:black;color:white; font-size:25px; text-align:center">P A S T A</button>
				<div class="panel">
				   <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Pasta' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
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
<!-- **************************************END OF PASTA********************************************************************************************************* -->

<!-- **************************************DRINKS ******************************************************************************************************** -->

				<button class="accordion" id = "7" style="background-color:black;color:white; font-size:25px; text-align:center">D R I N K S</button>
				<div class="panel">
				   <div class ="items"> <!-- start: items div-->	
		              <div class="col-lg-12">
		            <?php
		            		require_once 'dbconfig.php';
		            		$query = "SELECT * FROM nachosmenu WHERE category ='Drinks' ORDER BY product_id ASC";
		            		$stmt = $DBcon->prepare( $query );
		            		$stmt->execute();
		            		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
								?>
		                   	<ul>
		                   		<li>
			                    <div class="w3-panel">
				                    <button class="w3-btn w3-block w3-black" data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['product_id']; ?>" id="getUser" class="btn btn-sm btn-info"><?php echo $row["order_name"]; ?></button>
				                </div>
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
			                            	<i class="glyphicon glyphicon-user"></i> Details
			                            </h4> 
			                       </div> 
			                       <div class="modal-body"> 
			                       
			                       	   <div id="modal-loader" style="display: none; text-align: center;">
			                       	   	<img src="ajax-loader.gif">
			                       	   </div>
			                       
			                       	   <div id="dynamic-content">
			                                        
			                           <div class="row"> 
			                               
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
		</div> <!-- end: col-md-8--> 
		
	</div> <!-- end: accordion container -->
	<!-- end: accordion -->


	<div class = "Orders">
		<div class = "col-md-5">
			<p style=" font-size:25px; letter-spacing:10px;">ORDER  DETAILS</p>
				<div class ="table-reponsive">
					<table class= "table table-bordered">
						<tr>
							<th width="40%" style="background-color:black; color:white ">Item Name </th>  
							<th width="10%" style="background-color:black; color:white ">Quantity </th>
							<th width="20%" style="background-color:black; color:white ">Price </th>
							<th width="15%" style="background-color:black; color:white ">Total </th>
							<th width="5%" style="background-color:black; color:white ">Action </th>
						</tr>

						<form method = "GET" action ="menu.php">
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
						
							<td><?php echo $values["item_name"]; array_push($storage, $values["item_name"]); ?></td>
							<td><?php echo $values["item_quantity"]; array_push($quantity,$values["item_quantity"]); ?></td>
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
						} //THIS IS WHERE I PUT IT
					?>
						</form>
					</table>


					
				</div> <!-- end : table-responsive -->

					<button type="button" class="btn btn-outlined btn-primary" data-toggle="modal" data-target="#myModal">CHECKOUT</button>

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog"> <!-- start: modal-dialog -->
					    <div class="modal-content"> <!-- start: modal-content -->
					      <div class="modal-header"> <!-- start: modal-header -->
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title"></h4>
					      </div> <!-- end: modal-header -->

					      	<div class="modal-body"> <!-- start: modal body -->
					        	<div class = "contact-info"> <!-- start: Contact info -->
									<div class = "bg">  <!-- start: bg -->
										<form name = "Contact-info" method = "POST" action = "index.php?action=remove" onsubmit="div_show()">
										<h4>Let's add your contact details</h4>

										<table>
											<tr>
												<td>
													<input type = "text" name = "firstname" value="" placeholder = "first name" required=""><br>
												</td>
											</tr>
											<tr>
												<td>
													<input type = "text" name = "lastname" value="" placeholder = "last name" required="">
												</td>
											</tr>
											<tr>
												<td>
													<input type = "email" name ="email" value ="" placeholder = "you@example.com" required="">
												</td>
											</tr>
											<tr>
												<td>
													<input type ="number" name = "phonenumber" value ="" placeholder ="phone" required="">
												</td>
											</tr>
										</table>
				
		
										<iframe name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 100%; height: 120px;"></iframe>
									</div> <!-- end: bg -->

							</div> <!-- end: Contact info -->
					    </div> <!-- end: modal body-->


						<div class="modal-footer"> <!-- start: modal footer -->
							<input type = "submit" name = "submit" class = "btn btn-outlined btn-primary right" id="sub">
								</form>
								<?php
				
  
						    // Create connection
						    $connect = mysqli_connect("localhost", "root", "", "nachos"); 

						if(isset($_POST["submit"])){

						        $firstname = $_POST['firstname'];
						        $lastname = $_POST['lastname'];
						        $email = $_POST['email'];
						        $cp = $_POST['phonenumber'];

						        $query = mysqli_query($connect, "INSERT INTO customers (lastname,firstname,email,phone) values ('$lastname','$firstname','$email',$cp);");
						      
						      echo '<script>window.location="index.php"</script>';

						      }

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

						$query = mysqli_query($connect, "INSERT INTO transaction (cust_id,line_id,order_name,quantity, request, subtotal,total,date) value(1,$n+1,$a,$b,'None',$c,$e,'02/15/18')");
						
							}

				
					?>

					 		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				 		</div> <!-- end: modal footer -->
					</div> <!-- end: modal-content -->
			 	</div> <!-- end: modal - dialog -->
			</div> <!-- end: mymodal -->
					
		</div> <!-- end: col-md-4 -->
	</div> <!--end: Orders-->
				
		
	</div> <!-- end: whole-container -->

	<div class = "edge" style="width: 100%; height: 200px;">
	</div>

		<!--start: footer-->
	
	<footer>
	<div class="footerbg">
	
		<div class ="row">
			<div class="col-sm-4" style="color:white">
				<h2>ADDRESS:</h2>
				Magiting st. corner Maginhawa Quezon City

			</div>

			<div class="col-sm-4" style="color:white">
				<h2>RESERVATION:</h2>
				contact@nachos.com

			</div>

			<div class="col-sm-4" style="color:white">
				<h2>OPEN HOURS</h2>
				<p>Monday-Friday: 10 AM - 11 PM</p>
				Saturday - Sunday: 10 AM - 11 PM
			</div>

		</div>

		<div id="copyright" style="color:white">
			<br>
			Naughty Nachos Est. 2014 &copy 
			<br>
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-instagram"></a>

		</div>
		<div id="social">
			<a href="http://facebook.com/naughtnachos" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
			
		</div>
	</div>
		
	</footer>	
	<!--end: footer-->
	



			<script>
			var acc = document.getElementsByClassName("accordion");
			var i;
			var close;
			var open;
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			   	close = this.classList;
			  	close.toggle("active");
			  	// alert(this.offsetParent);

			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight){
			      panel.style.maxHeight = null;
			   		
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			      // panel1.style.maxHeight = panel.scrollHeight - panel.scrollHeight + "px";
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
			$('#prod_name').html(data.order_name);
			$('#prod_price').html(data.price);
			$('#prod_img').html(data.img);
			$('#prod_category').val(data.category);
			$('#prod_desc').html(data.description);
			$('#modal-loader').hide();    // hide ajax loader
		})

		.done(function(data){
			console.log(data);
			$('#dynamic-content').hide(); // hide dynamic div
			$('#dynamic-content').show(); // show dynamic div
			$('#id_Val').val(uid);
			$('#nameVal').val(data.order_name);
			$('#priceVal').val(data.price);
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