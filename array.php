<?php

// array  =" variable" which can hold more than one value at a time.

$foods = array("apple", "orange", "coconut", "Mango");

// echo $arr[0] . "<br>";
// echo $arr[1] . "<br>";
// echo $arr[2] . "<br>";
// echo $arr[3] . "<br>";

// array_push($foods, "pineapple","kiwi"); Inserts one or more elements to the end of an array
// array_pop($foods); Deletes the last element of an array
// array_shift($foods); remove the fist element from an array

// $reverse_array = array_reverse($foods); used to reverse the array data

// $insert_array=array_pad($foods,10,"white");Inserts a specified number of items, with a specified value, to an array

foreach ($foods as $food) {
    echo $food . "<br>";
}
