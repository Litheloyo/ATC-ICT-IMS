<?php
require_once('connect.php');
 if(isset($_POST['update']))
 {
            $id=$_POST['id'];
            $dname = $_POST['uname'];
            $model = $_POST['pword'];
            $category = $_POST['lvl'];

$sql = "UPDATE user SET `username` = '$dname', `password` = '$model', `level` = ' $category' WHERE `userid` = '$id'";
       
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
    

                    
               