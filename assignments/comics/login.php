<?php
session_start();

include 'includes/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($con,"SELECT user_name, user_password FROM user WHERE user_name = '$username'");
$row = mysqli_fetch_array($result);


if ($row['user_password'] == $password){
	$_SESSION['logged_in'] = 1;
	$_SESSION['name'] = $row['user_name'];
	header("Location: index.php");

}
else{
	$_SESSION['logged_in'] = 2;
	header("Location: index.php");
}




?>