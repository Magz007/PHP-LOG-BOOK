<?php

$total= 0;
$total = $selqty * $price;

   echo "Your order Qty is $_POST[hdselqty]</br></br>" ;

   echo "Your order Size is $_POST[hdselsize]</br></br>" ;

   echo "Unit Price  $_POST[hdprice].<br/><br/>";

   echo "The selected colour is $_POST[selcolour].</br></br>" ;

   echo "The Total price  is $total";
/*
  if ( $hdselsize == [small]  )
  {
    echo "Public transport is your best option. <br/>";
  }
  elseif ($hdselsize == [Medium] )
  {
    echo "If you get caught say your grandmother was driving. <br/>";
  }
  elseif($hdselsize ==Large )
  {
    echo "There is no need to worry about the speed limit.<br/>";
  }
  elseif ($hdselsize == Extra Large)
  {
    echo "There is no need to worry about the speed limit.<br/>";
  }
*/

?>
