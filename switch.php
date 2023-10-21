<?php

$days = $_POST['weeks'];

switch ($days) {
    case 1:
        echo "sunday";
        break;
    case 2:
        echo "Moday";
        break;
    case 3:
        echo "tuesday";
        break;
    case 4:
        echo "wednesday";
        break;
    case 5:
        echo "thursday";
        break;
    case 6:
        echo "friday";
        break;
    case 7:
        echo "saturday";
        break;

    default:
        echo " only number will be valid";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case</title>
</head>
<body>

<form action="switch.php" method="post">

<label>Weeks Name:</label>
<input type="number" name="weeks"><br>
<input type="submit" value="Days">

</form>

</body>
</html>
