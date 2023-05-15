<?php
    if(isset($_POST["connexion"])) {
        setcookie("prenom", $_POST['prenom'], 600);
    }

    if(isset($_POST["deco"])) {
        setcookie("prenom", $_POST["prenom"], -3600);
    }

    if(!isset($_COOKIE["prenom"])) {
        echo '<form method="post">';
        echo '<input type="text" name="prenom">';
        echo '<input type="submit" name="connexion">';
        echo '</form>';
    } else {
        echo "Bonjour" . $_COOKIE["prenom"];
        echo '<form method="post">';
        echo '<input type="submit" name="deco">';
        echo '</form>';
    }
?>
