<?php
if (isset($_POST['save']))
{
$number=$_POST['phone_Number'];
$mail=$_POST['email'];
$file=fopen ("wk6ex2action.php");
$s= $number. ",".$mail."\n";
fputs($file,$s);
fclose($file);
}
   ?>
