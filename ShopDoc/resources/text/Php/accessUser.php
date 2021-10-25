<?php
session_start();
$con=mysqli_connect("Shopdoc","root","","shopdoc");

$userId=$_SESSION["userId"];
$readQuery="select * from entry_log where User_Id = '$userId'";
$result=mysqli_query($con,$readQuery);
$row=mysqli_fetch_row($result);

$_SESSION["userId"]=$row[0];
$_SESSION["name"]=$row[1];
$_SESSION["age"]=$row[3];
$_SESSION["work"]=$row[4];
$_SESSION["gender"]=$row[5];
$_SESSION["address"]=$row[6];
$_SESSION["dob"]=$row[7];
?>

