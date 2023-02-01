<?php

function Counterr($ime,$imee){
    $slijepljeno = $ime . $imee;
    $sum='';
    $i=1;
    $array = str_split($slijepljeno);
    for($i=0;$i<(strlen($slijepljeno));$i++){
        $final[]= substr_count($slijepljeno,$array[$i]);
    }
    array_unshift($final,"");
    unset($final[0]);

    for($i=1;$i<=((int)(count($final))/2);$i++){
        $zbrojdva = ($final[$i]) + ($final[-$i]);
        echo $final[$i] . $final[-$i] . '<br>';
        $sum = $sum . $zbrojdva;
    }

    echo '<br>' . $sum;

    return $final;
}

?>