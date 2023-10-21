
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative array practive </title>
</head>
<body>

<form action="associative_array.php" method="post">
    <label for="">Enter a country</label><br>
    <input type="text" name="country"><br>
    <input type="submit" value="Submit">
</form>
    
</body>
</html>


<?php

// associative array = An array made of key=>value pairs

$capitals = array("USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South korea" => "Seou",
    "India" => "New Delhi");



    $capital=$capitals[$_POST['country']];
    echo "the capital is: {$capital}";


// $capitals["USA"] = "Las Vegas"; this is way of adding key value in array replacement of value

// $capitals["china"] = "Beijing";
// array_pop($capitals); delete the last key value in array
// array_shift($capitals);

// $keys = array_keys($capitals); returns the key in array
//   $values=array_values($capitals); returns the values in array

// $flips = array_flip($capitals); it is used to exchange the value in assoc array


// foreach ($flips as $key => $value) {

//     echo "{$key} = {$value}<br>";
// }




?>