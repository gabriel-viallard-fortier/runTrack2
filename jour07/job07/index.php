<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

function gras($str) {
    echo "<b>";
}

function cesar($str, $decalage) {

    for ($i = 0 ; isset($str[$i]) ; $i ++) {

        $str[$i] = $str[$i + 2];
    }

}







switch ($_POST['option']) {
    case 'gras':
        gras($_POST['str']);
        break;
    case 'cesar':
        cesar($_POST['str'], $decalage);
        break;
    case 'plateforme':
        plateforme($_POST['str']);
        break;

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