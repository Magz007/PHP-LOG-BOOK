<?php

	// Connect to server and select database
$link = mysqli_connect("localhost","root","","db1_gwalke01");

$sql = "SELECT * from test where name = $_GET[id]";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);
while ($row = mysqli_fetch_row($result))
{
echo " $row[0] $row[1] <br/>";
}

?>
<html>
<body>

<form action=""  method="post">

	Name :
	<input type=text name=txtname value="<?PHP echo $row["name"] ?>" readonly  />

	Phone number :
	<input type=text name=txttelno value="<?PHP echo $row["phone_number"] ?>"/>

	Email :
	<input type=text name=txtemail value="<?PHP echo $row["email"] ?>" 	/>

	<input type=submit name=btnsubmit value="save"/>

</form>
</body>
