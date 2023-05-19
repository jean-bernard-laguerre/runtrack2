<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT SUM(capacite) AS capacite_totale FROM salles")->fetch(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <td>Capacité Totale</td>
    </thead>
    <tbody>
        <?php
            foreach($req as $cap){
                echo "<tr>";
                echo "<td>" . $cap . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>