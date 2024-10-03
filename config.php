<?php  
$connHost     = "localhost";  
$connUsername = "root";  
$connPassword = "";  
$connName     = "register";  
  
$conn = new mysqli($connHost, $connUsername, $connPassword, $connName);  
  
 
if ($conn->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
?>