<?php
include '../../text/Php/accessItem.php';
$user=$_SESSION[userId];
$storeExistingTemp=mysqli_query($con,"select * from cart_list WHERE User_ID='$user'");
while($rowResult=mysqli_fetch_row($storeExistingTemp)){
$updateTempCount=mysqli_query($con,"Update product_details SET tempCount=0 WHERE Product_ID='$rowResult[2]'");}
$get=mysqli_query($con,"delete FROM cart_list where User_ID='$user'");
header("Location: ../cart.php")
?>