<?php
include("header.php");
include("leftbar.php");
?>
        
      


        <div class="page-wrapper">
            <div class="content">
                
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Add New Item</h4>
                             
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
							<form action="" method="POST" name="additem" onSubmit="return validateform()" enctype="multipart/form-data" autocomplete="off">
            
    <div class="form-group w-100">
        <label>Device Name:</label>
        <input type="text" name="dname" class="form-control" ></div>
		
    <div class="form-group w-100">
        <label>Device No:</label>
        <input type="text" name="deviceno" class="form-control"></div>
		
    <div class="form-group w-100">
        <label>Model:</label>
        <input type="text" name="model" class="form-control">
    </div>
        
    <div class="form-group w-100">
        <label>Category:</label>
        <input type="text" name="category" class="form-control">
    </div>
        
     <div class="form-group w-100">
        <label>Brand:</label>
        <input type="text" name="brand" class="form-control">
    </div>
    
     <div class="form-group w-100">
        <label>Description:</label>
        <input type="text" name="descr" class="form-control">
    </div>
    
     <div class="form-group w-100">
        <label>Quantity:</label>
        <input type="number" name="quantity" class="form-control">
    </div>
    
     <div class="form-group w-100">
        <label>Type:</label>
        <input type="text" name="type" class="form-control">
    </div>
    
     <div class="form-group w-100">
        <label>Status:</label>
        <input type="text" name="status" class="form-control">
    </div>
    
     <div class="form-group w-100">
        <label>Added by:</label>
        <input type="text" name="add" class="form-control">
    </div> 
    <div class="form-group w-100">
        <label>Price:</label>
        <input type="text" name="price" class="form-control">
    </div> 
       
    
     <div class="form-group w-100">
        <label>Supplier Name:</label>
        <input type="text" name="sname" class="form-control">
    </div>
    
     <div class="form-group w-100">
        <label>Supplier address:</label>
        <input type="text" name="saddress" class="form-control">
    </div>
    
         <div class="form-group w-100">
        <label>add photo</label>
        <input type="file" name="picture" class="form-control">
    </div>
    
        <input type="reset" name="cancel" value="Cancel" class="btn btn-secondary">
              
    <input type="submit" name="sub" value="Add" class="btn btn-dark">

  


<?php
require_once('connect.php');
        include("session.php");                    
          $h_desc = 'add new item '.$dname;
			$h_tbl = 'items';
			$sessionid = $_SESSION['userid'];
			$sessiontype = $_SESSION['level'];                            
    if(isset($_FILES['picture']))
        
    {
          
        
		$dname=$_POST['dname']; 
		$deviceno=$_POST['deviceno'];
  
        $model=$_POST['model'];
        $category=$_POST['category'];
        $brand=$_POST['brand'];
        $escr=$_POST['descr'];
        $uantity=$_POST['quantity'];
        $type=$_POST['type'];
        $status=$_POST['status'];
        $add=$_POST['add'];
        
        $price=$_POST['price'];
        $supname=$_POST['sname'];
        $saddress=$_POST['saddress'];
        $error=array();
    
 $file_name=$_FILES['picture']['name'];
    
 $file_size=$_FILES['picture']['size'];
$file_tmp=$_FILES['picture']['tmp_name'];
$file_type=$_FILES['picture']['type'];
    
$file_ext=strtolower(end(explode('.',$_FILES['picture']['name'])));
$expense=array("jpg","png","jpeg","pdf");
    
    
    
$picture=addslashes($_FILES['picture']['name']);

if(in_array($file_ext,$expense)==false)
{
	$error[]="this formart is not supported use ";
}
if($file_size > 3065759)
{
	$error[]="limit exceed try again ";
}
if(empty($error)==true)
{
move_uploaded_file($file_tmp,"item_photo/".$file_name);
    
     $query1 = mysqli_query($con,"select * from items where deviceno = '$deviceno'")
        or die(mysqli_error());
    $count1 = mysqli_num_rows($query1);
    if ($count1 > 0){
        echo"This item already  exists";
    }
    
else{

  $sql="INSERT INTO `items` (`dname`,`deviceno`, `model`, `category`, `brand`, `description`, `quantity`, `type`, `status`,  `addedby`, `price`, `suppliername`, `supplieraddress`,`picture`) 
  
  VALUES 
   ('$dname', '$deviceno','$model', '$category', '$brand', '$escr', '$uantity', '$type', '$status', '$add', '$price', '$supname','$saddress','$picture')";
    $run=mysqli_query($con,$sql);
          //echo $sql; die();
        
       
      if($run) 
      {
        
           echo "New Item added successful";
    }
        else{
            echo "Failed to insert item".mysqli_error($con);
        }
     $logs="INSERT INTO history(description,table_name,userid,level,date_created) VALUES('$h_desc','$h_tbl','$sessionid','$sessiontype',CURRENT_TIMESTAMP)";
        
        $logs=mysqli_query($con,$logs);
          if($logs) 
      {
        
           
    }
        else{
            
        }
    }
    }
    }
?>

</form>
        
								</div>
							</div>
						</div>
					</div>
				</div>
			
                   
                    <div class="topnav-dropdown-footer">
                        
                    </div>
    
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>