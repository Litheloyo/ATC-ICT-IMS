
        
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
								<h4 class="card-title d-inline-block">Borrow item</h4>
                             
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
							<form action="" method="POST" name="additem" onSubmit="return validateform()" enctype="multipart/form-data">
            
    <div class="form-group w-100">
        <label>Select Borrower</label>
        <select>
            
        <option>
        
        adam
        
        </option>
        </select></div>
                                
		
    <div class="form-group w-100">
        <label>Device No:</label>
        <input type="text" name="deviceno" class="form-control"required></div>
		
    <div class="form-group w-100">
        <label>Model:</label>
        <input type="text" name="model" class="form-control"required>
    </div>
        
    <div class="form-group w-100">
        <label>Category:</label>
        <input type="text" name="category" class="form-control"required>
    </div>
        
     <div class="form-group w-100">
        <label>Brand:</label>
        <input type="text" name="brand" class="form-control"required>
    </div>
    
     <div class="form-group w-100">
        <label>Description:</label>
        <input type="text" name="descr" class="form-control"required>
    </div>
    
     <div class="form-group w-100">
        <label>Quantity:</label>
        <input type="number" name="quantity" class="form-control"required>
    </div>
    
     <div class="form-group w-100">
        <label>Type:</label>
        <input type="text" name="type" class="form-control"required>
    </div>
    
     <div class="form-group w-100">
        <label>Status:</label>
        <input type="text" name="status" class="form-control"required>
    </div>
    
     <div class="form-group w-100">
        <label>Added by:</label>
        <input type="text" name="add" class="form-control"required>
    </div> 
    <div class="form-group w-100">
        <label>Price:</label>
        <input type="text" name="price" class="form-control"required>
    </div> 
       
    
     <div class="form-group w-100">
        <label>Supplier Name:</label>
        <input type="text" name="sname" class="form-control"required>
    </div>
    
     <div class="form-group w-100">
        <label>Supplier address:</label>
        <input type="text" name="saddress" class="form-control"required>
    </div>
    
         <div class="form-group w-100">
        <label>add photo</label>
        <input type="file" name="picture" class="form-control"required>
    </div>
    
        <input type="reset" name="cancel" value="Cancel" class="btn btn-secondary">
              
    <input type="submit" name="sub" value="Add" class="btn btn-dark">



</form>
        
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