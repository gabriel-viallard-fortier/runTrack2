<?php

$var = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


// On affiche un caractere sur deux

for ($i = 0 ; isset($var[$i]) ; $i += 2) {
    echo $var[$i];
}


?>