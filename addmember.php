
        
        <?php

include("header.php");
include("leftbar.php");
?>
   <html>
<head>
  <script language="javascript">
function validateform()
{
	var m_fname=document.forms['addborrower']['m_fname'].value;
	var m_lname=document.forms['addborrower']['m_lname'].value;
	var m_phone=document.forms['addborrower']['m_phone'].value;
	var m_email=document.forms['addborrower']['m_email'].value;
	var m_department=document.forms['addborrower']['m_department'].value;
	var m_office=document.forms['addborrower']['m_office'].value;
	if(m_fname=="")
	{
		alert("m_fname required");
		return false;
	}
		if(m_lname=="")
	{
		alert("m_lname required");
		return false;
	}
		if(m_phone=="")
	{
		alert("m_phone required");
		return false;
	}
		if(m_email=="")
	{
		alert("m_email required");
		return false;
	}
		if(m_department=="")
	{
		alert("m_department required");
		return false;
	}
		if(m_office=="")
	{
		alert("m_office required");
		return false;
	}
		
}
</script>
    
       
       </head>



</html>     
      
<?php
require_once('connect.php');
include("session.php");
$h="add member";
$t_name="member";
$session_id=$_POST['userid'];
$session_level=$_POST['level'];
    if(isset($_POST['save_member']))
    {
        $aa=ucwords($_POST['m_fname']);  
        $bb=ucwords($_POST['m_lname']);
        $cc=$_POST['m_phone'];
        $dd=ucwords($_POST['m_email']);
        $ee=ucwords($_POST['m_department']);
        $ff=ucwords($_POST['m_office']);
       
    $phone=$_POST['m_phone'];                                 
    $query1 = mysqli_query($con,"select * from member where m_phone = '$phone'")
        or die(mysqli_error());
    $count1 = mysqli_num_rows($query1);
    if ($count1 > 0)
    {
        echo "This member already exists"; 
       ?>
   
     <?php 
    }
        else{          
      $sql=mysqli_query($con,"INSERT INTO `member`(`m_fname`, `m_lname`, `m_phone`, `m_email`, `m_department`, `m_office`) VALUES('$aa', '$bb', '$cc', '$dd', '$ee', '$ff')";
      if ($run) {
          echo "insert done";           
    }
        else{
            echo "Failed to insert".mysqli_error($con);
        }
        
        $logs="INSERT INTO `history` (`h_id`, `description`, `table_name`, `userid`, `level`, `date_created`) VALUES (NULL, '$h', '$t_name', '$session_id', '$session_level', CURRENT_TIMESTAMP)";
         $x=mysqli_query($con,$logs);  
        
        if($x){
            
            echo "saved";
            
        }
        else{
            echo "failed".mysqli_error($con);
        }
    }
    }
?>


        <div class="page-wrapper">
            <div class="content">
                
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Add New borrower</h4>
                             
							</div>
					<form action="" method="POST" name="addborrower"
                          onSubmit="return validateform()" 
                     enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="m_fname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="m_lname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="m_phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="m_email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <input class="form-control" type="text" name="m_department">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Office</label>
                                        <input class="form-control" type="office" name="m_office">
                                    </div>
                                </div>
							
                               
                              
                            </div>
                       
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" name="save_member">Save</button>
                            </div>
                        
                        
              
                        
                        
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