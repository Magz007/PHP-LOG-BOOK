<html>
  <head><title>Select colour page</title></head>
    <body>
      <? session_start();?>

 <?PHP  echo "Your order qty is $_POST[selqty]<br>";?>

  <form action="confirmation.php"  method="post">

	Select the colour for the
   <?php echo $_POST["selqty"] ?>
   widgets you are ordering

   	<select name="selcolour">
   	<option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
  </select>

        <br/>
        <br/>
<input type="hidden" name="hdselqty" value="<?php echo $_POST["selqty"]?>"/>
<input type="submit" value="Buy"/>

      </form>
   </body>
</html>
