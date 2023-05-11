<?php

    function testlist($letter, $list) {
        foreach($list as $element) {

            if (strtolower($letter) == $element){
                return true;
            }
        }
        return false;
    }

    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
    $dic = ["Consonnes" => 0, "Voyelles" => 0];
    $vowels = ["a", "e", "i", "o", "u", "y"];

    for($i = 0; ; $i++){
        if(!isset($str[$i])){
            break;
        }

        switch (true) {
            case testlist($str[$i], [" ", "'"]):
                break;

            case !testlist($str[$i], $vowels):
                $dic["Consonnes"]++;
                break;

            default:
                $dic["Voyelles"]++;
                break;
        }
    }
    echo "<table>";
    echo "<tr>";
    echo "<td>Voyelles </td>";
    echo "<td>Consonnes <td/>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>",$dic["Voyelles"] ,"</td>";
    echo "<td>",$dic["Consonnes"] ,"</td>";
    echo "</tr>";
    echo "</table>";
?>
