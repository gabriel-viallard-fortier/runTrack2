<?php

function occurences($str, $char) {
    
    // init
    $nombreOccurences = 0;

    //on boucle notre chaine $str
    for ($i = 0 ; isset($str[$i]) ; $i ++) {
        
        if ($char == $str[$i]) {
            $nombreOccurences ++;
            // Si le caractere demandé est présent dans la chaine, nombreOccurences ++
        }
    }

    // on affiche le nombre d'occurences
    echo $str . " contient " . $nombreOccurences . " fois " . "'" . $char . "'";

}


echo occurences("Bonjour", "o");


?>