
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <tr>
        <th>Consonnes</th>
        <th>Voyelles</th>
    </tr>



<?php

    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait." ;
    echo $str . "<b>";

// Array de arrays
$dictionnaire = [
    'voyelles' => ['a', 'e', 'i', 'o', 'u', 'y'],
    'consonnes' => ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm','n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'],
];

    // on déclare les scores
    $nombreVoyelles = 0;
    $nombreConsonnes = 0;


    // on convertie la chaine en array et
    // on convertie en lowercases


?>
    <tr>
        <td>
            <?php



                $str = strtolower($str);

                 
                //on parcourt $str

                for ($i = 0 ; $i < strlen($str) ; $i ++) {

                        // si le caractere parcouru dans $str est présent dans voyelles
                        //on l'affiche
                        if (in_array($str[$i] , $dictionnaire['voyelles'])) {
                            $nombreVoyelles ++;
                        }
                        elseif (in_array($str[$i] , $dictionnaire['consonnes'])) {
                            $nombreConsonnes ++;
                        }
                    }




                echo $nombreVoyelles . "<br>";
            ?>

        </td>
        <td>
                <?php
                echo $nombreConsonnes . "<br>";
                ?>
        </td>
    </tr>

</table>
</body>
</html>
