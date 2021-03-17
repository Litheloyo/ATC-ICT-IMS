<?php 
include ("connect.php");
$userid= $_GET['userid'];
$sql= "update user SET status = 'active' WHERE userid = '$userid'";

$run = mysqli_query($con,$sql);
if ($run){
   header("location: viewuser.php");
}
else{
    echo "failed";
}
    