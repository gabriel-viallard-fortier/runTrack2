<?php

$largeur = 20;
$hauteur = 10;

//monospace
echo "<pre>";


//une boucle pour la hauteur
 for ($y = 1 ; $y <= $hauteur ; $y ++) {

        //une boucle pour la largeur
        for ($x = 1 ; $x <= $largeur ; $x ++) {

            //premiere et dernière colonne
            if ($x == 1 || $x == $largeur) {
                echo "|";
            }
            
            // colonnes intermédiaires
            else {
                echo "&nbsp";
            }
            
            //premiere et derniere ligne
            if ($y == 1 && $x < $largeur || $y == $hauteur && $x < $largeur) {
                echo "-";
            }
            else {
                echo "&nbsp";
            }
        }

        echo "<br>";

}


echo "<br>";



for ($y = 1 ; $y <= $hauteur ; $y++) {

    for ($x = 1 ; $x <=$largeur ; $x++) {
    
        if ($x == 1 || $x == $largeur) {
            echo "|";
        }
        else {
            echo "&nbsp";
       }

       if ($y == 1 && $x < $largeur || $y == $hauteur && $x < $largeur) {
            echo "-";
        }
        else {
            echo "&nbsp";
        }

    }
    echo "<br>";
}

?>
