<?php
session_start();
$server = "localhost"; 
$user = "hma21"; 
$password = "K6T6k#jG"; 
$dbname = "hma21_1"; 

$con = mysqli_connect($server, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>