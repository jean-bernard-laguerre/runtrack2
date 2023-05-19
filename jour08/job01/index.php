<?php
    $bdd = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8", "root", "");

    $req = $bdd->query("SELECT * FROM etudiants")->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
    <thead>
        <td>Prenom</td>
        <td>Nom</td>
        <td>Naissance</td>
        <td>Sexe</td>
        <td>Email</td>
    </thead>
    <tbody>
        <?php
            foreach($req as $student){
                echo "<tr>";
                foreach($student as $col) {
                    echo "<td>" . $col . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>