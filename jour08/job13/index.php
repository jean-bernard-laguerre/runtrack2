<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT salles.nom, etage.nom AS n_etage FROM salles JOIN etage ON id_etage = etage.id")->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <thead>
        <td>Salle</td>
        <td>Etage</td>
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