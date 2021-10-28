<?php
session_start();
$con=mysqli_connect("Shopdoc","root","","shopdoc");


$tabletQuery="select * from product_details where Category ='tablet'";
$vaccineQuery="select * from product_details where Category='vaccine'";
$syrupQuery="select * from product_details where Category='syrup'";
$creamQuery="select * from product_details where Category='cream'";
$supplementQuery="select * from product_details where Category='supplement'";
$otherQuery="select * from product_details where Category='other'";
if(!isset($_SESSION['msg']))
{$_SESSION['msg']="";}
?>

