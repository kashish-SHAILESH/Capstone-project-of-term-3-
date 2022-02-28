<?php

$id = $_post["id"];
$username = $_post["username"];
$email_id = $_post["email_id"];
$Password = $_post["password"];
$connection = myqli_connect("loclhost", "root", "signin form");


$connection = mysqli_connect($server, $username, $password);

// if (!$connection) {
//     # code...
//     die(mysqli_connect_errno());   
// }



$sql = "INSERT INTO `form`.`form` (`id,username,email_id,Password`) VALUES ('$id', '$username', '$EMAIL_ID','$password');";
if ($connection -> query($sql)==true) {
    
     echo "Successful insert into db";
 }
$connection ->close(); 


?>