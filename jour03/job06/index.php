<?php

$str = "Les choses que l'on possède finissent par nous posséder.";

// On veut retourner à l'envers cette chaine de caracteres


$tableau = mb_str_split($str);

for ($i = strlen($str); $i >= 0; $i--)
    {
        echo $tableau[$i];
    }

    echo "<br><br>";
    echo "<b>" . $str . "</b><br><br>";

    //fonction systeme
    echo strrev($str);
?>