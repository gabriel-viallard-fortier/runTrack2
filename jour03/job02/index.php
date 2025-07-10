<?php

$var = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie. ";

for ($i = 0 ; $i < count_chars($var) ; $i += 2) {
    echo $var[$i];
}


?>