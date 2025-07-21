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
                        <legend>Coordonnées</legend>
                        <input name="nombre" type="number" placeholder="nombre">
                    </fieldset>
      
                    <button type="submit">Ok</button>
                </form>
            </div>
            <div class="box">
                    <?php
                    if ($_POST['nombre'] % 2 == 0) {
                        echo "nombre pair !<br>";
                    }
                    else {
                        echo "nombre impair ! <br>";
                    }
                ?>
            </div>
        </body>

</html>