<?php
	// Connect to server and select database
$link = mysqli_connect("localhost","root","","db1_gwalke01");

?>
<html>
<body>
	<?php
	$sql = "SELECT * from test where name = $_GET[id]";
	$result = mysqli_query($link,$sql);

	while ($row = mysqli_fetch_row($result))
	{
	echo " $row[0] $row[1] <br/>";
	}

	?>
<form action=""  method="post">

	Name :
	<input type=text name=txtname value="<?PHP echo $row["name"] ?>" />

	Phone number :
	<input type=text name=txttelno value="<?PHP echo $row["phone_number"] ?>"/>

	Email :
	<input type=text name=txtemail value="<?PHP echo $row["email"] ?>" 	/>

	<input type=submit name=btnsubmit value="save"/>

</form>
</body>
