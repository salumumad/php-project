<?php

# PHP static keyword example

function myTest() {

  // static keyword is used to keep the local variable x 
  static $x = 7;

  echo $x."<br>"; // outputs the value of variable x

  # increment x by 1
  $x++;

}

// checking the static behavior 
myTest();

myTest();

myTest();

?>