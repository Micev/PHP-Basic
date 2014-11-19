<?php
date_default_timezone_set('Europe/Sofia');
$dateOne = $_GET['dateOne'];
$dateTwo = $_GET['dateTwo'];


if($dateOne>$dateTwo){
    $temp=$dateTwo;
    $dateTwo=$dateOne;
    $dateOne=$temp;
}
$dayOfWeek=date('D',strtotime($dateOne));
$startDate = $dateOne;
while($dayOfWeek!="Thu" && strtotime($startDate)<=strtotime($dateTwo) ){
    $startDate=date('d-m-Y', strtotime('+1 day', strtotime($startDate)));
    $dayOfWeek=date("D",strtotime($startDate));
}
$thu=[];
do{
    $dayOfWeek=date('D',strtotime($startDate));
    if($dayOfWeek=="Thu"){
        $thu[]=$startDate;
    }
    $startDate=date('d-m-Y', strtotime('+1 day', strtotime($startDate)));
}while(strtotime($startDate)<=strtotime($dateTwo));
if(count($thu)>0){
    echo"<ol>";
    foreach($thu as $item){
        echo "<li>$item</li>";
    }
    echo "</ol>";
}
else{
    echo "<h2>No Thursdays</h2>";
}