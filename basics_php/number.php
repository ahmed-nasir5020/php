<?php
// numbers math 
echo "number <br>";
$num_int = 11;
$num_float = 14.3;
echo $num_int . "<br>";
echo  "numbers + :".$num_float + $num_int . "<br>";
echo  "numbers - :".$num_float - $num_int . "<br>";
echo  "numbers * :".$num_float * $num_int . "<br>";
echo  "numbers / :".$num_float / $num_int . "<br>";
echo  "numbers % :".$num_float % $num_int . "<br>";
echo  "numbers ** :".$num_float ** $num_int . "<br>";

echo  "numbers += :".$num_float += $num_int . "<br>";
echo  "numbers -= :".$num_float -= $num_int . "<br>";
echo  "numbers *= :".$num_float *= $num_int . "<br>";
echo  "numbers /= :".$num_float /= $num_int . "<br>";
echo  "numbers %= :".$num_float %= $num_int . "<br>";
echo  "numbers **= :".$num_float **= $num_int . "<br>";

echo $num_int++. "<br>";
echo $num_int--. "<br>";
// (int)$int =4;
// (float)$float = 12.2;

/*
--------------numbers function----------
abs()
pow()
sqrt()
round()
floor()
ceil()
max()
min()
*/
echo abs($num_int) . "<br>";
echo pow($num_int,$num_float) . "<br>";
echo sqrt($num_int) . "<br>";
echo round($num_float) . "<br>";
echo floor($num_float) . "<br>";
echo ceil($num_float) . "<br>";
echo max($num_int,$num_float) . "<br>";
echo min($num_int,$num_float) . "<br>";



?>