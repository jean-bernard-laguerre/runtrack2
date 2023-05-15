<?php
    echo '<form method="post">';
    echo '<input type="submit" name="Reset">';
    echo '</form>';

    if(!isset($_COOKIE["nbvisites"])) {
        setcookie("nbvisites", 0, time() + 60);
    }

    function nbrReset() {
        setcookie("nbvisites", 0, time() + 60);
    }

    if(isset($_POST["Reset"])) {
        nbrReset();
    }

    setcookie("nbvisites", $_COOKIE["nbvisites"]+1, time() + 60);

    echo $_COOKIE["nbvisites"];
?>