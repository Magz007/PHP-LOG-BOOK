<?php
session_start();
   echo "Your order qty is $_POST[selqty]" ;
   echo " and the selected colour is". $_session["selcolour"]. ;
?>
