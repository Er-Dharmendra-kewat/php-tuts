<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add numbers using php function</title>
</head>
<body>

  <form action="add_num.php" method="post">
    <label>Num1</label>
    <input type="number"name="num1" placeholder="num1"><br>
    <label>Num2</label>
    <input type="number"name="num2"  placeholder="num2"><br>
    <input type="submit" value="Calculate">

  </form>
    
</body>
</html>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = null;


$num3= $num1+$num2;

echo "addition is {$num3}<br>";

?>