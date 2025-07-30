<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    if (isset($_POST["prenom"]) && $_POST["prenom"] !== "") {
        $login = $_POST["prenom"];
        setcookie("login", $_POST["prenom"]);

    }
    if (isset($_COOKIE["login"])) {
        $login = $_COOKIE["login"];

    }
    if (isset($_POST["deco"])) {
        setcookie("login", "", time() - 3600);
        $_COOKIE["login"] = null;
        $login = null;
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
    <?php if (!isset($login)) :?>
        <form method="post">
            <fieldset>
                <legend>Username</legend>
                <input type="text" name="prenom">
                <button type="submit" name="connection">Connection</button>
            </fieldset>
        </form>
    <?php else :
        echo "Bonjour, " . $login . "<br>"?>
        <form method="post">
                <button type="submit" name="deco">Déconnection</button>
        </form>
        <?php endif; ?>
    
</body>

</html>