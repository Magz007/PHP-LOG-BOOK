<?php

	// Connect to server and select database
	$link = mysqli_connect("localhost","root","","db1_gwalke01");

	if(!$link)
	{
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	echo "Success: A proper connention to MySQL was made.</br>";

	$sql = "SELECT * from test where name = '$_GET[id]' ";
	// Execute query
  $result = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($result);

	mysqli_free_result($result);
	mysqli_close($link);

?>

<html>
<body>
<form action="" method="post">

 	Name :
	<input type=text name=txtname value="<? echo $row["name"] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<? echo $row["phone_number"] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<? echo $row["email"] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
