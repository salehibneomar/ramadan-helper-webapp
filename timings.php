<?php

    date_default_timezone_set('Asia/Dhaka');
    $currDate = trim(date('d M Y'));
    $jsonFile = 'ramadanfulltimetable.json';
    $data = file_get_contents($jsonFile);
    $obj = json_decode($data, true);

    $sehrTime="";
    $iftarTime="";
    $serial="";

    $hr = date('H');
    
    if($hr[0]=="0" && $hr[1]!="0"){
        $hr = trim(str_replace("0","", $hr));
    }
	else if($hr[0]=="0" && $hr[1]=="0"){
		$hr = "0";
	}

    if($hr>18 && $hr<=23){
        $temp = substr($currDate, 0, 2);
        if($temp[0]=="0"){
            $temp = str_replace("0", "", $temp);
            $temp += 1;
            if($temp<10){
                $temp = "0".$temp.date(' M Y');
                $currDate = trim($temp);
            }
            else{
                $temp = $temp.date(' M Y');
                $currDate = trim($temp);
            }
        }
        else{
            $totalDays=date('t', mktime(0, 0, 0, date('m'), 1, date('Y'))); 
            $temp += 1;
            if($temp>$totalDays){
                $m = trim(date('m'));       
                if($m[0]=="0" && $m[1]!="0"){
                    $m=str_replace("0","",$m);
                }

                $temp="01 ".date("M", mktime(0, 0, 0, ($m+1), 10)).date(' Y');
                $currDate = trim($temp);

            }
            else{
                $temp = $temp.date(' M Y');
                $currDate = trim($temp);
            }
        }
    }

    for($i=0; $i<count($obj); $i++){
        $date = trim($obj[$i]['date']);
        if($currDate==$date){
            $serial=$obj[$i]['serial'];
            $sehrTime=$obj[$i]['sehrEnds'];
            $iftarTime=$obj[$i]['iftar'];
        }
    }

?>