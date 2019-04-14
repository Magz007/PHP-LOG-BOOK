<?php
// Connect to server and select database
$link = mysqli_connect("localhost","root","","db1_gwalke01");
if(!$link)
{
  echo "Error: Unable to connect to MySQL.";
  exit;
}
echo "Success: A proper connention to MySQL was made.</br>";
?>
<?php
$fetchQuery = mysqli_query("Select * from test");
 ?>

<html>
<head> Delete Record </head>
<body style="padding-top: 100px; " >
<div class= "container">
  <table class='table'>
  <tr>
    <th> Name </th>
      <th> Email </th>
        <th> Phone_Number </th>
          <th> ID </th>
  </tr>
  <?php
$sr=1;
while($row= mysqli_fetch_array($fetchQuery))
{?>
  <tr>
    <form>
  <td><?php echo $sr ;?> </td>
  <td><?php echo $row['name'] ;?> </td>
    <td><?php echo $row['email'] ;?> </td>
      <td><?php echo $row['phone_Number'] ;?> </td>
        <td><?php echo $row['ID'] ;?> </td>
        
</form>
</tr>
<?php $sr++; ?>
}
   ?>
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
