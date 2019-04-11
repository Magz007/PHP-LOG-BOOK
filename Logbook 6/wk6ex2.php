<?php
	// Connect to server and select database
	$link = mysqli_connect("localhost","root","","db1_gwalke01");

	if(!$link)
	{
		echo "Error: Unable to connect to MySQL.";
		exit;
	}
	echo "Success: A proper connention to MySQL was made.</br>";
	// Execute sql statement
?>
<html>
<body>

<?php
$sql = "SELECT * from test";
$result = mysqli_query($link,$sql);

while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id= $row[name]\" >$row[name]   </a> </br>";
}
mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>
