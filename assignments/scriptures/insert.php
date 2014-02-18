<?php

$con=mysqli_connect("localhost", "guest",'Pa$$w0rd',"scriptures");
if (mysqli_connect_errno())
{
	echo"Failed to connect to MySQL:" . mysqli_connect_error();
}

$sql="INSERT INTO scriptures(book, chapter, verse, content)VALUES('$_POST(book)','$_POST(chapter)','$_POST(verse)','$_POST(content)')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

?>