<?php

    include("header.php");
    include("leftbar.php");
    require_once("connect.php");
    $query="SELECT * FROM `user`";
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
        <h4 class="card-title d-inline-block">USERS</h4>

        </div>


        <div class="card-body p-0">
        <div class="table-responsive">
<form name="viewuser" action="adduser.php">
            <table class="table mb-0">
<thead>
        <tr>
        <th>User ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Level</th>
        <th>Status</th>
        <th>Picture</th>
            <th>Action</th>
            
        
</thead>
<?php
$i=1;
 while($rows=mysqli_fetch_array($run))
 {
            $dname =  $rows['username'];                      
            $deviceno = $rows['password'];                      
            $model = $rows['level'];                     
            $category = $rows['status'];
            $picture = $rows['picture'];
                
            ?>
             
    
    <tr>
    
            
                 <td><?php echo $rows['userid']; ?></td>
                 <td><?php echo $rows['username']; ?></td>
                 <td><?php echo $rows['password']; ?></td>
                 <td><?php echo $rows['level']; ?></td>
                 <td><?php echo $rows['status']; 
     if(status == 'active'){
           
    echo'<style="background-color:green;>';
     }
     else{
          echo'<style="background-color:green;>';
     }
     ?></td>
        <td><?php echo $rows['picture']; ?></td> 
        <td><a href= "activate.php?userid=<?php echo $rows['userid'];?>">activate</a></td>
        <td><a href= "deactivate.php?userid=<?php echo $rows['userid'];?>">deactivate</a></td>
        <td> <a href="edit_user.php?userid=<?php echo $rows['userid']; ?>">Edit item</a></td>
                      
             </tr>
   
                
                        
        
        <?php
             $i++;
         }
         ?> 
                                      </table>
     <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="save_member">Add User</button>
                            </div>
     </form>
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