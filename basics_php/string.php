<?php 
// string 
$name ="ahmed nasir"; 
echo "name {$name} <br>";
$last_name ='elamin yousif'; 
echo 'lastname:  '.$last_name .'<br>';
// (string)$string="omer";
/*
--------------string function----------
strtolower
strtupper
strlen
$string[index]
strreplace( ,  , )
substr( ,  ,  )

*/
echo strtolower($name)."<br>";
echo strtoupper($name)."<br>";
echo strlen($name)."<br>";
echo ($name[0])."<br>";
echo ($name[0] = "l")."<br>";
echo str_replace("nasir","yousif",$name)."<br>";
echo substr($name,3)."<br>";
echo substr($name,3,6)."<br>";
?>