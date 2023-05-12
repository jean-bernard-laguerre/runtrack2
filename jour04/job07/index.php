<?php
    function maison($hauteur, $largeur) {
        
        for($i = 0; $i <= $hauteur; $i++){         
            for($j = 1; $j <= $largeur; $j++){

                if($j < $largeur && $i < $hauteur/2){

                    switch (true) {
                        case ($j < ($largeur-$i)):
                            echo "&nbsp";
                            break;
                        case ($j == $largeur-$i):
                            echo "/";
                            break;
                        case ($j == $largeur):
                            echo "\\";
                            break;
                        default:
                            echo "_";
                    }
                } else {
                        if( ($j == 1 || $j == $largeur) && ($i >= $hauteur/2)) {
                        echo "&nbsp|";
                    }
                    elseif($i < ($hauteur/2) || $i == $hauteur){
                        echo "_";
                    }
                    else {
                        echo "&nbsp&nbsp";
                    }
                }
            }
            if ($i < $hauteur/2){
                echo "\\";
            }
            echo "</br>";
        }
    }
    maison($_POST["largeur"], $_POST["hauteur"]);
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
        <input name="largeur" type="text">
        <input name="hauteur" type="text">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>