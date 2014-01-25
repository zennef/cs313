<?php
if ($_COOKIE["vote"]=="1"){
  header("Location: survey_results.php");
} else {
	setcookie("vote", "0", time()+20);
}
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>Survey</h1>
<form action="survey_results.php" method="post">
	<h2>What color do you like more?</h2><br/>
	<input type="radio" name="color" value="0">Red<br/>
	<input type="radio" name="color" value="1">Blue<br/>
	<h2>What type of pizza do you prefer?</h2>
	<input type="radio" name="pizza" value="2">Peperoni<br/>
	<input type="radio" name="pizza" value="3">Meat Lovers<br/>
	<h2>Do you prefer Mac or PC?</h2>
	<input type="radio" name="computer" value="4">Mac<br/>
	<input type="radio" name="computer" value="5">Pc<br/>
	<h2>Xbox or Playstation?</h2>
	<input type="radio" name="game" value="6">XBox<br/>
	<input type="radio" name="game" value="7">Playstation<br/>
	<input type="submit"> 
</form>

<p><a href="survey_results.php">View Results</a></p>

</body>
</html>