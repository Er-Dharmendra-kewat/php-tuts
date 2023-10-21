<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset and empty function in php</title>
</head>
<body>

<form action="isset_empty.php" method="post">
    <label for="username">Username: </label><br>
    <input type="text" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="Log In"><br>
</form>

</body>
</html>
<?php

// $username = $_POST['username'];
// $password = $_POST['password'];

foreach ($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Username is missing";
    } elseif (empty($password)) {
        echo "Password is missing";

    } else {
        echo "Hello {$username}";
    }

}

// $username = "BroCode";
// $username = null;

// isset() function

// echo isset($username); it returns 1 when username is given
// if(isset($username)){
//     echo "this vaiable is set";
// }else{
//     echo" This variable is not set";
// }

// empty() function

// $username = "BroCode";
// $username = null;
// $username = true;
// $username = " ";

// echo empty($username);

// if(empty($username)){
//     echo "The variable is empty";
// }else{
//     echo"The variable is NOT empty";
// }
