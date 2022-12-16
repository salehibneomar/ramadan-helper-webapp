<?php

    date_default_timezone_set('Asia/Dhaka');
    
    $i = trim(date('d'));
    $m = trim(date('m'));

    if($i[0]=="0" && $i[1]!="0"){
        $i=str_replace("0","",$i);
    }

    if($m[0]=="0" && $m[1]!="0"){
        $m=str_replace("0","",$m);
    }

    $jsonFile='';

    if($m==5){
        $jsonFile='namajtime5.json';
    }
    else if($m==6){
        $jsonFile='namajtime6.json';
    }
    
    $data = file_get_contents($jsonFile);
    $obj = json_decode($data, true);

    $date = $obj['data'][($i-1)]['date']['readable'];

    $fajr = $obj['data'][($i-1)]['timings']['Fajr'];
    $fajr = trim(str_replace("(+06)","",$fajr));

    $dhuhr = $obj['data'][($i-1)]['timings']['Dhuhr'];
    $dhuhr = trim(str_replace("(+06)","",$dhuhr));

    $asr = $obj['data'][($i-1)]['timings']['Asr'];
    $asr = trim(str_replace("(+06)","",$asr));

    $maghrib = $obj['data'][($i-1)]['timings']['Maghrib'];
    $maghrib = trim(str_replace("(+06)","",$maghrib));
    
    $isha = $obj['data'][($i-1)]['timings']['Isha'];
    $isha = trim(str_replace("(+06)","",$isha));

    $arrHr = array(substr($fajr,0,2), substr($dhuhr,0,2), substr($asr,0,2), substr($maghrib,0,2), substr($isha,0,2));
    $arrMn = array(substr($fajr,3), substr($dhuhr,3), substr($asr,3), substr($maghrib,3), substr($isha,3));
    $ampm = array("","","","","");


    for($j=0; $j<5; $j++){
        if($arrHr[$j]<12){
            $ampm[$j]="AM";
        }
        else{
            $ampm[$j]="PM";
        }

        if($arrHr[$j]>12){
            $arrHr[$j]-=12;
        }
    }

?>