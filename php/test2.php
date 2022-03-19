<?php
define("PI",3.14);
$r=16;                     
echo "半径为16的圆的面积为: ".PI * ( $r * $r);
echo "<br />"; 
echo "半径为16的圆的周长为: " . 2*PI * $r;
echo "<br/>";
echo "半径为16的球的体积为: " . 4/3* PI * ($r * $r * $r);
?>