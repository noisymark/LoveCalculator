<?php

function Calculate($ime){
    if((strlen($ime))%2!==0){
        //Ime nema paran broj znakova i treba nadolijepljivati nulu
        $ime .= ' ';
    }
    return $ime;
}

?>