<?php 

// function hello(){
//     $user = "ahmed";
//     echo "hello ". $user;
// }
// function hello(){
//     $user = "ali";
//     if($user === "ahmed"){
//         echo "hello ". $user;
//     }else{
//         echo "bye ". $user;
//     }
// }
// function helloo($x){
//         $user = $x;
//         echo "hello ". $user . "<br>";
//     }
// helloo("khalid");
// helloo("ali");
// helloo("omer");
function add($x,$y){
return $x+$y;
}
echo add(1,5)."<br>";
echo add(10,15)."<br>";
echo add(6,4)."<br>";

$arr=[1,2,3];
$arr2=["ali","omer","khalid"];
function arr( ...$arr){
foreach($arr as $i){
echo $i . "\t";
}
}
arr($arr);
arr($arr2);
?>