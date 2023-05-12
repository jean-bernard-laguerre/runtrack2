<?php
    echo "<table>";
    echo "<tr><td>Argument</td>";
    echo "<td>Valeur</td></tr>";
    foreach($_GET as $formkey => $formValue) {
        echo "<tr><td>" . $formkey . "</td>";
        echo "<td>" . $formValue . "</td></tr>";
    }
    echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input name="nom" type="text">
        <input name="prenom" type="text">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>