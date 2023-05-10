<?php
    function testnum($num, $list) {
        foreach($list as $element) {
            // Return false if an element of the list is equal to $num
            if ($num == $element){
                return False;
            }
        }
        return True;
    }

    for($i = 0; $i <= 1337; $i++){
        if(testnum($i, [26, 37, 88, 1111, 3233])){
            echo $i, "<br/>";
        }
    }
?>