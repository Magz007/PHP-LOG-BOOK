<html>
  <head><title>Select colour page</title></head>
    <body>


 <?PHP  echo "Your order qty is $_POST[selqty]";?>

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

<?php
$total= 0

if ( $selsize == [small]  )
{
  echo "Public transport is your best option. <br/>";
}
elseif ($selsize == [Medium] )
{
  echo "If you get caught say your grandmother was driving. <br/>";
}
elseif($selsize ==Large )
{
  echo "There is no need to worry about the speed limit.<br/>";
}
elseif ($selsize == Extra Large)
{
  echo "There is no need to worry about the speed limit.<br/>";
}


?>
<input type="hidden" name="hdsize" value="<?php echo $_POST["size"]?>"/>
<input type="hidden" name="hdprice" value="<?php echo $_POST["price"]?>"/>
<input type="submit" value="Buy"/>

      </form>
   </body>
</html>
