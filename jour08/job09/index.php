<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT * FROM salles ORDER BY capacite DESC")->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <td>Nom</td>
        <td>Etage</td>
        <td>Capacité</td>
    </thead>
    <tbody>
        <?php
            foreach($req as $salle){
                echo "<tr>";
                foreach($salle as $col){
                    echo "<td>" . $col . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>