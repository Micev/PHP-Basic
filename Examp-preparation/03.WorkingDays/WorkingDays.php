<?php
date_default_timezone_set("Europe/Sofia");
$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];
$holidays = $_GET['holidays'];
$holidays = preg_split("/\s+/",$holidays,-1,PREG_SPLIT_NO_EMPTY);
$holidaysTime = [];

foreach($holidays as $hd){
    $holidaysTime[] = strtotime($hd);
}

$currentDate = strtotime($dateOne);
$lastDate = strtotime($dateTwo);
$workingDay = [];
while($currentDate <= $lastDate){
    if(isWorkingDay($currentDate,$holidaysTime)){
        $workingDay[]=$currentDate;
    }
    $currentDate = strtotime("+1 day",$currentDate);
}
if(count($workingDay)>0){
echo "<ol>";
    foreach($workingDay as $item){
        echo "<li>".date("d-m-Y",$item)."</li>";
    }
echo "</ol>";
}
else{
    echo"<h2>No workdays</h2>";
}

function isWorkingDay($currentDate,$holidaysTime){
    $dayOfWeek = date("N",$currentDate);
    if(in_array($currentDate,$holidaysTime) || $dayOfWeek > 5){
        return false;
    }
    else{
        return true;
    }
}