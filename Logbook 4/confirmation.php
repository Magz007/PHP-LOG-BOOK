<?php
session_start();
   echo "Your order qty is $_POST[hdselqty]</br>" ;
   echo " and the selected colour is $_POST[selcolour].</br>" ;
  echo "The  Price  is for each is  $_POST[hdprice].<br/>";
  echo "The Total price to pay is   $_POST[hdtotal]";

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
