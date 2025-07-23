<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php






function plateforme($str) {
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





switch ($_POST['option']) {
    case 'gras':
        gras($_POST['str']);
        break;
    case 'cesar':
        cesar($_POST['str'], 2);
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