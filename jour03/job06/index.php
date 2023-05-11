<?php
    $str = "Les choses que l'on possède finissent par nous posséder.";

    function length($str) {
        for($i = 0; ; $i++) {
            if(!isset($str[$i])){
                return $i;
            }
        }
    }

    $strlen = length($str);

    for($j = $strlen-1; $j >= 0; $j--) {
        echo $str[$j];
    }
?>