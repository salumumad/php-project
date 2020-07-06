<?php

# PHP Variable with local scope example

function myTest() {

  $x = 5; // local scope
  
  # using variable x outside function myTest will yield 5
  echo "<p>Variable x inside function is: $x</p>";

}

// calling a function named myTest()
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

?>