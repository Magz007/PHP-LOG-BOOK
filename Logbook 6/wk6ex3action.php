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
  <?php
 if(isset($_POST ['submitDeleteBtn']))
 {
   $key= $_POST['btndelete'];
   $check=mysqli_query("select * from test where id='$key'");
   if (mysqli_num_rows ($check)> 0)
   {
     $queryDelete=mysqli_query("DELETE from  test where id = '$key'");?>
   }
 }

   ?>
  <table class='table' table border= "5px">
  <tr>
      <th> Index </th>
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
    <form action="" method= "post" role = "form">
  <td><?php echo $sr ;?> </td>
  <td><?php echo $row['name'] ;?> </td>
    <td><?php echo $row['email'] ;?> </td>
      <td><?php echo $row['phone_Number'] ;?> </td>
        <td><?php echo $row['ID'] ;?> </td>
        <td> <input type= "checkbox" name= "btndelete" value=<?php echo $row['ID'] ;?> required></td>

        <td> <input type= "submit" name="submitDeleteBtn" class-= "btn btn-info">  </td>

     </form>
</tr>
<?php $sr ++ ;}
?>
    </table>
</div>
</body>
</html>
