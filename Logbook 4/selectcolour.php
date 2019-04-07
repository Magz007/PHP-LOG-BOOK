<html>
  <head><title>Select colour page</title></head>
    <body>


 <?PHP
echo "Your order Qty is $_POST[hdhdselqty]<br/>" ;
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

<input type="hidden" name="hdsize" value="<?php echo $_POST["size"]?>"/>
<input type="hidden" name="hdprice" value="<?php echo $_POST["price"]?>"/>

<input type="submit" value="Buy"/>

      </form>
   </body>
</html>
