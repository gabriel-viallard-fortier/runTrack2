<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
/* Afficher les nombres compris entre
 0 et 1337 sauf exceptions */
 
for ($i = 0 ; $i < 1338 ; $i ++) {
    switch ($i) {
        case 26:
            break;
        case 37:
            break;
        case 88:
            break;
        case 1111:
            break;
        default:
            echo $i . "<br />";
        }
    }
?>
</body>
</html>