<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

            /* On veut afficher les nombres compris entre
            0 et 1337 sauf 42 en gras et souligé + sauts de lignes */

for ($i = 1;$i < 1337;$i ++) {
    if ($i == 42):
        echo "<b><u>" . $i . "</u></b><br />";
        $i = 43;
    endif;
    echo $i . "<br />";
}

?>

</html>