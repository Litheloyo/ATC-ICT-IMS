
        
        
        
        
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
								<h4 class="card-title d-inline-block">List of item in store</h4>
                              
                                
                                 <div class="col-sm-7 col-12 text-right m-b-30">
                                    <a href="avascript:void(0);" id="open_msg_box" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add item</a>
                                </div>
                             
							</div>
                            
                            
                            
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
									      <thead>
                                        <tr>
                                            <th>Device ID</th>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
										<tbody>
											<tr>
												<td></td>                 
												<td></td>
												<td></td>
                                                <td></td>
                                                <td></td>
												<td></td>
                                                <td></td>                 
												<td></td>
												<td></td>
                                                <td></td>
                                                <td></td>
												<td></td>
											</tr>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Add new item</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                    <div class="container">
                    
                    <form action="" class="form-signin" method="post">
                        <div class="form-group">
                         <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="dname">
                        </div>
                        <div class="form-group">
                            <label>Model</label>
                            <input type="dname" class="form-control" name="model">
                        </div>
                       
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" class="form-control" name="category">
                        </div>
                        
                        
                         <div class="form-group">
                            <label>Brand</label>
                            <input type="text" class="form-control" name="brand">
                        </div>
                        
                        
                         <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        
                        
                         <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity">
                        </div>
                        
                         <div class="form-group">
                            <label>Type</label>
                            <input type="text" class="form-control" name="type">
                        </div>
                       
                         <div class="form-group">
                            <label>Status</label>
                            <input type="text" class="form-control" name="status">
                        </div>
                        
                         <div class="form-group">
                            <label>Added By</label>
                            <input type="text" class="form-control" name="addedby">
                        </div>
                        
                        <div class="form-group">
                            <label>Supplier Name</label>
                            <input type="text" class="form-control" name="suppliername">
                        </div>
                        
                         <div class="form-group">
                            <label>Supplier Contact</label>
                            <input type="text" class="form-control" name="supplieraddress">
                        </div>
                        
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        
                        
                        <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group text-center">
                           
                            <input type="submit" name="save" value="save" class="btn btn-primary">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 form-group text-center">
                        <a name="" id="open_msg_box" class="btn btn-danger hasnotifications " href="javascript:void(0);" role="button"><i class="fa fa-times"></i> Close</a>
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

</body>



</html>