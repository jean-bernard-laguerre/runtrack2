<?php
    session_start();

    if(!isset($_SESSION["prenoms"])) {
        $_SESSION["prenoms"] = [];
    }

    function listReset() {
        $_SESSION["prenoms"] = [];
    }

    if(isset($_POST["Reset"])) {
        listReset();
    }

    if(isset($_POST["prenom"])) {
        array_push($_SESSION["prenoms"], $_POST["prenom"]);
    }

    foreach($_SESSION["prenoms"] as $prenom) {
        echo $prenom, "</br>";
    }
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
    <form action="" method="post">
        <input type="text" name="prenom">
        <button type="submit">Envoyer</button>
    </form>
    <form action="" method="post">
        <input type="submit" name="Reset">
    </form>
</body>
</html>