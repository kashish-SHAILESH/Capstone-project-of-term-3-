<?php

$name = $_post["name"];
$date = $_post["date"];
$email_id = $_post["email_id"];
$time = $_post["time"];
$discription = $_post["discription"];
$connection = myqli_connect("loclhost", "root", "registration form");






$sql = "INSERT INTO `form`.`form` (`name,email_id,time,date,discription`) VALUES ('$name', '$date', '$EMAIL_ID','$time','$discription');";
if ($connection -> query($sql)==true) {
    
     echo "Successfully registered ";
 }
$connection ->close(); 


?>
?>