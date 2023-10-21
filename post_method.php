<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post method 🔥 🔥 </title>
</head>
<body>

<h2>Practice of Post Method 🔥 🔥 </h2>

<form action="post_method.php" method="post">
 <label for="quntity">Quantity:</label><br>
 <input type="text" name="quantity" id="quantity">
 <input type="submit" name="total" id="submit" value="total">


</form>
</body>
</html>

<?php
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s <br>";
echo "Your total is: \${$total}";

?>