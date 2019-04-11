<?php

	// Connect to server and select database

	$sql = "SELECT * from test";
	$link = mysqli_connect("localhost","root","","db1_gwalke01");
	$result = mysqli_query($link,$sql);
	// Execute sql statement

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\"</a> </br>";
}

mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>
