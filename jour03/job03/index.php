<?php

    function testlist($letter, $list) {
        foreach($list as $element) {
            // Return false if an element of the list is equal to $letter
            if ($letter == $element){
                return true;
            }
        }
        return false;
    }

    $vowels = ["a", "e", "i", "o", "u", "y"];
    $str = "I'm sorry Dave I'm afraid I can't do that";

    for($i = 0; ; $i++) {
        if(!isset($str[$i])) {
            break;
        }
        if (testlist(strtolower($str[$i]), $vowels)) {
            echo $str[$i];
        }
    }
?>