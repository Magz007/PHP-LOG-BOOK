<?php
  $total = 0;
  $mymarks["CO450"] = 64;
  $mymarks["CO452"] = 71;
  $mymarks["CO454"] = 62.40;
  $mymarks["CO451"] = 58;
  $mymarks["CO457"] = 64;
  $mymarks["CO455"] = 44.60;

  while(list($index,$value) = each($mymarks))
  {
    echo "for  $index  my grade was  $value % <br/>";


    $total = $total + $mymarks[$index];
    $average = $total /  6;

  }
echo $average;


?>
