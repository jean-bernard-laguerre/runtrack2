<?php
    $i = 0; 
    foreach($_GET as $formItem) {
        $i++;
    }
    echo "Le nombre d'arguments GET envoyé est :", $i;
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