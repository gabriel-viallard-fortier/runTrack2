<?php

function leetSpeak($str) {
    $tableau = [
        'a' => '4',
        'A' => '4',
        'b' => '8',
        'B' => '8',
        'e' => '3',
        'E' => '3',
        'g' => '6',
        'G' => '6',
        'l' => '1',
        'L' => '1',
        's' => '5',
        'S' => '5',
        't' => '7',
        'T' => '7',
    ];

    for ($i = 0 ; isset($str[$i]) ; $i ++) {

        foreach ($tableau as $key => $new) {
            if ($str[$i] == $key) {
                $str[$i] = $new;
            }
        }
    }
    return $str;
}


echo leetSpeak("Bonjour je m'appele Gabriel");

?>