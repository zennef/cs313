<?php
$con=mysqli_connect("localhost","guest",'Pa$$w0rd',"scriptures");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM scriptures");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h1>Scriptures</h1>
<?php
while($row = mysqli_fetch_array($result))
  {
  echo "<b>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</b><br/>";
  echo "<p>" . $row['content'] . "</p>";
  }
?>
</body>
</html>

<!--GRANT ALL PRIVILEGES ON scriptures.* To 'guest'@'localhost' IDENTIFIED BY 'Pa$$w0rd';-->