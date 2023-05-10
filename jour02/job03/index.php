<?php
    for($i = 0; $i <= 100; $i++){
        switch (true) {
            case $i <= 20:
                echo "<i>", $i, "</i>";
                break;

            case 25 <= $i && $i <= 50:
                if ($i == 42){
                    echo "La Plateforme";
                }else{
                    echo "<u>", $i, "</u>";
                }
                break;

            default:
                echo $i;
        }
        echo "<br/>";
    }
?>