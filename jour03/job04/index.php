<?php
    $str = "Dans l'espace, personne ne vous entend crier";

    for($i = 0; ; $i++) {
        if(!isset($str[$i])){
            echo $i, " Charactères";
            break;
        }
    }
?>