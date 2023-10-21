<?php

$password = "pizza124";


$hash = password_hash($password, PASSWORD_DEFAULT);

// echo $hash;


if(password_verify("pizza124", $hash)){
    echo "You are logged in!";

}else{
    echo "Incorrect password";
}

?>