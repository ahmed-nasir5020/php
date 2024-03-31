<?php
$number1 = $_REQUEST["number1"];
$number2 = $_REQUEST["number2"];
$op = $_REQUEST["op"];

// function calc($number1, $number2, $op)
// {
//     if (empty($number1)) {
//         echo "number1 is empty";
//     } elseif (empty($number2)) {
//         echo "number2 is empty";
//     } elseif (empty($op)) {
//         echo "op is empty";
//     } else {
//         if ($op === "+") {
//             echo  $resulte = $number1 + $number2;
//         } elseif ($op === "-") {
//             echo  $resulte = $number1 - $number2;
//         } elseif ($op === "*") {
//             echo   $resulte = $number1 * $number2;
//         } elseif ($op === "/") {
//             echo   $resulte = $number1 / $number2;
//         } elseif ($op === "%") {
//             echo   $resulte = $number1 % $number2;
//         } else {
//             echo  $resulte = "not one of op";
//         }
//     }
// }

function add($number1,$number2){
    return ($number1 + $number2);
}

function sub($number1,$number2){
    return ($number1 - $number2);
}

function multi($number1,$number2){
    return ($number1 * $number2);
}

function mod($number1,$number2){
    return ($number1 / $number2);
}

function div($number1,$number2){
    return ($number1 % $number2);
}

if(!empty($number1)&& !empty($number2) && !empty($op)){
    if($op === "+"){
        echo add($number1,$number2) ;
    }elseif($op === "-"){
        echo sub($number1,$number2);
    }elseif($op === "*"){
        echo multi($number1,$number2);
    }elseif($op === "/"){
        echo mod($number1,$number2) ;
    }elseif($op === "%"){
        echo div($number1,$number2) ;
    }else{
    echo  "not one of op";
    }
}else{
    echo "number1 or number2 or op wrong";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
</head>

<body>
    <form action="" method="post">
        <label for="number1">number1</label>
        <input type="number" name="number1" id="">
        <label for="number2">number2</label>
        <input type="number" name="number2" id="">
        <label for="op">op</label>
        <input type="text" name="op" id="">
        <input type="submit" value="result">
    </form>
    <div>
        <?php //calc($number1, $number2, $op) ?>
    </div>
</body>

</html>