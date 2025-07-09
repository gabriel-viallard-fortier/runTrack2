
<?php

/* Nombres premiers entre 0 et 100
LEVEL = IMPENSABLE 

Un nombre est premier si le nombre de diviseurs
est >= 3
*/


// On teste un nombre n entre 0 et 1000

    for ($n = 0; $n <=1000; $n ++)
    {
        //on initialise le score à chaque boucle pour faire 1000 scores
        $score = 0;

        // On teste de le diviser 1000 fois par 1 à 1000
        for ($i = 1; $i <=1000; $i ++)
        {
            // On stocke un score qui doit être supérieur à 2
            if (gettype($n / $i ) == "integer"):
                $score ++;
            endif;
        }



        // On teste le score 1000 fois
        // et on affiche un retour */
    
            switch ($score) {
        case $score > 2:
                echo $n . " est un nombre ordinaire" . "<br />";
            break;
        case $score == 2:
            echo $n . " <mark>est un nombre premier</mark>" . "<br />";
            break;
        case $score == 1: 
            echo $n ." n'est divisible que par lui-même" . "<br />";
            break;

        }



    }
?>