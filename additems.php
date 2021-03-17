
                        <?php
                        include("connect.php");
                        if(isset($_POST['save'])){
                            
                                $dname=$_POST['dname'];
                                $model=$_POST['model'];
                                $category=$_POST['category'];
                                $brand=$_POST['brand'];
                                $description=$_POST['description'];
                                $quantity=$_POST['quantity'];
                                $type=$_POST['type'];
                                $status=$_POST['status'];
                                $addedby=$_POST['addedby'];
                                $price=$_POST['price'];
                                $suppliername=$_POST['suppliername'];
                                $supplieraddress=$_POST['supplieraddress'];
                                    
                                    
                          $sql=" INSERT INTO `items` (`dname`, `model`, `category`, `brand`, `description`, `quantity`, `type`, `status`, `addedby`, `price`, `suppliername`, `supplieraddress`) VALUES (NULL, '$dname', '$model', '$category', '$brand', '$description', '$quantity', '$type', '$status', '$addedby', ' $price', '$suppliername', '$supplieraddress')"; 
                          
                            $run=mysqli_query($con,$sql);
                            if($run){
                                
                                echo"success";

                            }
                            
                            
                            else
                            {
                                echo"fail";
                            }
                            
                            
                        }
                    
                        
                        ?>
    

                    
        