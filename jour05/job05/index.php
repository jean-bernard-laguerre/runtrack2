<?php
    session_start();

    $i = 0;

    if(!isset($_SESSION["grille"])) {
        $_SESSION["grille"] = [[0,0,0],[0,0,0],[0,0,0]];
    }

    if(!isset($_COOKIE["joueur"])) {
        setcookie("joueur", 1, time()+ 600);
    }

    function victoire($case) {

        $g = $_SESSION["grille"];
        $l = floor($case/3);
        $c = $case%3;

        $ligne = ($g[$l][0] == $g[$l][1] && $g[$l][1] == $g[$l][2]);
        $colonne = ($g[0][$c] == $g[1][$c] && $g[1][$c] == $g[2][$c]);
        $diagonale1 = ($g[0][0] == $g[1][1] && $g[1][1] == $g[2][2] and $g[1][1] != 0);
        $diagonale2 = ($g[0][2] == $g[1][1] && $g[1][1] == $g[2][0] and $g[1][1] != 0);

        if ($ligne or $colonne or $diagonale1 or $diagonale2) {
            return true;
        }
        return false;
    }

    function nul() {
        foreach($_SESSION["grille"] as $ligne){
            foreach($ligne as $case) {
                if ($case == 0) {
                    return false;
                }
            }
        } return true;
    }

    if(isset($_POST["case"])) {
        
        $ligne = floor($_POST["case"]/3);
        $colonne = $_POST["case"]%3;

        if($_SESSION["grille"][$ligne][$colonne] == 0) {
            $_SESSION["grille"][$ligne][$colonne] = $_COOKIE["joueur"];
        }

        if($_COOKIE["joueur"] == 1) {
            setcookie("joueur", 2, time()+ 600);
        } else {
            setcookie("joueur", 1, time()+ 600);
        }

        if (victoire($_POST["case"])) {
            echo "Victoire";
        } elseif (nul()) {
            echo "Match Nul";
        }
    }
    
    echo "<table>";
    foreach($_SESSION["grille"] as $ligne){
        echo "<tr>";
        foreach($ligne as $case) {

            echo '<td>';
            switch ($case) {
                case 1:
                    echo '<input type="submit" name="'. $i.'" value="x">';
                    break;
                case 2:
                    echo '<input type="submit" name="'. $i.'" value="o">';
                    break;
                default:
                    echo '<form method="post" style="margin:0">';
                    echo '<button type="submit" name="case" value="'. $i.'">-</button>';
                    echo '</form>';
                    break;
            }
            echo '</td>';
            $i++;
        }
        echo "</tr>";
    }
    echo "</table>";

    function grilleReset() {
        $_SESSION["grille"] = [[0,0,0],[0,0,0],[0,0,0]];
    }

    if(isset($_POST["Reset"])) {
        grilleReset();
    }

    echo '<form method="post">';
    echo '<input type="submit" name="Reset" value="Reset">';
    echo '</form>';
?>