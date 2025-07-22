<?php

function occurences($str, $char) {
    
    $nombreOccurences = 0;
    for ($i = 0 ; isset($str[$i]) ; $i ++) {
        if ($char == $str[$i]) {
            $nombreOccurences ++;
        }
    }
    return $nombreOccurences;

}


echo occurences("Bonjour", "o");

?>