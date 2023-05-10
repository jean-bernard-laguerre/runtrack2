<?php
    for($i = 1; $i <= 100; $i++) {
        switch (true) {
            case ($i%3 == 0 && $i%5 == 0):
                echo "FizzBuzz";
                break;
            case ($i%3 == 0):
                echo "Fizz";
                break;
            case ($i%5 == 0):
                echo "Buzz";
                break;
            default:
                echo $i;
        }
        echo "<br/>";
    }
?>