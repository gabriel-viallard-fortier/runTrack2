<?php
/* Multiples de 3, 5 et (3 et 5) entre 0 et 100*/

for ($i = 0; $i <= 100; $i++) {
    switch($i) {
        case ($i % 3 == 0 && $i % 5 == 0):
            echo "Multiple de 15<br />";
            break;
        case $i % 3 == 0:
            echo "Multiple de 3<br />";
            break;
        case $i % 5 == 0:
            echo "Multiple de 5<br />";
            break;
        default:
            echo $i . "<br />";
            break;
        }
    }

?>