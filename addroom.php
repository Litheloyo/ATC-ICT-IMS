
        
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
								<h4 class="card-title d-inline-block">Add New Store</h4>
                             
							</div>
					<form name="" action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Store Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="r_name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Bulding Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="r_building">
                                    </div>
                                </div>
                                
							
                            </div>
                       
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="save_room">Add</button>
                            </div>
                        
                        
                        
<?php
require_once('connect.php');
include("session.php");
  
            $h_desc = 'add new room '.$r_name;
			$h_tbl = 'room';
          
			$sessionid = $_SESSION['userid'];
			$sessiontype = $_SESSION['level'];        
                          
    if(isset($_POST['save_room']))
        
    {  
		$r_name=$_POST['r_name']; 
		$r_build=$_POST['r_building'];
        
                                  
    $query1 = mysqli_query($con,"select * from room where r_name = '$r_name'");       
    $count1 = mysqli_num_rows($query1);
    if ($count1==1)
    {
        echo "This room already exists"; 
       
    }
        else{                       
        
        $sql=" INSERT INTO `room`(`r_name`, `r_building`, `rm_date_added`)
        VALUES ('$r_name', '$r_build',CURRENT_TIMESTAMP)";
        $run=mysqli_query($con,$sql);
        
      if($run) 
      {
        
           echo "New room store added successful";
    }
        else{
            echo "Failed to insert store".   mysqli_error($con);
        }
        
       $logs="INSERT INTO history(description,table_name,r_name,userid,level) VALUES('$h_desc','$h_tbl','$r_name','$sessionid','$sessiontype')";
        
        $logs=mysqli_query($con,$logs);
          if($logs) 
      {
        
           
    }
        else{
            
        }
    }
    }
   
?>
              </form>
					</div>
				</div>
			
                   
                    <div class="topnav-dropdown-footer">
                        
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