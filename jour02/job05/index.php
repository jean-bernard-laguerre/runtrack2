<?php

    function testPrime($num){

        for($j = 2; $j < $num; $j++){
            // Return false if a multiple of $num is found
            if ($num%$j == 0){
                return false;
            }
        }
        return true;
    }

    for($i = 1; $i <= 1000; $i++){
        if(testPrime($i)){
            echo $i, "<br/>";
        }
    }
?>