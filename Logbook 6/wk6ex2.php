<?php

	// Connect to server and select database
	$sql = "SELECT * from test";
	// Execute sql statement

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($db1_qwalke01))
{
      echo "<a href=\"wk6ex2action.php? id=$row[name]\">$row[name]</a></br>";
}
?>
</body>
</html>
