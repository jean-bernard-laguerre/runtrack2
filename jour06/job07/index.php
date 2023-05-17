<?php

    function split($str){

        $result = [];
        $mot = "";

        for($i = 0; ; $i++){

            if(!isset($str[$i])){
                break;
            }

            if($str[$i] == " "){
                $result[] = $mot;
                $mot = "";
            } else {
                $mot  = $mot . $str[$i];
            }
        }
        $result[] = $mot;
        return $result;
    }

    function gras($str){
        foreach($str as $mot){
            if(ctype_upper($mot[0])){

                echo "<b>";
                for($i = 0; ; $i++){
                    if(!isset($mot[$i])){
                        break;
                    }
                    echo $mot[$i];
                }
                echo "</b>";
            } else {
                echo $mot;
            }
            echo "&nbsp";
        }
    }

    function cesar($str){

        foreach($str as $mot){
            for($i = 0; ; $i++){
                if(!isset($mot[$i])){
                    break;
                }  
            }
            echo "&nbsp";
        }    
    }

    function plateforme($str){

        foreach($str as $mot){
            if($mot[-2] == "m" && $mot[-1] == "e"){
                echo $mot . "_";
            } else {
                echo $mot;
            }
            echo "&nbsp";
        }
    }

    if(isset($_POST["str"])){

        $str = split($_POST["str"]);

        switch ($_POST["fonction"]){

            case "gras":
                gras($str);
                break;

            case "cesar":
                cesar($str);
                break;

            case "plateforme":
                plateforme($str);
                break;
        }
    }
?>

<form method="post">
    <input type="text" name="str" id="">
    <select name="fonction" id="">
        <option value="gras">Gras</option>
        <option value="cesar">Cesar</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <button type="submit">Transformer</button>
</form>