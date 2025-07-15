<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";


    for ($i = 0 ; $i < strlen($str) ; $i ++) {


        echo $str[($i+1)];

    }

    echo $str[$i % strlen($str)] . "<b>";
        

?>