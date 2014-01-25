<?php

	$myFile = "results.txt";
	$fh = fopen($myFile, 'r+')or die("can't find file");
	$data = file($myFile);
	
	if(isset($_POST)){
		$color = $_POST["color"];
		$data[$color] = $data[$color] + 1 . "\n";		
		$pizza = $_POST["pizza"];
		$data[$pizza] = $data[$pizza] + 1 . "\n";
		$computer = $_POST["computer"];
		$data[$computer] = $data[$computer] + 1 . "\n";
		$game = $_POST["game"];
		$data[$game] = $data[$game] + 1 . "\n";
		fwrite($fh, $data[0].$data[1].$data[2].$data[3].$data[4].$data[5].$data[6].$data[7]);
		setcookie("vote", "1", time()+20);
	}

	fclose($fh);
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>Results</h1>
<?php
	echo "Red: " . $data[0] . "<br/>";
	echo "Blue: " . $data[1] . "<br/>";
	echo "Pepperoni: " . $data[2] . "<br/>";
	echo "Meat Lovers: " . $data[3] . "<br/>";	
	echo "Mac: " . $data[4] . "<br/>";
	echo "PC: " . $data[5] . "<br/>";
	echo "Xbox: " . $data[6] . "<br/>";
	echo "Playstation: " . $data[7] . "<br/>";	
?>
<p><a href="http://cs313.mike-garcia.com">Back to Home Page</a></p>

</body>
</html>