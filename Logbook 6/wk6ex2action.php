<?php
	// Connect to server and select database
	$link = mysqli_connect("localhost","root","","db1_gwalke01");
	if(!$link)
	{
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	echo "Success: A proper connention to MySQL was made.</br>";


	// Connect to server and select database
	$sql = "DELETE FROM Student WHERE studentId = $Id";
	$result = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($link);
?>
<html>
<body>
<form action="" method="post">
 	Name :
	<input type=text name=txtname value="<?php echo $row["name"]?> "readonly />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row["phone_Number"] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row["email"] ?>" />
</br>
	<input type=submit name=btnsubmit value="save"/>


</form>
</body>
