<?php
  $topmodules[0] = "Open Source Systems ";
  $topmodules[1] = "Programming 1";
  $topmodules[2] = "Programming 2";
  $topmodules[3] = "Web Application Development";
  $topmodules[4] = "Software Engineering";
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;
$mymarks["year 4"] = 65;
$mymarks["year 5"] = 75;
?>

<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">

<tr><th>Index</th><th>Subject</th><th>Mark</th><th>Year</th></tr>

<?php
  for($count = 0;$count < 5;$count++)
  {
    echo "<tr> <td>$count</td> <td>$topModules[$count]</td> <td>$mymarks[$index]</td> <td>$mymarks[$Value]</td> </tr>";

  }
?>

</table>
</body>
</html>
