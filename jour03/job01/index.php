<?php 
    
$tableau = [
    200,
    204, 
    173, 
    98, 
    171,
    404, 
    459,
];

for ($i = 0; $i < count($tableau); $i ++) {

    if (gettype($tableau[$i] / 2) == 'integer')
    {
        echo $i . " est un nombre paire<br>";
    }
    else {
        echo $i . " est un nombre impaire<br>";
    }


}
?>