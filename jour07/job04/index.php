<?php

    function calcule($a, $operation, $b) {
        
        // On switch l'opération demandée pour calculer A operation B
        switch($operation) {
            case "*":
                return $a * $b;
                break;
            case "/":
                return $a / $b;
                break;
            case "%":
                return $a % $b;
                break;
            case "+":
                return $a + $b;
                break;
            case "-":
                return $a - $b;
                break;
        }
    }

    echo calcule(2, "+", 5);

?>