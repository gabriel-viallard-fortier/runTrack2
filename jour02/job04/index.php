<?php
/* Multiples de 3, 5 et (3 et 5) */

for ($i = 0; $i <= 100; $i++) {
    switch($i) {
        case (gettype($i / 3) == "integer" && gettype($i / 5) == "integer"):
            echo "Multiple de 15<br />";
            break;
        case gettype($i / 3) == "integer":
            echo "Multiple de 3<br />";
            break;
        case gettype($i / 5) == "integer":
            echo "Multiple de 5<br />";
            break;

        default:
            echo $i . "<br />";
            break;
        }
    }

?>