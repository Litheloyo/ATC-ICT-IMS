<?php

    include("header.php");
    include("leftbar.php");
    require_once('connect.php');

    $id=$_GET['deviceid'];

    $query="SELECT * FROM `items` WHERE `deviceid`='$id'";
    $run=mysqli_query($con,$query);

    $rows=mysqli_fetch_array($run);
            $dname =  $rows['dname'];                      
            $deviceno = $rows['deviceno'];                      
            $model = $rows['model'];                     
            $category = $rows['category'];                    
            $brand = $rows['brand'];   
            $description = $rows['description'];
            $quantity = $rows['quantity'];
            $type = $rows['type'];
            $status = $rows['status'];
            $add = $rows['addedby'];
            $price = $rows['price'];
            $supname = $rows['suppliername'];
            $saddress = $rows['supplieraddress'];

        
            ?>
             
 <div class="page-wrapper">
            <div class="content">
                
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Edit Item</h4>
                             
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
							<form action="update_items.php" method="POST" name="edititem" onSubmit="return validateform()" enctype="multipart/form-data" autocomplete="off">
            
    <div class="form-group w-100">
        <label>Device Name:</label>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="dname" class="form-control" value="<?php echo $rows['dname']; ?>"> </div>
		
    <div class="form-group w-100">
        <label>Device No:</label>
        <input type="text" name="deviceno" class="form-control" value="<?php echo $rows['deviceno']; ?>"></div>
		
    <div class="form-group w-100">
        <label>Model:</label>
        <input type="text" name="model" class="form-control" value="<?php echo $rows['model']; ?>">
    </div>
        
    <div class="form-group w-100">
        <label>Category:</label>
        <input type="text" name="category" class="form-control" value="<?php echo $rows['category']; ?>">
    </div>
        
     <div class="form-group w-100">
        <label>Brand:</label>
        <input type="text" name="brand" class="form-control" value="<?php echo $rows['brand']; ?>">
    </div>
    
   <div class="form-group w-100">
        <label>Description:</label>
        <input type="text" name="descr" class="form-control" value="<?php echo $rows['description']; ?>">
   </div>
    
     <div class="form-group w-100">
        <label>Quantity:</label>
        <input type="number" name="quantity" class="form-control" value="<?php echo $rows['quantity']; ?>">
    </div>
    
     <div class="form-group w-100">
        <label>Type:</label>
        <input type="text" name="type" class="form-control" value="<?php echo $rows['type']; ?>">
    </div>
    
     <div class="form-group w-100">
        <label>Status:</label>
        <input type="text" name="status" class="form-control" value="<?php echo $rows['status']; ?>">
    </div>
    
     <div class="form-group w-100">
        <label>Added by:</label>
        <input type="text" name="add" class="form-control" value="<?php echo $rows['addedby']; ?>">
    </div> 
   
                                <div class="form-group w-100">
        <label>Price:</label>
        <input type="text" name="price" class="form-control" value="<?php echo $rows['price']; ?>">
    </div> 
       
    
     <div class="form-group w-100">
        <label>Supplier Name:</label>
        <input type="text" name="sname" class="form-control" value="<?php echo $rows['suppliername']; ?>">
    </div>
    
     <div class="form-group w-100">
        <label>Supplier address:</label>
        <input type="text" name="saddress" class="form-control" value="<?php echo $rows['supplieraddress']; ?>">
    </div>
    
         <div class="form-group w-100">
        <label>add photo</label>
        <input type="file" name="picture" class="form-control">
    </div>
    
       
    <input type="submit" name="update" value="update" class="btn btn-dark">


                                    </form>
                                    
								</div>
							</div>
						</div>
					</div>
				</div>


    
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>