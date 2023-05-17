<?php
    function leetSpeak($str){

        $result = "";

        for($i = 0; ; $i++){
            if(!isset($str[$i])){
                break;
            }
            switch($str[$i]){
                case "A":
                    $result = $result . "4";
                    break;
                case "B":
                    $result = $result . "8";
                    break;
                case "E":
                    $result = $result . "3";
                    break;
                case "G":
                    $result = $result . "6";
                    break;
                case "L":
                    $result = $result . "1";
                    break;
                case "S":
                    $result = $result . "5";
                    break;
                case "T":
                    $result = $result . "7";
                    break;
                default:
                    $result = $result . $str[$i];
                    break;
            }
        }
        return $result;
    }

    echo leetSpeak("TEST");
?>