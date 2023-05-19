<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT COUNT(*) FROM etudiants")->fetch(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <td>Nombre d'étudiants</td>
    </thead>
    <tbody>
        <?php
            foreach($req as $count){
                echo "<tr>";
                echo "<td>" . $count . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>