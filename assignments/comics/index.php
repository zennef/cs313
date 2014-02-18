<?php
session_start();

include 'includes/connection.php';

$result = mysqli_query($con,"SELECT * FROM comment");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="main">
<h1>Mike Garcia's Comics</h1>

<?php 
if ($_SESSION['logged_in'] == 2) {
echo'<br><div id="logerror">Error with log in</div>'; ?>
<form action="login.php" method="post">
	<label>Username:</label>
	<input type="text" name="username">
	<label>Password:</label>
	<input type="password" name="password">
	<input type="submit" value="submit"><br>
</form>
<a href="register.php">Register</a>
<?php } else if($_SESSION['logged_in'] == 1){
echo '<br><div id="welcome">Welocme, '.$_SESSION['name'].'</div><br>';
?> <a href="logout.php">Log Out</a><?php
} else { ?>
<form action="login.php" method="post">
	<label>Username:</label>
	<input type="text" name="username">
	<label>Password:</label>
	<input type="password" name="password">
	<input type="submit" value="submit">
</form>
	<a href="register.php">Register</a>

<?php } ?>
<img src="comics/2014-02-03.jpg">
<?php
while($row = mysqli_fetch_array($result))
  {
  echo "<p>" . $row['comment'] . "</p>";
  }
?>
</div>
</body>
</html>