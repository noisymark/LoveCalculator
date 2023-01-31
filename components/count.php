<?php

function Counter($ime,$imee){
    $final = $ime . $imee;
    $array = str_split($ime);
    for($i=0;$i<count($ime);$i++){
        if($array[$i]==' '){
            continue;
        } else{
            $result[]=substr_count($final,$array[$i]);
        }
    }
}

?>