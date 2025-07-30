
<?php
session_start();

    if (isset($_POST["reset"])) {
        $_SESSION["nbvisites"] = 0;
    }


    if (isset($_SESSION["nbvisites"])) {
        $_SESSION["nbvisites"]++;
    } else {
        $_SESSION["nbvisites"] = 1;
    }

    echo $_SESSION["nbvisites"];



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
            <input type="submit" name="reset" value="Reset">
        </form>
</body>
</html>