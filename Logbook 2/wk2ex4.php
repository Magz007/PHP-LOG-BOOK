<! - - Speed camera advise script - ->

<?php
  $points = 0;
 // Output appropriate message depending on points awarded.
 if ( $points => 12)
{
   echo "Public transport is your best option. <br/>";
}
elseif ($points <= 1)
{
   echo "If you get caught say your grandmother was driving. <br/>";
}
else
{
   echo "There is no need to worry about the speed limit.<br/>";
}
?>
