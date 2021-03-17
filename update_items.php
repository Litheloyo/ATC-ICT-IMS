<?php
require_once('connect.php');
 if(isset($_POST['update']))
 {
            $id=$_POST['id'];
            $dname =  $_POST['dname'];                      
            $deviceno = $_POST['deviceno'];                      
            $model = $_POST['model'];                     
            $category = $_POST['category'];                    
            $brand = $_POST['brand'];   
            $description = $_POST['descr'];
            $quantity= $_POST['quantity'];
            $type = $_POST['type'];
            $status = $_POST['status'];
            $add = $_POST['add'];
            $price = $_POST['price'];
            $supname = $_POST['sname'];
            $saddress = $_POST['saddress'];

$sql = "UPDATE items SET `dname` = '$dname', `deviceno` = '$deviceno', `model` = '$model', `category` = '$category', `brand` = '$brand', `description` = '$description', `quantity` = '$quantity', `type` = '$type', `status` = '$status', `addedby` = '$add', `price` = '$price',`suppliername` = '$supname', `supplieraddress` = '$saddress' WHERE `deviceid` = '$id'";
    //echo $sql; die();
       
                            $run = mysqli_query($con,$sql);
                            if($run){
                                
                                echo"Update successfull";

                            }
                            
                            
                            else
                            {
                                echo"fail";
                            }
                            
 }
                        
                        ?>
    

                    
               