<?php

$abc = '3500'.' '.'&#2547;';
echo $abc;
echo "<br>";
$cde = explode(' ',$abc);
echo "<br>";
print_r($cde);
echo "<br>";
$aaa = array_splice($cde, 0, 1);
print_r($aaa);
echo "<br>";
echo implode('', $aaa);
echo "<br>";
echo implode('', array_splice(explode(' ', $abc),0, 1));
