<?php

    include("header.php");
    include("leftbar.php");
    require_once('connect.php');

    $id=$_GET['userid'];

    $query="SELECT * FROM `user` WHERE `userid`='$id'";
    $run=mysqli_query($con,$query);

                                $rows=mysqli_fetch_array($run);
                                $dname = $rows['username'];
                                $model = $rows['password'];
                                $category = $rows['level'];
            ?>
             
 <div class="page-wrapper">
            <div class="content">
                
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Edit User</h4>
                             
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
							<form name="edituser" action="updateuser.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="uname" value="<?php echo $rows['username']; ?>">
                                    </div>
                                </div>
                            </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="pword" value="<?php echo $rows['password']; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Level <span class="text-danger">*</span></label>
                                       <input class="form-control" type="text" name="lvl" value="<?php echo $rows['level'];?>">
                                    </div>
                                </div>
       
    <input type="submit" name="update" value="update" class="btn btn-dark">


                                </form>
                                        </div>
                                    </div>
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