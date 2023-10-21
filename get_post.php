<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="get_post.php" method="post">

        <label>Username:</label><br>
        <input type="text" name="username"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">

    </form>
</body>
</html>


<?php

// using $_GET method

// echo $_GET["username"];
// echo "{$_GET["username"]}<br>";it is used for newline
// echo $_GET["username"]."<br>";it is used for newline
//  echo"<br>"; it is used for newline
// echo "{$_GET["password"]}<br>";
// echo $_GET["password"];

// using $_POST method


  echo $_POST["username"]."<br>";
  echo $_POST["username"]."<br>";
  echo $_POST["password"]."<br>";


?>