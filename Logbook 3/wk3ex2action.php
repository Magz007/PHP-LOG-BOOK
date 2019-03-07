<?php
  if ($_POST["txtage"] < 21)
  {
	echo "You are under 21 years old<br/>";
  }
  else
  {
	echo "You are  21 years old or over<br/>";
  }


  if ($_POST["txtgender"] == "Female")
  {
	echo "You are Female<br/>";
  }
  else
  {
	echo "You are  Male<br/>";
  }
?>
