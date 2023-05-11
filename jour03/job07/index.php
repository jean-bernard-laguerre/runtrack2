<?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";

    for($i = 0; ; $i++){
        if(!isset($str[$i+1])){
            break;
        }

        $tmp = $str[$i];
        $str[$i] = $str[$i+1];
        $str[$i+1] = $tmp;
    }

    echo $str;
?>