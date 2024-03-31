<?php
// array 
echo "associtive array <br>";

$worker = [
    "designer" => "ahmed",
    "devolper" => "nasir",
    "gamer" => "elamin"
];
// $score=[
//    "ahmed" => [50,"a"],
//    "ali"=> [80,"a+"]
// ];
$score=[
    "ahmed" => ["deg"=>50,"ma"=>"a"],
    "ali"=> ["deg"=>80,"ma"=>"a+"]
 ];
$gender=[
"male" => true,
"female" => false,
];

echo "designer :".$worker["designer"]."<br>";
echo "devolper :".$worker["devolper"]."<br>";
echo "gamer :".$worker["gamer"] ."<br>";
print_r (array_values($gender));

$in = $_GET["name"];

// echo $score[$in][0];
// echo $score[$in][1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associtive.php" method="get">
<input type="text" name="name" id="">
<input type="submit" value="submit">
    </form>
    <?php 
    // echo $worker[$in];
    echo $score[$in]["deg"];
    echo $score[$in]["ma"];
    ?>
</body>
</html>