<?php
include '../../text/Php/accessItem.php';
$user=$_SESSION[userId];
$get=mysqli_query($con,"delete FROM purchase_history where User_ID='$user'");
$_SESSION["amount"]=0;
header("Location: ../profile.php")
?>