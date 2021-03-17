<?php

    include("header.php");
    include("leftbar.php");
    require_once("connect.php");
    $r_name= $_GET['r_name'];
    $query="SELECT * FROM items WHERE r_name = '$r_name'";
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
        <h4 class="card-title d-inline-block"><a href="addquantity.php">add quantity</a></h4>
        <div class="card-body p-0">
        <div class="table-responsive">
<table class="table mb-0">
<thead>
        <tr>
        
        <th>Device Name</th>
        <th>Device Number</th>
        <th>Model</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Quantity</th>
        <th>photo</th>
        <th>Action</th>
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
           
            $quantity= $rows['quantity'];                 
               
            ?>
             
    
    <tr>
    
                 
                 <td><?php echo $rows['dname']; ?></td>
                 <td><?php echo $rows['deviceno']; ?></td>
                 <td><?php echo $rows['model']; ?></td>
                 <td><?php echo $rows['category']; ?></td>
                 <td><?php echo $rows['brand']; ?></td>
                
                 <td><?php echo $rows['quantity']; ?></td>
                
          
                   <td><img src="item_photo/<?php  echo $rows['picture']; ?>" width='50px'height='50px'></td>
                      
                <td> <a href="iteminfo.php?deviceid=<?php echo $rows['deviceid'];?>">more info</a></td>
                    
                <td><a href="move.php ?deviceid=<?php echo $rows['deviceid'];?>">Move item</a> </td>
                 
                 
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