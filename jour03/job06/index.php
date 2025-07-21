<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $str = "Les choses que l'on possède finissent par nous posséder.";

    // On veut retourner à l'envers cette chaine de caracteres

    $longueurChaine = 0;

    for ($i = 0; isset($str[$i]); $i++) {
            $longueurChaine = $i;
    }


    for ($i = $longueurChaine ; $i >= 0 ; $i --)
    {
        echo $str[$i];
    }

    ?>
</body>
</html>





