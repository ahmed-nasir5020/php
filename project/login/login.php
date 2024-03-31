<!-- php start -->
<?php
# title page 
$title = "login";

# get data from user 
$user_name = $_POST["user_name"];
$password = $_POST["password"];

# validation on user name
function check_user_name($user_name): string
{
    $result = "";
    if (!empty($user_name)) {
        if ($user_name === "khalid") {
            $result = "wellcome {$user_name}";
        } else {
            $result =  "user_name wrong";
        }
    } else {
        $result = "enter your name ";
    }
    return $result;
}

# validation on user password
function check_user_password($password): string
{
    $result = "";
    if (!empty($password)) {
        if ($password === "1234") {
            $result =  "wellcome password is good";
        } else {
            $result =  "user_password wrong";
        }
    } else {
        $result =  "enter your password ";
    }
    return $result;
}

?>
<!-- php end -->


<!-- html home page start -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <!-- login form  -->
    <form action="login.php" method="post">
        <!-- form title -->
        <div>
            <h1>Login</h1>
        </div>

        <!-- input user name  -->
        <div>
            <label for="user_name">user_name</label><br>
            <input type="text" name="user_name" id="">
        </div><br>
        <!-- input password -->
        <div><label for="password">password</label><br>
            <input type="password" name="password" id="">
        </div><br>
        <!-- submit information -->
        <div>
            <input type="submit" name="login" value="login" id="">
        </div><br>
        <div>
            <!-- go to regester -->
            <p>Dont Have Account? <a href="../regester/regester.php">regester</a></p>
        </div>
        <!-- login form result  -->
        <?php
        echo check_user_name($user_name) . "<br>";
        echo check_user_password($password);
        ?>

    </form>
</body>

</html>
<!-- html home page end -->