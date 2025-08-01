<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire changement style</title>    
    <?php

    //on switch le <select> et on affiche le style selectionné
    
    switch ($_GET['style']) {
        case "Style 1":?>
            <link rel="stylesheet" href="style1.css">
            <?php
            break;
        case "Style 2":?>
            <link rel="stylesheet" href="style2.css">
            <?php
            break;
        case "Style 3":?>
            <link rel="stylesheet" href="style3.css">
            <?php
            break;
    }
    ?>

</head>

<body>
    <div class="box">
        <form action="index.php" method="get">
            <fieldset>
                <legend>Style</legend>
                    <select name="style" size="1">
                        <option value="Style 1">Style 1</option>
                        <option value="Style 2">Style 2</option>
                        <option value="Style 3">Style 3</option>
                    </select>
            </fieldset>
            <button type="submit">Ok</button>
        </form>
    </div>



</body>
</html>