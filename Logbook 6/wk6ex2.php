<?php

	// Connect to server and select database

	$sql = "SELECT * from test";
	$link = mysqli_connect("localhost","root","","db1_gwalke01");

	if(!$link)
	{
		echo "Error: Unable to connect to MySQL.";
	}

	echo "Success: A proper connention to MySQL was made.</br>";


	// Execute sql statement

?>
<html>
<body>

<?php

$result = mysqli_query($link,$sql);

while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\" >$row[name]  </a> </br>";
			echo "<a href=\"wk6ex2action.php?id=$row[phone_number]\" >$row[phone_number]  </a> </br>";
}

mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>
