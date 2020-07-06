<?php

// PHP Infinity and NaN example

$x = 1.9e411;

var_dump($x); # returns the data type and value

echo " ~ "; 

var_dump(is_finite($x)); # returns the boolean value

echo "<br>"; // line break

$x = acos(1); //  inverse function of cos()

var_dump($x); # returns the data type and value

echo " => "; // line break

var_dump(is_nan($x)); # returns the boolean value

?>