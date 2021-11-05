<?php
$connect=mysqli_connect("Shopdoc","root","","shopdoc");


$name=$_POST["name"];
$pass=$_POST["pass"];
$conf=$_POST["confpass"];
$age=$_POST["age"];
$work=$_POST["work"];
$gen=$_POST["gen"];
$bday=$_POST["bday"];
$address=$_POST["ad1"]." -|- ".$_POST["ad2"]." -|- ".$_POST["city"]." -|- ".$_POST["state"]." -|- ".$_POST["cou"];


$insertQuery = "INSERT INTO entry_log (User_Name,Password,Age,Work,Gender,Address,DOB) VALUES ('$name','$pass','$age','$work','$gen','$address','$bday')";
if(mysqli_query($connect,$insertQuery)){
    header("Location: ../../index.html");
}
else{
    echo "error". mysqli_error($link);
    echo "please restart the server there may be error blocking your sign in process!";
}
?>