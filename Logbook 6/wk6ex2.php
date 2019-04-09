<?php

	// Connect to server and select database
	$sql = "SELECT * from test";
	// Execute sql statement
$link = mysqli_connect("localhost","login","pwd", "my_database");
$result = mysqli_query($link,$sql);
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php? id=$row[name]\">$row[name]</a></br>";
}

mysqli_free_result($result);
mysqli_close($link);


?>
</body>
</html>
