<?php
/* On teste une valeur de 0 à 100 pour déterminer les exceptions 
et on l'affiche avec des retours à la ligne*/


for ($i = 0; $i < 101;$i ++)
{
    switch($i)                     
        {
        case $i <= 20:
            echo "<i>" . $i . "</i><br />";
            break;
        case ($i >= 25 && $i <= 50):
            if ($i == 42) echo "La Plateforme_<br>";
            else echo "<u>" . $i . "</u><br />";
            break;
        default:
            echo $i . "<br>";
            break;
        }
}

?>