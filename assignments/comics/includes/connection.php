<?php
if($register=="yes")
	$con = mysqli_connect(localhost,'insert','Pa$$w0rd',comic_db);
else
	$con = mysqli_connect(localhost,'read_only','Pa$$w0rd',comic_db);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>