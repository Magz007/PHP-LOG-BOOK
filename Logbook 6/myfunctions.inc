<?php
function html_header($pageTitle)
{
	echo "<html><title> $pageTitle </title></head>";
	echo "<body>";
}
function html_h1($text)
{
	echo "<h1> $text </h1>";
}
function html_h2($text)
{
  echo "<h2> $text</h2>";
}
function calculatetax($salary, $rate=40)
{
	$tax = ($salary * ($rate/100));
	return $tax;
  echo "$tax";
}
function html_footer()
{
	echo "</body>";
	echo "</html>";
}
function taxallowance($salary, $allowance=0)
{
	$taxall = ($salary - $allowance);
	return $taxall;
  echo "$taxall";
}
?>
