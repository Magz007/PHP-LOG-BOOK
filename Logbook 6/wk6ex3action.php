<?php


$link = mysqli_connect("localhost","root","","db1_gwalke01");
if(!$link)
{
  echo "Error: Unable to connect to MySQL.";
  exit;
}
echo "Success: A proper connention to MySQL was made.</br>";
// Connect to server and select database
$sql = "DELETE FROM Student WHERE studentId = $Id";
?>

<html>
<head> Delete Record </head>
<body style="padding-top: 100px; " >
<div class= "container">
  <table class='table'>
  <tr>
    <td> Name </td>
      <td> Email </td>
        <td> Phone_Number </td>
          <td> ID </td>
  </tr>
</table>
</div>




</boby>
</html>



<?php

/*
if (isset($_POST['txttelno']))
{
$file=fopen ("update.txt ","a");
fputs($file,nl2br($_POST['txttelno']).'<br>');

fclose($file);
}
if (isset($_POST['txtemail']))
{
$file=fopen ("update.txt ","a");
fputs($file,nl2br($_POST['txtemail']).'<br>');

fclose($file);
}
 @ReadFile("update.txt")
?>
*/
