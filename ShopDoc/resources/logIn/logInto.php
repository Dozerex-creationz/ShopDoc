<?php
$con=mysqli_connect("Shopdoc","root","","shopdoc");

$name=$_POST["name"];
$pass=$_POST["pass"];
$name = stripcslashes($name);  
$pass = stripcslashes($pass);  
$name = mysqli_real_escape_string($con, $name);  
$pass = mysqli_real_escape_string($con, $pass);  
$readQuery="select *from entry_log where User_Name = '$name' and Password = '$pass'";
$result=mysqli_query($con,$readQuery);
$count=mysqli_num_rows($result);


    if($count==1)
{
    echo '<script>alert("Congrats youre in")</script>';
}
else{
    header("Location: logIn.html");
    exit;

}

?>