<?php

$str = "Les choses que l'on possède finissent par nous posséder.";
$strA = str_split($str);

for ($i = count($strA); $i >= 0; $i--)
    {
        echo $strA[$i];
    }

?>