<?php
/* Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne. */

$str = "Dans l'espace, personne ne vous entend crier.";
$count = 0;


// une boucle de la taille de la chaine
for ($i = 0; $i < strlen($str) ; $i++) {
    
    // Si le caractere $i existe le compteur augmente
    if (isset($str[$i])) {
        $count ++;
    }
}
echo "$str contient " . $count . " caracteres.";


?>