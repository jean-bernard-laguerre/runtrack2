<?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";

    for($i = 0; ; $i+=2) {
        if(!isset($str[$i])) {
            break;
        }

        echo $str[$i];
    }
?>