<?php

$con=mysqli_connect("localhost", "guest",'Pa$$w0rd',"scriptures");
if (mysqli_connect_errno())
{
	echo"Failed to connect to MySQL:" . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM topics");

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Scripture Entry Form</h1>
<form action="insert.php" method="post">
<label>Book:</label><br/>
<input type="text" name="book"/><br/>
<label>Chapter:</label><br/>
<input type="text" name="chapter"/><br/>
<label>Verse:</label><br/>
<input type="text" name="verse"/><br/>
<label>Content:</label><br/>
<textarea rows="10" cols="20" name="content"></textarea><br/>
<?php 
while($row=mysqli_fetch_array($result)){
	echo'<input type="checkbox" value="'.$row['id'].'" name="topic"/>';
	echo'<label>'.$row['name'].'</label><br/>';
}
?>
<input type="submit" value="Add Scripture!">
</form>
</body>
</html>