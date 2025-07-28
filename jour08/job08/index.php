<?php
    if (isset($_POST['reset'])) {
    // si on presse reset

        setcookie("nombreVisites", "");
        //on reinitialise le cookie
        
        $nombreVisites = 0;

        //on recharge la page
        header("refresh: 1"); 
        // et on quitte le script
        exit;
    }
    else {
    // sinon
    //  si le cookie n'est pas défini
        if (!isset ($_COOKIE["nombreVisites"])) {
            // première visite
            $nombreVisites = 1;
        }
        // si le cookie existe, on l'incrémente
        else {
            $nombreVisites = $_COOKIE["nombreVisites"] + 1;
        }

        // on défini le cookie et on affiche le nombre de visites
        setcookie ("nombreVisites", $nombreVisites);
        echo "Nombre de visites : " . $nombreVisites . "<br>";
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="reset">Rafraichir & réinitialiser</button>
    </form>
</body>
</html>