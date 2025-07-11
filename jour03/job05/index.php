
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

    $caracteres = str_split(strtolower($str));

?>
    <tr>
        <td>
            <?php
                // on teste l'array qui contient la chaine de départ
                    foreach ($caracteres as $caractere) {
                        
                        // On teste l'array créé par rapport au dictionnaire des voyelles
                        if (in_array($caractere, $dictionnaire['voyelles'])) {   
                            $nombreVoyelles ++;
                        }
                        // si in_array est true alors score ++
                        elseif (in_array($caractere, $dictionnaire['consonnes'])) {
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
