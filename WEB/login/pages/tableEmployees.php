    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Menu Table</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../vendor/bootstrap/css/additional.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    --> 

        <script>
            function pop(){
            var a =  "SELECT prod_name,price where id ="document.getElementById('deleteID');
            a.value = "kemerut";}
        </script>
    </head>

    <body>

        <div id="wrapper">

          <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Naughty Nachos</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                            <li>
                                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                           <!--  <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="flot.html">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="morris.html">Morris.js Charts</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            <!-- </li> --> 
                            <li>
                                <a href="tableView.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                           <li>
                                <a href="php-wrapper-master/sample/bestsellerChart.php"><i class="fa fa-edit fa-fw"></i> Reports</a>
                            </li>
                           <!-- <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Panels and Wells</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            <!-- </li>  -->
                            <!-- <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-third-level -->
                                    <!-- </li>
                                </ul> -->
                                <!-- /.nav-second-level -->
                            <!-- </li> --> 
                            <!-- <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="login.html">Login Page</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                           <!--</li> -->
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Table: Menu</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            	Table
                             
                                 <select  id = "table-selection" name = "table-selection" onChange = "window.location.href = this.value">
                                     <option value = "tableView.php">Menu</option>
                                    <option value = "tableTransactions.php">Transactions</option>
                                    <option value = "tableCustomers.php">Customers</option>
                                   
                                     <option value = "tableReservation.php">Reservation</option>

                                </select>
                               

                                      
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                            <!--------------------- start: Reservations -->
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                        
                                    <?php
                                    	
                                    	$connections = mysqli_connect("localhost","root","","nachos");
                                    	$query = mysqli_query($connections,"SELECT * from nachosmenu");
                                    	
                         
                         				if(mysqli_num_rows($query)>0){
    	                                	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    	                                		?>
    	                                		<tr>
    	                                			<td><?php echo $row['id']; ?></td>
    	                                			<td><?php echo $row['prod_name']; ?></td>
    	                                			<td><?php echo $row['price']; ?></td>
    	                                			
    	                                		</tr>

    	                  				     <?php 
    	                                	}
                                    	}
                                    ?>
                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->
                              
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                                <!--   <div class="well">
                                    
                                        <div class="row">
                                            <button type = "button" class = "btn btn-info btn-lg" data-toggle = "modal" data-target = "#myModal">Create New Menu</button>
                                        </div>


                                        <div class = "modal fade" id = "myModal" role = "dialog">
                                            <div class = "modal-dialog">
                                                <div class = "modal-content">
                                                    <div class = "modal-header">
                                                        <button type = "button" class = "close" data-dismiss = "modal"> &times;</button>
                                                        <h4 class = "modal-title">Create New Menu</h4>
                                                    </div>
                                                    <div class = "modal-body">
                                                        <form name = "create" method = "POST" action = "newMenu.php">
                                                            <?php
                                                              $connections = mysqli_connect("localhost","root","","nachos");
                                                               $query = mysqli_query($connections,"select * from nachosmenu");

                                                               $size = mysqli_num_rows($query);
                                                            ?>
                                                            

                                                            <table>
                                                                <tr>
                                                                    <td> Product ID </td>
                                                                    <td><input type = "text" name = "prod_id" value = "<?php echo $size+1?>" disabled></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Product Name </td>
                                                                    <td><input type = "text" name = "prod_name"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price </td>
                                                                    <td><input type = "text" name = "prod_price"></td>
                                                                </tr>
                                                            </table>
                                    <style>
                                        table{
                                            
                                        }

                                        tr, td{
                                            padding: 10px;
                                        }
                                    </style>
                                                        <input type = "submit" name = "submit" value = "Add to menu">
                                                        </form>
                                                    </div>
                                                    <div class = "modal-footer">
                                                        <button type = "button" class  "btn btn-default" data-dismiss= "modal">Close</button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
 -->
                                        
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Add to Menu</a>
                                        </h4>


                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                           <form name = "create" method = "POST" action = "newMenu.php">
                                                            <?php
                                                              $connections = mysqli_connect("localhost","root","","nachos");
                                                               $query = mysqli_query($connections," select id from nachosmenu order by id desc limit 1 ");

                                                               while($size = mysqli_fetch_array($query)){
                                                                    $get = $size['id'];
                                                               }
                                                            ?>
                                                            

                                                            <table>
                                                                <tr>
                                                                    <td> Product ID </td>
                                                                    <td><input type = "text" name = "add_id" value = "<?php echo $get+1?>" readonly></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Product Name </td>
                                                                    <td><input type = "text" name = "add_name"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price </td>
                                                                    <td><input type = "text" name = "add_price"></td>
                                                                </tr>
                                                            </table>
                                    <style>
                                        table{
                                            
                                        }

                                        tr, td{
                                            padding: 10px;
                                        }
                                    </style>
                                                        <input type = "submit" name = "submitAdd" value = "Add to menu">
                                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Update Menu</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <form name = "create" method = "POST" action = "newMenu.php">
                                                           <?php
                                                              $connections = mysqli_connect("localhost","root","","nachos");
                                                               $query = mysqli_query($connections,"select * from nachosmenu");

                                                               $size = mysqli_num_rows($query);
                                                            ?>
                                                            

                                                            <table>
                                                                <tr>
                                                                    <td> Product ID </td>
                                                                    <td><select id = "updateID" name = "updateID" >
                                                                    <?php
                                                                        $connections = mysqli_connect("localhost","root","","nachos");

                                                                        $query = mysqli_query($connections,"SELECT id from nachosmenu");

                                                                        if(mysqli_num_rows($query)>0){
                                                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                                                                            ?>  

                                                                            <option value = <?php echo $row['id'];?>><?php echo $row['id'];?></option>
                                                                            <?php
                                                                            }
                                                                        }
                                                                    ?>  

                                                                 </select>
                                                                </tr>
                                                                <tr>
                                                                    <td>Product Name </td>
                                                                    <td><input type = "text" name = "update_name"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Price </td>
                                                                    <td><input type = "text" name = "update_price"></td>
                                                                </tr>
                                                            </table>
                                    <style>
                                        table{
                                            
                                        }

                                        tr, td{
                                            padding: 10px;
                                        }
                                    </style>
                                                        <input type = "submit" name = "submitUpdate" value = "Update Menu">
                                                        </form>
                                    </div>
                                </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Delete from Menu</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body"><form name = "create" method = "POST" action = "newMenu.php">
                                                            <?php
                                                              $connections = mysqli_connect("localhost","root","","nachos");
                                                               $query = mysqli_query($connections,"select * from nachosmenu");

                                                               $size = mysqli_num_rows($query);
                                                            ?>
                                                            

                                                            <table>
                                                            <tr>
                                                                <td>Product ID</td>
                                                                <td><select id = "deleteID" name = "deleteID" onchange = "pop()">

                                                                    <?php
                                                                        $connections = mysqli_connect("localhost","root","","nachos");

                                                                        $query = mysqli_query($connections,"SELECT id from nachosmenu");

                                                                        if(mysqli_num_rows($query)>0){
                                                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                                                                            ?>  

                                                                            <option value = <?php echo $row['id'];?>><?php echo $row['id'];?></option>
                                                                            <?php
                                                                            }
                                                                        }
                                                                    ?>  
                                                                    
                                                                 </select>
                                                                 </td>
                                                                </tr>
<!--                                                                 <tr>

                                                                    <td>Product Name </td>
                                                                    <td><input type = "text" id = "deleteName"name = "deleteName" readonly></td>


                                                                </tr>


                                                                <tr>
                                                                    <td>Price </td>
                                                                    <td><input type = "text" name = "deletePrice" readonly></td>
                                                                </tr>
 -->                                                            </table>
                                    <style>
                                        table{
                                            
                                        }

                                        tr, td{
                                            padding: 10px;
                                        }
                                    </style>
                                                        <input type = "submit" name = "submitDelete" value = "Delete from menu">
                                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
              
                         
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../vendor/metisMenu/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <script src = "loadOnPageDelete.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        </script>

    </body>

    </html>
