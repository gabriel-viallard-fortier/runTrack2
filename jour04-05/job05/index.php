<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand New Fan Site</title>
    <link href="brandnew.css" rel="stylesheet">
</head>
<body>


            <div class="box">
                <form action="index.php" method="post">
                    <fieldset>
                        <legend>Civilité</legend>
                            <input name="username" type="text">
                            <input type="password" name="password">
                    </fieldset>
                    <input type="submit">
</form>
</div>
            <div class="box">
<?php
if ($_POST['username'] == "John" && $_POST['password'] == "Rambo")
{
    echo "cest pas ma guerre";

}

else {
    echo "votre pire cauchemard";
}
?>
</body>
</html>

