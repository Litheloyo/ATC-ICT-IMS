<?php

    include("header.php");
    include("leftbar.php");
    require_once("connect.php");
    $query="SELECT * FROM `items`";
    $run=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<body>



<div class="page-wrapper">
        <div class="content">

        <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card">
        <div class="card-header">
        <h4 class="card-title d-inline-block">List of item in store</h4>

        </div>


        <div class="card-body p-0">
        <div class="table-responsive">
<table class="table mb-0">
<thead>
        <tr>
        <th>Device ID</th>
        <th>Device Name</th>
        <th>Device Number</th>
        <th>Model</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Type</th>
        <th>Status</th>
        <th>Added By</th>
        <th>Supplier Name</th>
        <th>Supplier Contact</th>
        <th>Price</th>
        <th>photo</th>
        <th>Action</th>
    <th colspan="2">Update</th>
        </tr>
</thead>
<?php
$i=1;
 while($rows=mysqli_fetch_array($run))
 {
            $dname =  $rows['dname'];                      
            $deviceno = $rows['deviceno'];                      
            $model = $rows['model'];                     
            $category = $rows['category'];                    
            $brand = $rows['brand'];                   
            $description=$rows['description'];
            $quantity= $rows['quantity'];                 
            $type =$rows['type'];
            $status= $rows['status'];               
            $addedby  =$rows['addedby'];            
            $suppliername  = $rows['suppliername'];        
            $supplieraddress =$rows['supplieraddress'];
            $price=$rows['price'];       
            ?>
             
    
    <tr>
    
                 <td><?php echo $i;?></td>
                 <td><?php echo $rows['dname']; ?></td>
                 <td><?php echo $rows['deviceno']; ?></td>
                 <td><?php echo $rows['model']; ?></td>
                 <td><?php echo $rows['category']; ?></td>
                 <td><?php echo $rows['brand']; ?></td>
                 <td><?php echo $rows['description']; ?></td>
                 <td><?php echo $rows['quantity']; ?></td>
                 <td><?php echo $rows['type']; ?></td>
                 <td><?php echo $rows['status']; ?></td>
                 <td><?php echo $rows['addedby']; ?></td>
                 <td><?php echo $rows['suppliername']; ?></td>
                 <td><?php echo $rows['supplieraddress']; ?></td>
                 <td><?php echo $rows['price'];?></td>
          
                <td><img src="item_photo/<?php  echo $rows['picture']; ?>" width='50px'height='50px'></td>
                      
                <td> <a href="iteminfo.php?deviceid=<?php echo $rows['deviceid'];?>">more info</a></td>
                    
                <td><a href="move.php ?deviceid=<?php echo $rows['deviceid'];?>">Move item</a> </td>
                
                 <td> <a href="edit_item.php?deviceid=<?php echo $rows['deviceid']; ?>">Edit item</a></td>
                 <td> <a href="removeitem.php?remove=<?php echo $rows['deviceid']; ?>">Remove item</a></td>
                 
             </tr>
        
        <?php
             $i++;
         }
         ?>
                                        
                                        
                                        
                                      </table>
	                               </div>
	                           </div>
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

</body>
 </html>