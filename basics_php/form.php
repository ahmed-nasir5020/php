<?php
// form
echo "form <br>";
//method get حصول post ارسال REQUEST استقبال كل من السابق
// echo $_POST["name"];
// echo $_POST["password"];
// echo $_GET["name"];
// echo $_GET["password"];
// echo $_REQUEST["name"];
// echo $_REQUEST["password"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="form.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="">
        <label for="password">password</label>
        <input type="password" name="password" id="">
        <input type="submit" value="login">
    </form>
</body>
</html>