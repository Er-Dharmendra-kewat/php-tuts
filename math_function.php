<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Math function in php</title>
</head>

<body>


        <form action="math_function.php" method="post">
            <label for="">X:</label>
            <input type="text" name="x" id="x"><br>
            <label for="">Y:</label>
            <input type="text" name="y" id="y">
            <input type="submit" value="total">

        </form>

</body>

</html>

<?php

            $x = $_POST["x"];
            $y = $_POST["y"];
            $z  =$_POST["z"];
            $total = null;

        // $total  =abs($x); rturns a positive number
        // $total  =round($x); it gives number by rounding off
        //    $total  =floor($x);
        // $total  =ceil($x); it rounds a number up to teh nearest integer

            // $total = pow($x, $y);
            // $total = sqrt($x);
           

        echo $total;

?>