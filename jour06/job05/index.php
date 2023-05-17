<?php
    function occurrences($str, $char) {
        $count = 0;

        for($i = 0; ; $i++){
            if(!isset($str[$i])){
                break;
            }
            if($char == $str[$i]){
                $count++;
            }
        }
        return $count;
    }

    echo occurrences("Bonjour", "o");
?>