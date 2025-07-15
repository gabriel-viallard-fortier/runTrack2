
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




?>
    <tr>
        <td>
            <?php


                // on convertie en lowercases

                $str = strtolower($str);

                 
                //on parcourt $str

                for ($i = 0 ; isset($str[$i]) ; $i ++) {

                // si le caractere parcouru dans $str est présent dans voyelles
                //on le compte
                    foreach ($dictionnaire['voyelles'] as $char) {
                        if ($str[$i] == $char) {
                            $nombreVoyelles ++;
                        }   
                    }
                    foreach ($dictionnaire['consonnes'] as $char) {
                        if ($str[$i] == $char) {
                            $nombreConsonnes ++;
                        } 
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
