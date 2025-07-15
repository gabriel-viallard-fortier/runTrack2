<?php

$str = "Les choses que l'on possède finissent par nous posséder.";

// On veut retourner à l'envers cette chaine de caracteres de 2 façons 



for ($i = strlen($str); $i >= 0; $i--)
    {
        echo $str[$i];

    }
    echo "<br>";
    echo $str . "<br>";
    echo strrev($str);
?>