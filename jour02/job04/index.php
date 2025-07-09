<?php

for ($i = 0; $i <= 100; $i++) {
    switch($i) {
        case (gettype($i / 3) == "integer" && gettype($i / 5) == "integer"):
            echo "FizzBuzz<br />";
            break;
        case gettype($i / 3) == "integer":
            echo "Fizz<br />";
            break;
        case gettype($i / 5) == "integer":
            echo "Buzz<br />";
            break;

        default:
            echo $i . "<br />";
            break;
        }
    }

?>