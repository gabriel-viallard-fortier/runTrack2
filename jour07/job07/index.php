<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php


function gras($str) {
    
    $mots = explode(" ", $str);

    foreach ($mots as $mot) {
        if (IntlChar::isupper($mot[0])) {
            echo "<b>" . $mot . "</b> ";
        }
        else {
            echo $mot . " ";
        }
    }
}

function cesar($str, $decalage = 2) {
    $phrase = str_split($str);

    foreach ($phrase as $char) {

        if ($char >= 'A' && $char <= 'Z') {
            if (ord($char) + $decalage > 90) {
                $char = ord($char + $decalage -26);
                echo chr($char);

            }
            else {
                $char = ord($char) +  $decalage;
                echo chr($char);

            }
        }

        elseif ($char >= 'a' && $char <= 'z') {
            if (ord($char) + $decalage > 122) {
                $char = ord($char) + $decalage - 26;
                echo chr($char);

            }
            else {
                $char = ord($char) + $decalage;
                echo chr($char);

            }
            
        }
        else {
            echo $char;
        }
    }
}


function plateforme ($str) {
    $mots = explode(" ", $str);

    foreach ($mots as $mot) {
        // Vérifie si le mot se termine par "me"
        if (substr($mot, -2) === "me") {
            echo $mot . "_ ";
        } else {
            echo $mot . " ";
        }
    }
}
?>
<body>
    <form method="post">
        <input type="text" name="str">
        <select name="option">
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">OK</button>
    </form>    
</body>
</html>


<?php

if (isset ($_POST['option'])) {
    switch ($_POST['option']) {
        case 'gras':
            gras($_POST['str']);
            break;
        case 'cesar':
            cesar($_POST['str']);
            break;
        case 'plateforme':
            plateforme($_POST['str']);
            break;
                    
    }
}
?>