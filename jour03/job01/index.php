<?php 
// Déclaration du tableau

$tableau = [
    200,
    204, 
    173, 
    98, 
    171,
    404, 
    459,
];



for ($i = 0; isset($tableau[$i]); $i ++) {

    if ($tableau[$i] % 2 == 0) {
        echo $tableau[$i] . " est un nombre paire<br>";
    }

    else {
        echo $tableau[$i] . " est un nombre impaire<br>";
    }


}
?>