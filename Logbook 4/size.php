<html>
  <head><title>Select colour page</title></head>
    <body>


 <?PHP  echo "Your order qty is $_POST[selqty]";

 ?>
<form  action="selectcolour.php" method="post">


	Select the size for the
   <?php echo $_POST["selqty"] ?>
   widgets you are ordering

   	<select name="selsize">
   	<option>small</option>
	  <option>Medium</option>
	  <option>Large</option>
	  <option>Extra Large</option>
  </select>

        <br/>
        <br/>
<input type="hidden" name="hdselqty" value="<?php echo $_POST["selqty"]?>"/>
<input type="hidden" name="hdprice" value="<?php echo $_POST["price"]?>"/>
<input type ="size"/>
<input type="submit" value="Buy"/>

      </form>
   </body>
</html>
