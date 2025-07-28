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
                    <form action="index.php" method="get">

                        <fieldset>
                            <legend>Coordonnées</legend>
                            <input name="largeur" type="number" placeholder="largeur">
                            <input name="hauteur" type="number" placeholder="hauteur">

                        </fieldset>
        
                        <button type="submit">Ok</button>
                    </form>
                </div>

                <div class="box">
                    <?php
                    echo "<pre>";
                        for ($y = 1 ; $y <= $_GET['hauteur'] ; $y ++) {
                        
                            for ($x = 1 ; $x <= $_GET['hauteur'] - $y ; $x ++) {
                                echo " ";
                            }
                            for ($x = 1 ; $x <= $y * 2 - 1 ; $x ++) {
                                
                                if ($x == 1) {
                                    echo "/";
                                }
                                if ($x == 2 * $y - 1) {
                                    echo "\\";
                                }
                                else {
                                    echo "_";
                                }
                            }
                            echo "<br>";
                           
                        
                        }   
                        for ($y = 1 ; $y <= $_GET['hauteur'] ; $y++) {

                            for ($x = 1 ; $x <= $_GET['largeur'] ; $x++) {

                                if ($x == 1)  {
                                    echo "|";
                                }
                                elseif ($x == $_GET['largeur']) {
                                    echo "|<br>";
                                }
                                elseif ($y == $_GET['hauteur']) {
                                    echo "_";
                                }
                                else {
                                    echo " ";
                                }
                            }   

      
                        }
                        echo "</pre> Fonctionne avec Firefox et Opéra, pas avec Chrome.";

                    ?>
                </div>
    </body>
</html>