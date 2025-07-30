<?php
    if (isset($_POST["connection"]) && $_POST["username"] !== "") {
        $prenom = $_POST["username"];
        setcookie("login", $prenom);
    }
    elseif (isset($_COOKIE["login"])) {
        $prenom = $_COOKIE["login"];
    }
    if (isset($_POST["deco"])) {
        $prenom = null;
        setcookie("login", "");

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
    <?php

    if (!isset($prenom)) : ?>
        <form method="post">
            <input type="text" name="username">
            <button type="submit" name="connection">Connecter</button>
        </form>

    <?php else : ?>

        <form method="post">
            <h1><?= "Bonjour, " . $prenom ?></h1>
            <button type="submit" name="deco">Déconnection</button>
        </form>

    <?php endif; ?>
</body>

</html>