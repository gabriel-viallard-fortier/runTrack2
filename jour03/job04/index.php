<?php

$str = "Dans l'espace, personne ne vous entend crier.";
$count = 0;



for ($i = 0; $i < strlen($str) ; $i++) {
    if (isset($str[$i])) {
        $count ++;
    }
}
echo "Votre chaine contient " . $count . " caracteres.";


?>