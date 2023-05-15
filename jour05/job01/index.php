<?php
    session_start();

    echo '<form method="post">';
    echo '<input type="submit" name="Reset">';
    echo '</form>';

    if(!isset($_SESSION["nbvisites"])) {
        $_SESSION["nbvisites"] = 0;
    }

    function nbrReset() {
        $_SESSION["nbvisites"] = 0;
    }

    if(isset($_POST["Reset"])) {
        nbrReset();
    }

    $_SESSION["nbvisites"]++;

    echo $_SESSION["nbvisites"];
?>