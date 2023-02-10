<?php

function cleanInput($input){
    $output = preg_replace("/[^a-zA-Z]/", "", $input);

    return $output;
}

function Counterr($ime,$imee){
    $slijepljeno='';
    $final=[];
    //Povezivanje oba imena zajedno i pretvaranje u velika slova
    $slijepljeno = (strtoupper($ime)) . (strtoupper($imee));

    //Brojanje koliko slova ima u oba imena
    $array=str_split($slijepljeno);
    for($i=0;$i<(strlen($slijepljeno));$i++){
        $final[]=substr_count($slijepljeno,$array[$i]);
    }

    // Vraćanje u string
    $final = implode('',$final);

    return $final;
}

function Zbroji($vrijednost){
        $rezultat=[];
        if($vrijednost<100){
            return $vrijednost;
        }
        if(strlen($vrijednost)%2===0){
            $j=1;
            //Paran broj, samo uzimaj prvu i zadnju i ne brini se oko srednje jer se moze uzeti tocna polovica za izvodenje
            $m = (int)((strlen($vrijednost))/2);
                for($j=1;$j<=$m;$j++){
                    $y = $vrijednost[$j-1];
                    $x = $vrijednost[strlen($vrijednost)-$j];
                    $rezultat[]= ($x+$y);
                 }
        } else{
            //Neparan broj, uzimaj prvu i zadnju dok ne dodes do srednje te nju prepisi
            $k=1;
            $m = (int)((strlen($vrijednost))/2);
            for($k=1;$k<=$m;$k++){
                $y = $vrijednost[$k-1];
                $x = $vrijednost[strlen($vrijednost)-$k];
                $rezultat[]= ($x+$y);
            }
                $rezultat[]= $vrijednost[$m];
        }
        $rezultat = implode('',$rezultat);
        return Zbroji($rezultat);
    }

?>