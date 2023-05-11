<?php
    $nombres = [200, 204, 173, 98, 171, 404, 459];

    foreach($nombres as $num) {
        if ($num%2 == 0) {
            echo $num, " est paire";
        }
        else {
            echo $num, " est impair";
        }
        echo "<br/>";
    }
?>