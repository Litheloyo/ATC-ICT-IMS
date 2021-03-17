 <?php

include("header.php");
include("leftbar.php");
?>
       
        
<!DOCTYPE html>


	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--<title>Equipment</title>-->

	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="apple-touch-icon" href="">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Link to your css file -->
	<link rel="stylesheet" href="css/stylesheet.css">


      <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Equipments</h4>
                    </div>
                </div>

     <div class="row">
        <div class="col-lg-8 offset-lg-2">
        <div class="container">
	<form action="" method="post"  name="equipment" enctype="multipart/form-data">
       <div class="form-group">
           <label for="exampleInputEmail1">Equipment Name</label>
           <input type="text" name="ename" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Enter ID">
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Equipment Model</label>
           <input type="text" name="emodel" class="form-control" id="exampleInputPassword1" placeholder="model">
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Equipment Category</label>
           <input type="text" name="ecateg" class="form-control" id="exampleInputPassword1" placeholder="Category">
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Equipment Brand</label>
           <input type="text" name="ebrand" class="form-control" id="exampleInputPassword1" placeholder="Brand">
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Equipment Description</label>
           <input type="text" name="edesc" class="form-control" id="exampleInputPassword1" placeholder="Description">
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Equipment Stock</label>
           <input type="text" name="estock" class="form-control" id="exampleInputPassword1" placeholder="Stock">
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Equipment Stock left</label>
           <input type="text" name="estleft" class="form-control" id="exampleInputPassword1" placeholder="stock left">
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Equipment type</label>
           <input type="text" name="etype" class="form-control" id="exampleInputPassword1" placeholder="Type">
        </div>
        <div class="form-group">
           <label for="exampleInputPassword1">Equipment Status</label>
           <input type="text" name="estatus" class="form-control" id="exampleInputPassword1" placeholder="Status">
        </div>
        <div class="form-group">
            
           <label for="exampleInputPassword1">Room Name</label>
        <select class="form-control" name="room" id="exampleFormControlSelect1">
           <option></option>
           <option></option>
           <option></option>
           <option></option>
           <option></option>
    
            <?php        
	       $r=$_POST['room'];
        $sql="SELECT `r_name` FROM `room` WHERE `r_name`=$r";
        $run=mysql_query($sql);
         $row=mysql_fetch_array($run);
        $status=$row['status'];
        $fetch=mysql_num_rows($run);
            ?>
            </select>    
        </div><br><br>
        
       <button type="submit" name="submitt" class="btn btn-primary">Submit</button>
        
        <?php
require_once('connect.php');
    if(isset($_POST['submitt']))
    {

		$ename=$_POST['ename']; 
		$emodel=$_POST['emodel'];
        $ecategory=$_POST['ecateg'];
        $ebrand=$_POST['ebrand'];
        $edesc=$_POST['edesc'];
        $estock=$_POST['estock'];
        $estleft=$_POST['estleft'];
        $etype=$_POST['etype'];
        $estatus=$_POST['estatus'];
        

  $sqli="INSERT INTO `equipments` (`deviceid`,`e_model`, `e_category`, `e_brand`, `e_description`, `e_stock`, `e_stockleft`, `e_type`, `e_status` )
  
  VALUES 
   ('$ename', '$emodel',' $ecategory', ' $ebrand', '$edesc', '$estock', ' $estleft', ' $etype', '$estatus')";
    $runs=mysqli_query($con,$sqli);
          //echo $sql; die();
        
       
      if($runs) 
      {
        
           echo "New Equipment added successful";
    }
        else{
            echo "Failed to add equipment".mysqli_error($con);
        }
    }
?>

   </form>
            </div>
            </div>
            </div>

	<script src="bootstrap/jquery.js"></script>
	<script src="bootstrap/poper.js"></script>
	<script src="bootstrap/style.js"></script>
