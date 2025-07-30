<?php
if (isset($_POST["reset"])) {
    setcookie("nbvisites", "");
    $nbvisites = 0;
}
else {

    if (!isset($_COOKIE["nbvisites"])) {
        $nbvisites = 1;
        setcookie("nbvisites", $nbvisites);
        
    }
    else {
        $nbvisites = $_COOKIE["nbvisites"] + 1;
    }
    
}

setcookie("nbvisites", $nbvisites);
echo "Nombre de visites: " . $nbvisites;
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
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>