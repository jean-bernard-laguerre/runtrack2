<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT * FROM etudiants WHERE naissance >= DATE '1998-01-01' AND naissance <= DATE '2018-12-31'")->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <td>Prenom</td>
        <td>Nom</td>
        <td>Naissance</td>
    </thead>
    <tbody>
        <?php
            foreach($req as $student){
                echo "<tr>";
                foreach($student as $col){
                    echo "<td>" . $col . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>