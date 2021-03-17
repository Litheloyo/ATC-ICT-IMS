
        
        <?php

include("header.php");
include("leftbar.php");
?>
       

      <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add items</h4>
                    </div>
                </div>
                <div class="row">
        <div class="col-lg-8 offset-lg-2">
        <div class="container">
        <form action="" method="POST" name="additem" onSubmit="return validateform()" enctype="multipart/form-data">
    <div class="form-group w-100">
        <label>Device Name:</label>
        <input type="text" name="dname" class="form-control"></div>
		
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
        <input type="file" name="photo" class="form-control">
    </div>
    
    
        <input type="reset" name="cancel" value="Cancel" class="btn btn-secondary">
              
    <input type="submit" name="sub" value="Add" class="btn btn-dark">




<?php
require_once('connect.php');
    if(isset($_POST['sub']))
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

  $sql="INSERT INTO `items` (`dname`,`deviceno`, `model`, `category`, `brand`, `description`, `quantity`, `type`, `status`,  `addedby`, `price`, `suppliername`, `supplieraddress`) 
  
  VALUES 
   ('$dname', '$deviceno','$model', '$category', '$brand', '$escr', '$uantity', '$type', '$status', '$add', '$price', '$supname','$saddress')";
    $run=mysqli_query($con,$sql);
          //echo $sql; die();
        
       
      if($run) 
      {
        
           echo "New Item added successful";
    }
        else{
            echo "Failed to insert item".mysqli_error($con);
        }
    }
?>

</form>
        
</div>
                    </div>
                </div>
            </div>