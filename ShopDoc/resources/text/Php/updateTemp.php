<?php

include 'accessItem.php';


$count=$_POST["count"];
$id=$_POST["uid"];
$out=mysqli_query($con,"UPDATE product_details SET tempCount = '$count'  WHERE Product_Id='$id'");

?>