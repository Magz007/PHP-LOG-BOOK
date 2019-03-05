<?php
  $topmodules[0] = "Open Source Systems ";
  $topmodules[1] = "Programming 1";
  $topmodules[2] = "Programming 2";
  $topmodules[3] = "Web Application Development";
  $topmodules[4] = "Software Engineering";
  ?>
  <?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;
$mymarks["year 4"] = 65;
$mymarks["year 5"] = 75;

$data = array (
  array(
    "code" => "1",
    "name" => "Open Source Systems",
    "yr" => 'year 1',
    "grade" => 65
  ),
  array(
    "code" => "2",
    "name" => "Programming 1",
    "yr" => 'year 1',
    "grade" => 65
  ),
  array(
    "code" => "3",
    "name" => "Programming 2",
    "yr" => 'year 2',
    "grade" => 65
  ),
  array(
    "code" => "4",
    "name" => "Web Application Developmente",
    "yr" => 'year 2',
    "grade" => 65
  )
)

?>

<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">

<tr><th>Index</th><th>Subject</th><th>Mark</th><th>Year</th></tr>

<?php
  for($count = 0;$count < count($data);$count++)
  {
    echo "<tr> <td>{$data[$count]['code']}</td><td>{$data[$count]['name']}</td><td>{$data[$count]['yr']}</td><td>{$data[$count]['grade']}</td>  </tr>";

  }
?>

</table>
</body>
</html>
