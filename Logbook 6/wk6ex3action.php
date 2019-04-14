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
$sql = "SELECT * from test";
$fetchQuery = mysqli_query($link,$sql);
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
while($row= mysqli_fetch_array($fetchQuery))
{?>
  <tr>
    <form action="" method= "post" role = "form">

  <td><?php echo $row['name'] ;?> </td>
    <td><?php echo $row['email'] ;?> </td>
      <td><?php echo $row['phone_Number'] ;?> </td>
        <td> <input type= "button" name= "btndelete" value=<?php echo $row['ID'] ;?> </td>

        <td> <input type= "submit" name="submitDeleteBtn" class-= "btn btn-info">  </td>

     </form>
</tr>


    </table>
</div>
</body>
</html>
