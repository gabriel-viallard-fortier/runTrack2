<?php

$hauteur = 20;


//monospace
echo "<pre>";


// Boucle pour les retours à la ligne
for ($y = 1 ; $y <= $hauteur; $y ++) {

    //boucle pour écrire les espaces horizontaux
    for ($x = 1; $x <= ($hauteur - $y); $x ++)
    {
        echo "&nbsp &nbsp";
    }
    //boucle pour écrire horizontalement * 
    for ($x = 1; $x <= ($y * 2 - 1); $x ++) {
        
        if ($y == $hauteur || $x == 1 || $x == 2 * $y - 1) {    
            echo "&nbsp*&nbsp";
        }
        else {
            echo "&nbsp &nbsp";
        }
     }
    echo "<br>";
}
echo "<br>";




for ($y = 1 ; $y <= $hauteur ; $y ++) {

    for ($x = 1 ; $x <= $hauteur - $y ; $x ++) {
            echo "&nbsp";
    }

    for ($x = 1 ; $x <= ($y * 2 - 1) ; $x ++) {

            if ($x == 1) {
                echo "/";
            }
            if ($x == 2 * $y - 1) {
                echo "\\";
            }
            elseif ($y == $hauteur) {
                echo "_";
            }
            else {
                echo "&nbsp";
            }
    }
    echo "<br>";
}




echo "</pre>";

?>