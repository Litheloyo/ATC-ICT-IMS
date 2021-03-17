<?php
include("connect.php");
 $deviceid=$_GET['deviceid'];

$sql="INSERT INTO damped_item SELECT deviceid, dname, deviceno, model, category, brand, description, quantity, type, 

status, addedby,price,suppliername,supplieraddress,picture FROM items WHERE deviceid='$deviceid'";

$run=mysqli_query($con,$sql);
if($run){
    echo"Item moved to damped table...";
}
else{
    echo"failed";
}
$del="delete from items where deviceid='$deviceid'";
$rund=mysqli_query($con,$del);
if($rund){

    echo "<script>setTimeout(\"location.href = 'dash.php';\",4000);</script>";
}
else{
    echo"fail to trash item";
}
 

?>