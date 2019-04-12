<?php

	// Connect to server and select database
	$link = mysqli_connect("localhost","root","","db1_gwalke01");

	if(!$link)
	{
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	echo "Success: A proper connention to MySQL was made.</br>";

	$sql = "SELECT * from test where name = $_GET[id] ";
	// Execute query


?>

<html>
<body>
<form action="wk6ex1.html" method="post">

 	Name :
	<input type=text name=txtname value= "<?php echo $row[0] ?>" readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value= "<?php echo $row[1] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value= "<?php echo $row[2] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
