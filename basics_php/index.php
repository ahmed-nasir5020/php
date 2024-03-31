<?php 
// phpinfo();
// تعليمة echo 
echo "<h1>hello world </h1>";
// variabels المتغيرات 
$title = "learn php 7.8";
$number = 40;
$num = 12.2;
$boolean = true;
$bool = false;
$noting = null;
$undef;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ." home_page";?></title>
</head> 
<body>
<?php 
echo "number int : {$number} <br>";
echo "number float: {$num} <br>";
echo "string : {$title} <br>";
echo "bollean t : {$boolean} <br>";
echo "bollean f : {$bool} <br>";
echo "null : {$noting} <br>";
echo "unefind : {$undef} <br>";
?>    
</body>
</html>