<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT SUM(superficie) AS superficie_totale FROM etage")->fetch(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <td>Superficie Totale</td>
    </thead>
    <tbody>
        <?php
            foreach($req as $super){
                echo "<tr>";
                echo "<td>" . $super . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>