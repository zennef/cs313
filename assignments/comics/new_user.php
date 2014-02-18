<?php
session_start();
$register="yes";
include 'includes/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO user (user_name, user_password) VALUES ('$username','$password')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

$_SESSION['logged_in'] = 1;
$_SESSION['name'] = $username;
header("Location: index.php");

?>