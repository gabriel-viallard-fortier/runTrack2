<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = [
    "a",
    "e",
    "i",
    "o",
    "u",
    "y",
    "A",
    "E",
    "I",
    "O",
    "U",
    "Y",
];


//on parcourt $str

for ($i = 0 ; isset($str[$i]) ; $i ++) {


    // on parcourt les voyelles
    for ($x = 0 ; isset($voyelles[$x]) ; $x ++) {

        // si le caractere parcouru dans $str est présent dans voyelles
        //on l'affiche
        if ($str[$i] == $voyelles[$x]) {
            echo $str[$i];
        }
        
    }

}




?>
