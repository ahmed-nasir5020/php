<!-- php start -->
<?php
# title page 
$title = "regester";

# get data from user 
$first_name = $_POST["first_name"];
$mid_name = $_POST["mid_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$date_of_birth = $_POST["date_of_birth"];
$phone_number = $_POST["phone_number"];
$password = $_POST["password"];

# validation on user name
function check_user_name($first_name, $mid_name, $last_name): string
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
# validation on user email
function check_user_email($email): string
{
    $result = "";
    if (!empty($email)) {
        if ($email === "khalid") {
            $result = "wellcome {$email}";
        } else {
            $result =  "user_name wrong";
        }
    } else {
        $result = "enter your name ";
    }
    return $result;
}
# validation on user gender
function check_user_gender($gender): string
{
    $result = "";
    if (!empty($gender)) {
        if ($gender === "khalid") {
            $result = "wellcome {$gender}";
        } else {
            $result =  "user_name wrong";
        }
    } else {
        $result = "enter your name ";
    }
    return $result;
}
# validation on user date_of_birth
function check_user_date_of_birth($date_of_birth): string
{
    $result = "";
    if (!empty($date_of_birth)) {
        if ($date_of_birth === "khalid") {
            $result = "wellcome {$date_of_birth}";
        } else {
            $result =  "user_name wrong";
        }
    } else {
        $result = "enter your name ";
    }
    return $result;
}
# validation on user phone_number
function check_user_phone_number($phone_number): string
{
    $result = "";
    if (!empty($phone_number)) {
        if ($phone_number === "khalid") {
            $result = "wellcome {$phone_number}";
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

    <!-- regester form  -->
    <form action="regester.php" method="post">
        <!-- form title -->
        <div>
            <h1>Regester</h1>
        </div>

        <!-- input user name  -->
        <div>
            <label for="first_name">first_name</label><br>
            <input type="text" name="first_name" id=""><br>
            <label for="mid_name">mid_name</label><br>
            <input type="text" name="mid_name" id=""><br>
            <label for="last_name">last_name</label><br>
            <input type="text" name="last_name" id="">
        </div><br>
        <!-- input email -->
        <div>
            <label for="email">email</label><br>
            <input type="email" name="email" id="">
        </div><br>
        <!-- input gender -->
        <div>
            <p>gender</p>
            <label for="male">male</label>
            <input type="radio" name="gender" id="male">
            <br>
            <label for="female">female</label>
            <input type="radio" name="gender" id="female">
        </div><br>
        <!-- input date_of_birth -->
        <div>
            <label for="date_of_birth">date_of_birth</label><br>
            <input type="date" name="date_of_birth" id="">
        </div><br>
        <!-- input phone_number -->
        <div>
            <label for="phone_number">phone_number</label><br>
            <input type="number" name="phone_number" id="">
        </div><br>
        <!-- input password -->
        <div>
            <label for="password">password</label><br>
            <input type="password" name="password" id=""><br>
            <label for="password">password</label><br>
            <input type="password" name="password" id="">
        </div><br>
        <!-- submit information -->
        <div>
            <input type="submit" name="regester" value="regester" id="">
        </div><br>
        <!-- go to login -->
        <div>
            <p>Have An Account? <a href="../login/login.php">Login</a></p>
        </div>
        <!-- regester form result  -->
        <?php

        ?>

    </form>
</body>

</html>
<!-- html home page end -->