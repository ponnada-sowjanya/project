<?php
include("./include/conn.php");
session_start();
?>  
 
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include_once 'include/head.php';
        ?>
        <link rel="shortcut icon" href="./dist/img/logo.png">
        <link rel="icon" href="./dist/img/logo.png" type="image/x-icon">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
              
 <?php
            include_once 'include/navbar.php';
            include_once 'include/sidebar.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                  <section class="content">
                    <div class="col-md-12">
                         
		
		 
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Users 
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
                                            <th>UserName</th>
											<th>User Id</th>
                                            <th>Role</th>
                                            
											 
											 
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
	$sql = "select * from tblusers ";
$q = $conn->query($sql);
$i=1;
while($r = $q->fetch_assoc())
{
echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['username'].'</td>
                                            <td>'.$r['userid'].'</td>
											<td>'.$r['level'].'</td>
                                            
											  
											 
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	 
		
		 
				
			</section>	
            
            </div>
            
<?php include_once './include/footer.php'; ?>
        

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
     </div>
    <!-- /. WRAPPER  -->   
        <!-- ./wrapper -->

        <!-- jQuery -->
<?php include_once './include/scripts.php'; ?>
    </body>

    </html>

 