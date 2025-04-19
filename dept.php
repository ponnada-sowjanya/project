<?php
include("./include/env.config.php");
session_start();
 
$errormsg = '';
$action = "add";

$jewellerycode='';
$jewelleryname='';
$weight='';
$price='';
 
if(isset($_POST['save']))
{

$jewellerycode= mysqli_real_escape_string($conn,$_POST['jewellerycode']);
$jewelleryname= mysqli_real_escape_string($conn,$_POST['jewelleryname']);
$weight= mysqli_real_escape_string($conn,$_POST['weight']);
$price= mysqli_real_escape_string($conn,$_POST['price']);
   

 if($_POST['action']=="add")
 {
 
  $sql = $conn->query("INSERT INTO tbljewl   VALUES ('$jewellerycode','$jewelleryname','$weight','$price'  )") ;
    
    echo '<script type="text/javascript">window.location="dept.php?act=1";</script>';
 
 }else
  if($_POST['action']=="update")
 {
 $deptcode = mysqli_real_escape_string($conn,$_POST['jewellerycode']);	
   $sql = $conn->query("UPDATE  tbljewl  SET  jewelleryname  = '$jewelleryname', weight  = '$weight' , price ='$price '   WHERE  jewellerycode  = '$jewellerycode'");
   echo '<script type="text/javascript">window.location="dept.php?act=2";</script>';
 }



}




if(isset($_GET['action']) && $_GET['action']=="delete"){

$conn->query("delete from tbljewl    WHERE jewellerycode='".$_GET['jewellerycode']."'");
header("location: dept.php?act=3");

}


$action = "add";
if(isset($_GET['action']) && $_GET['action']=="edit" ){
$deptcode = isset($_GET['jewellerycode'])?mysqli_real_escape_string($conn,$_GET['jewellerycode']):'';

$sqlEdit = $conn->query("SELECT * FROM tbljewl WHERE jewellerycode='".$jewellerycode."'");
if($sqlEdit->num_rows)
{
$rowsEdit = $sqlEdit->fetch_assoc();
extract($rowsEdit);
$action = "update";
}else
{
$_GET['action']="";
}

}


if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Jewellery Added successfully</div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Jewellery Edited successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Jewellery Deleted successfully</div>";
}

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
                        <h1 class="page-head-line">World of Gold
						<?php
						echo (isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")?
						' <a href="dept.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>':'<a href="dept.php?action=add" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>';
						?>
						</h1>
                     
<?php

echo $errormsg;
?>
                    </div>
 
				
				
				
        <?php 
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
		
			 
                <div class="row">
				   <div class="col-md-8 offset-md-2">
                    
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Add Jewellery": "Edit Jewellery"; ?>
                        </div>
						<form action="dept.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
						
						
						
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">JewelleryCode</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="jewellerycode" name="jewellerycode" value="<?php echo $jewelleryname;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Jewellery name </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="jewelleryname" name="jewelleryname" <?php echo $jewelleryname ;?> />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Weight</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="weight" name="weight" value="<?php echo $weight;?>"  /> 
							</div>
								
								
							</div>
							
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Price </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $price;?>"  />
								</div>
							</div>
							
							 
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $jewellerycode;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="save" class="btn btn-primary">Save </button>
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			  </div>
              
               

			   
			   
		 


			   
		<?php
		}else{
		?>
		
		 
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Jewellery items 
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
                                            <th>Jewellery name</th>
											<th>Weight</th>
                                            <th>Price</th>
                                            
											 
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "select * from tbljewl ";
									$q = $conn->query($sql);
									$i=1;
				while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['jewelleryname'].'</td>
                                            <td>'.$r['weight'].'</td>
											<td>'.$r['price'].'</td>
                                            
											  
											<td>
											<a href="dept.php?action=edit&jewellerycode='.$r['jewellerycode'].'" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
											
											<a onclick="return confirm(\'Are you sure you want to delete this record\');" href="dept.php?action=delete&jewellerycode='.$r['jewellerycode'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a> </td>
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	 
		
		<?php
		}
		?>
				
			</section>	
            
            </div>
            

        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="https://vsm.edu.in">VSM Students</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 
            </div>
        </footer>

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

 