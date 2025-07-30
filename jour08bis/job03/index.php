<?php
session_start();
if (isset($_POST["reset"])) {
    $_SESSION["prenoms"] = [];
}

if (!isset($_SESSION["prenoms"])) {

    $_SESSION["prenoms"] = [];
}
if (isset($_POST["ok"]) && $_POST["prenom"] !== "") {
    $_SESSION["prenoms"][] = $_POST["prenom"];
}

foreach ($_SESSION["prenoms"] as $p) {
    echo htmlspecialchars($p) . "<br>";
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
            <label>Entrez un prénom</label>
            <input type="text" name="prenom">
            <button type="submit" name="ok">OK</button>
            <button type="submit" name="reset">Reset</button>
        </form>
</body>
</html>