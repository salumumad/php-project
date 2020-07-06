<?php

// PHP integers

$x = 5985;

/*
* check if the type of a variable is integer
* outputs a boolean value (true or false)
*/
var_dump (is_long($x));

echo "<br>";

var_dump($x);

echo "<br>";

// check again...
$x = 59.85;

# outputs a boolean value (true or false)
var_dump(is_int($x));

?>