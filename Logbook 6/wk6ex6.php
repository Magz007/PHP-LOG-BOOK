<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £". calculatetax(900) . " tax . My Allowance  is £" .taxallowance(300) ;
	html_footer();
?>
