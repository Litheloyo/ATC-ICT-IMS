  <?php

include("header.php");
include("leftbar.php");
require_once("conn.php");
$deviceid=$_GET['deviceid'];
$query="SELECT * FROM `items`where deviceid='$deviceid'";
$run=mysqli_query($conn,$query);
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
								<h4 class="card-title d-inline-block">item information</h4>
                             
							</div>
                            
                            
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0" border="1">
									
       <?php
        
         while($rows=mysqli_fetch_assoc($run))
         {
           ?>
                                        
        <tr>
        <td>device no<td>
        <td><?php echo $rows['deviceno']; ?></td>       
        </tr>  
        <tr>
        <td>Device name</td>
        <td><?php echo $rows['dname']; ?></td>
        </tr>
        <tr>                          
            </tr>
        <tr>
        <td>Model</td>
        <td><?php echo $rows['model']; ?></td>
                                            
        </tr>
        <tr>
        <td>Category</td></tr>
        <tr>
            <td>brand</td>
                 <td><?php echo $rows['brand']; ?></td>
        </tr>
                                        <tr>
                <td>description</td>
                 <td><?php echo $rows['description']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>quantity</td>
                                            <td><?php echo $rows['quantity']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>type</td>
                 <td><?php echo $rows['type']; ?></td>
                                            
                                        </tr>
                                        <tr><td>status</td>
                                            <td><?php echo $rows['status']; ?></td></tr>
                                        <tr>
                                            <td>added by</td>
                 <td><?php echo $rows['addedby']; ?></td>
                                        </tr>
                                        <tr>
                                             <td>suppliername</td>
                 <td><?php echo $rows['suppliername']; ?></td>
                                             
                                        </tr>
                                        <tr>
                 <td><?php echo $rows['supplieraddress']; ?></td>
                                            <td>supplieraddress</td>
                                        </tr>
                                        <tr>
                <td>price</td>
                 <td><?php echo $rows['price'];?></td>
                                        </tr>
        
        <?php
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