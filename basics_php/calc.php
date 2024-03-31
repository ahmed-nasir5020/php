<?php 
$number1 = $_REQUEST["number1"];
$number2 = $_REQUEST["number2"];

// $resulte = $number1 + $number2 ;
// $resulte = $number1 - $number2 ;
$resulte = $number1 * $number2 ;
// $resulte = $number1 / $number2 ;
// $resulte = $number1 % $number2 ;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
</head>
<body>
    <form action="calc.php" method="post">
    <label for="number1">number1</label>
        <input type="number" name="number1" id="">
        <label for="number2">number2</label>
        <input type="number" name="number2" id="">
        <input type="submit" value="result">
    </form>
    <div>
        <button><?php echo "result = {$resulte}";?></button>
    </div>
</body>
</html>