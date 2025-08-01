<?php session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST["reset"])) {
    $_SESSION["prenom"] = [];
}
if (isset($_POST["submit"]) && $_POST["prenom"] !== "") {

    $_SESSION["prenom"][] = htmlspecialchars($_POST["prenom"]);
}
if (!isset($_SESSION["prenom"])) {

    $_SESSION["prenom"] = [];
}
foreach ($_SESSION["prenom"] as $p) {

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
        <input type="text" name="prenom" placeholder="Enter your name">
        <input type="submit" name="submit" value="Submit">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>