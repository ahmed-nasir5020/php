<?php
// condtion الحمل الشرطية
echo "condtion <br>";
$num1 = 110;
$num2 = 1;

// if($num1 > $num2){
// echo "number1 is bigger <br>";
// }elseif($num1 < $num2){
//     echo "number2 is bigger <br>";
// }
// else{
//     echo "both have same <br>";
// }
// nested
// if($num1 > $num2){
//     echo "number1 is bigger <br>";
//     if($num1 === 10){
//         echo "number1 is 10 <br>";
//     }else{
//         echo "number1 is not 10 <br>";

//     }
//     }elseif($num1 < $num2){
//         echo "number2 is bigger <br>";
//     }
//     else{
//         echo "both have same <br>";
//     }
?>
<?php 
// && and || or ! not
$user_name = "ahmedc";
$email = "an@gmail.com";

// if($user_name === "ahmed" || $email === "an@gmail.com"){
// echo "wellcome admin : {$user_name}"."\t $email";
// }else{
//     echo "bye bye : {$user_name}";
// }
if($user_name !== "ahmed" || $email !== "an@gmail.com"){
    echo "bye bye : {$user_name}";
}else{
    echo "wellcome admin : {$user_name}"."\t $email";
}

// if($email == "an@gmail.com"){
// echo "good";
// }





?>