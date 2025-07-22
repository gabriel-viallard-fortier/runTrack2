<?php

    function bonjour($jour) {
        if ($jour == true):
            echo "Bonjour <br>";
        elseif ($jour == false):
            echo "Bonsoir <br>";
        else:
            return 0;
        endif;
    }

    bonjour(true);
    bonjour(false);

?>