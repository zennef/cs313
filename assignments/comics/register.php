<?php
session_start();

?>
<!DOCTYPE html>
<html>
<body>
	<h1>Register</h1>
	<form action="new_user.php" method="post">
		<label>User Name:</label><br>
		<input type="text" name="username"><br>
		<label>Password:</label><br>
		<input type="text" name="password"><br>
		<input type="submit">
	</form>
</body>
</html>