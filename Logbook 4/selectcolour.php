<html>
  <head><title>Select colour page</title></head>
    <body>


 <?PHP
echo "Your order Qty is $_POST[hdselqty]<br/>" ;
 echo "Your Order Size is  $_POST[selsize]<br/>";
 ?>
  <form action="confirmation.php"  method="post">
	Select the colour for the widgets you are ordering
<select name="selcolour">
   	<option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
  </select>

        <br/>
        <br/>
<input type="hidden" name="hdselqty" value="<?php echo $_POST["hdselqty"]?>"/>
<input type="hidden" name="hdselsize" value="<?php echo $_POST["hdselsize"]?>"/>
<input type="hidden" name="hdprice" value="<?php echo $_POST["hdprice"]?>"/>

<input type="submit" value="Buy"/>

      </form>
   </body>
</html>
