<?php 
$number1 = $_REQUEST["number1"];
$number2 = $_REQUEST["number2"];
$op = $_REQUEST["op"];

if(!empty($number1)&& !empty($number2) && !empty($op)){
    if($op === "+"){
        $resulte = $number1 + $number2 ;
    }elseif($op === "-"){
        $resulte = $number1 - $number2 ;
    }elseif($op === "*"){
        $resulte = $number1 * $number2 ;
    }elseif($op === "/"){
        $resulte = $number1 / $number2 ;
    }elseif($op === "%"){
        $resulte = $number1 % $number2 ;
    }else{
    $resulte = "not one of op";
    }
}else{
    $resulte = "number1 or number2 or op wrong";
}

// if(empty($number1)){
// echo "number1 is empty";
// }elseif(empty($number2)){
//     echo "number2 is empty";
// }elseif(empty($op)){
//     echo "op is empty";
// }else{
//     if($op === "+"){
//         $resulte = $number1 + $number2 ;
//     }elseif($op === "-"){
//         $resulte = $number1 - $number2 ;
//     }elseif($op === "*"){
//         $resulte = $number1 * $number2 ;
//     }elseif($op === "/"){
//         $resulte = $number1 / $number2 ;
//     }elseif($op === "%"){
//         $resulte = $number1 % $number2 ;
//     }else{
//     $resulte = "not one of op";
//     }
// }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
</head>
<body>
    <form action="new_calc.php" method="post">
    <label for="number1">number1</label>
        <input type="number" name="number1" id="">
        <label for="number2">number2</label>
        <input type="number" name="number2" id="">
        <label for="op">op</label>
        <input type="text" name="op" id="">
        <input type="submit" value="result">
    </form>
    <div>
        <button><?php echo "result = {$resulte}";?></button>
    </div>
</body>
</html>