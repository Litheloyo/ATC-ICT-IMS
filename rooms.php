<?php

    include("header.php");
    include("leftbar.php");
    require_once("connect.php");
    $query="SELECT * FROM `room`";
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
        <h4 class="card-title d-inline-block">List of rooms</h4>

        </div>


        <div class="card-body p-0">
        <div class="table-responsive">
<table class="table mb-0">
<thead>
        <tr>
                <th>roomnumber</th>
            <th>roomname</th>
        <th>building name</th>
                <th>Action</th>
        </tr>
</thead>
<?php
$i=1;
 while($rows=mysqli_fetch_array($run))
 {
                $dname =  $rows['roomname'];                      
                $deviceno = $rows['building name'];                      
                        ?>
             
    
    <tr>
    
                 <td><?php echo $i;?></td>
                 <td><?php echo $rows['r_name']; ?></td>
                 <td><?php echo $rows['r_building']; ?></td>
                
                      
                <td> <a href="room_item.php?r_name=<?php echo $rows['r_name'];?>">view items</a></td>
                    
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