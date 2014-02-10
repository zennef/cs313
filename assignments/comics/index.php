<?php

include'includes/connection.php';

$result = mysqli_query($con,"SELECT * FROM comment");

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Mike Garcia's Comics</h1>
<img src="comics/2014-02-03.jpg">
<?php

while($row = mysqli_fetch_array($result))
  {
  echo "<p>" . $row['comment'] . "</p>";
  }

?>
</body>
</html>