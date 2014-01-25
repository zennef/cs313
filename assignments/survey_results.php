<?php
	session_start();
	$myFile = "results.txt";
	$fh = fopen($myFile, 'r+')or die("can't find file");
	$data = file($myFile);
	
	if(isset($_POST)){
		$_SESSION["voted"]=TRUE;
		$color = $_POST["color"];
		$data[$color] = $data[$color] + 1 . "\n";		
		$pizza = $_POST["pizza"];
		$data[$pizza] = $data[$pizza] + 1 . "\n";
		$computer = $_POST["computer"];
		$data[$computer] = $data[$computer] + 1 . "\n";
		$game = $_POST["game"];
		$data[$game] = $data[$game] + 1 . "\n";
		fwrite($fh, $data[0].$data[1].$data[2].$data[3].$data[4].$data[5].$data[6].$data[7]);
		setcookie("vote", "1", time()+60);
	}
	fclose($fh);
	$data[0]= substr($data[0], 0, -1); 
	$data[1]= substr($data[1], 0, -1); 
	$data[2]= substr($data[2], 0, -1); 
	$data[3]= substr($data[3], 0, -1); 
	$data[4]= substr($data[4], 0, -1); 
	$data[5]= substr($data[5], 0, -1); 
	$data[6]= substr($data[6], 0, -1); 
	$data[7]= substr($data[7], 0, -1); 
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<h1>Results</h1>

<div><div style="float:left; background-color:red; width:<?php echo htmlspecialchars($data[0])*2;?>px; height:16px"></div>Red: <?php echo htmlspecialchars($data[0]);?></div>
<div><div style="float:left; background-color:blue; width:<?php echo htmlspecialchars($data[1])*2;?>px; height:16px"></div>Blue: <?php echo htmlspecialchars($data[1]);?></div>
<div><div style="float:left; background-color:pink; width:<?php echo htmlspecialchars($data[2])*2;?>px; height:16px"></div>Pepperoni: <?php echo htmlspecialchars($data[2]);?></div>
<div><div style="float:left; background-color:darkred; width:<?php echo htmlspecialchars($data[3])*2;?>px; height:16px"></div>Meat Lovers: <?php echo htmlspecialchars($data[3]);?></div>
<div><div style="float:left; background-color:gray; width:<?php echo htmlspecialchars($data[4])*2;?>px; height:16px"></div>Mac: <?php echo htmlspecialchars($data[4]);?></div>
<div><div style="float:left; background-color:orange; width:<?php echo htmlspecialchars($data[5])*2;?>px; height:16px"></div>PC: <?php echo htmlspecialchars($data[5]);?></div>
<div><div style="float:left; background-color:green; width:<?php echo htmlspecialchars($data[6])*2;?>px; height:16px"></div>Xbox: <?php echo htmlspecialchars($data[6]);?></div>
<div><div style="float:left; background-color:lightblue; width:<?php echo htmlspecialchars($data[7])*2;?>px; height:16px"></div>Playstation: <?php echo htmlspecialchars($data[7]);?></div>

<p><a href="http://cs313.mike-garcia.com">Back to Home Page</a></p>

</body>
</html>