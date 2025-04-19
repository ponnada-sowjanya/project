<?php
//Include database configuration file
 include("./include/conn.php"); 


if(  isset($_POST["items"]) && !empty($_POST["items"])){
     $s="SELECT season FROM tblcourses where category='".$_POST["items"]."' ";
    $rs = $conn->query($s);
     
    //Count total number of rows
    $rowCount = $rs->num_rows;
    
    if($rowCount > 0){
   echo '<option value="">Select  Items</option>';
   while($row = $rs->fetch_assoc()){ 
   echo '<option value="'.$row['items'].'">'.$row[''].'</option>';
        }
    }else{
       echo '<option value="">Category</option>';
    }
	
	$query = $conn->query("SELECT * FROM tblconsumer where type='".$_POST["category"]."' ");
	if($row = $query->fetch_assoc()){
		echo "#".$row['category'];
	}
}

$conn->close();
?>