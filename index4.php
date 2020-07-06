<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
</head>
<body>
    <?php

        $text = "Hello world!";

        echo strlen($text)."<br>"; // outputs 12
        echo str_word_count($text)."<br>"; # outputs 2
        echo strrev($text)."<br>"; // outputs !dlrow olleH
        echo strpos($text, "world")."<br>"; // outputs 6
        echo str_replace("world", "Salum", $text)."<br>"; // outputs Hello Salum!
        
    ?>
</body>
</html>