<?php

for ($i = 0; $i < 101;$i ++)
{
    switch($i)
        {
        case $i <= 20:
            echo "<i>" . $i . "</i><br />";
            break;
        case ($i >= 25 && $i <= 50):
            if ($i == 42) echo "La Plateforme_";
            else echo "<u>" . $i . "</u>";
            break;
 
        default:
            echo $i;
            break;
        }
}

?>