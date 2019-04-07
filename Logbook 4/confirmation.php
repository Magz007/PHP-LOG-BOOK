<?php

   echo "Your order qty is $_POST[hdselqty]</br>" ;
   echo "Your order qty is $_POST[hdsize]</br>" ;
   echo " and the selected colour is $_POST[selcolour].</br>" ;
   echo "Unit Price  $_POST[hdprice].<br/>";


  $total= 0;

  $total = $selqty * $price;


echo "The Total price to pay is $total";
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
