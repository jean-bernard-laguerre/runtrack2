<?php
    function calcule($num1, $op, $num2){
        switch ($op) {
            case "+":
                return $num1 + $num2;
            case "-":
                return $num1 - $num2;
            case "*":
                return $num1 * $num2;
            case "/":
                return $num1 / $num2;
            default:
                echo "Operation invalide";
                return 0;
        }
    }

    echo calcule(8, "+", 4) . "</br>";
    echo calcule(8, "-", 4) . "</br>";
    echo calcule(8, "*", 4) . "</br>";
    echo calcule(8, "/", 4) . "</br>";
?>