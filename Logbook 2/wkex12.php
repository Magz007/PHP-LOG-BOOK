<?php
$data = array (
  array(
    "code" => "1",
    "name" => "Open Source Systems",
    "year" => 'year 1',
    "grade" => 55
  ),
  array(
    "code" => "2",
    "name" => "Programming 1",
    "year" => 'year 1',
    "grade" => 65
  ),
  array(
    "code" => "3",
    "name" => "Programming 2",
    "year" => 'year 2',
    "grade" => 75
  ),
  array(
    "code" => "4",
    "name" => "Web Application Developmente",
    "year" => 'year 2',
    "grade" => 65
  ),
array(
  "code" => "4",
  "name" => "Software Engineering",
  "year" => 'year 2',
  "grade" => 75
)
)

?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Subject</th><th>Year</th><th>Marks</th></tr>
<?php
  for($count = 0;$count < count($data);$count++)
  {
    echo "<tr>
     <td>{$data[$count]['code']}</td>
     <td>{$data[$count]['name']}</td>
     <td>{$data[$count]['year']}</td>
     <td>{$data[$count]['grade']}</td>
     </tr>";
  }
?>
</table>
</body>
</html>
