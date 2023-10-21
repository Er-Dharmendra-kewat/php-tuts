<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="validate.php" method="post">
   username:<br>
    <input type="text" name="username"><br>
    Age:<br>
    <input type="text" name="age"><br>
    Eamil:<br>
    <input type="text" name="email"><br>
    <input type="submit" name="login" value="login">
   </form>
</body>
</html>
<?php

if(isset($_POST["login"])){

    // $username  = $_POST["username"];
    /*
    $username  = filter_input(INPUT_POST,"username",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age  = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
     echo "Hello {$username}";
     echo "You are  {$age} years old";
    echo "Your email is: {$email}";
    */

    $age = filter_input(INPUT_POST,"age",
                        FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST,"email",
                        FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo "that email wasn't valid";

    }else{
        echo"You email is: {$email}";
    }

}
?>