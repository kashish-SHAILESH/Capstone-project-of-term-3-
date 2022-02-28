<?php

$id = $_post["id"];
$username = $_post["username"];
$email_id = $_post["email_id"];
$Password = $_post["password"];
$connection = myqli_connect("loclhost", "root", "signin form");





$sql = "INSERT INTO `form`.`form` (`id,username,email_id,Password`) VALUES ('$id', '$username', '$EMAIL_ID','$password');";
if ($connection -> query($sql)==true) {
    
     echo "Successful insert into db";
 }else{
    echo"signin failed";
}
$connection ->close(); 


?>