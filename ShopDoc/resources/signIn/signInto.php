<?php

$name=$_POST["name"];
$pass=$_POST["pass"];
$conf=$_POST["confpass"];
$age=$_POST["age"];
$work=$_POST["work"];
$gen=$_POST["gen"];
$bday=$_POST["bday"];
$address=$_POST["ad1"]." -|- ".$_POST["ad2"]." -|- ".$_POST["city"]." -|- ".$_POST["state"]." -|- ".$_POST["cou"];


echo "<br><br>".$name."<br><br>".$pass."<br><br>".$age."<br><br>".$work."<br><br>".$gen."<br><br>".$bday."<br><br>".$address;

?>