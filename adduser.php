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
								<h4 class="card-title d-inline-block">Add New USER</h4>
                             
							</div>
					<form name="newuser" action="" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="uname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="pword">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Level <span class="text-danger">*</span></label>
                                       <select name="lvl">
                                           <option>hod</option>
                                           <option>skeeper</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                  <div class="form-group ">
                                      <label>add photo</label>
                                    <input type="file" name="picture" class="form-control">
                                  </div>
                                </div>
    
                                       
                                        <input class="form-control" type="hidden" name="stat" value="deactive">
                                    
                                
                                
                               
                              
                            </div>
                       
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="sub">SUBMIT</button>
                            </div>
                         <?php
                        include("connect.php");
                        if(isset($_FILES['picture'])){
                            
                                $dname=$_POST['uname'];
                                $model=$_POST['pword'];
                                $category=$_POST['lvl'];
                                $brand=$_POST['stat'];
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

                            
    $query1 = mysqli_query($con,"select * from user where username = '$dname'") or die(mysqli_error());     
    $count1 = mysqli_num_rows($query1);
    if ($count1 > 0)
    {
        echo "This User already exists"; 
       
    }
        else{                       
                                    
                          $sql=" INSERT INTO `user` (`username`, `password`, `level`, `status`, `picture`) VALUES ('$dname', '$model', '$category', '$brand', '$picture')"; 
                          
                            $run=mysqli_query($con,$sql);
                            if($run){
                                
                              header("location:viewuser.php");

                            }
                            
                            
                            else
                            {
                                echo"failed to add";
                            }
        
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
  