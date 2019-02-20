<html>
<body>
<?php
	$hourlyrate	= 5.75;
	$hoursperweek = 40;
	$tax= 22;
	$gross = $hourlyrate * $hoursperweek  ;
	$totalearn = ($tax/100)*$gross;
	$netwages=$totalearn - $gross
	echo $netwages;
?>
</body>
