<?php
$currentDate = $_GET['currentDate'];
$messages = $_GET['messages'];

$messages=preg_split("/\n/",$messages,-1,PREG_SPLIT_NO_EMPTY);
for ($i=0 ;$i<count($messages); $i++) {
    $messages[$i]=preg_split("/[\/\n ]+ /",$messages[$i]);
}
for ($i=0 ;$i<count($messages); $i++) {
    $messages[$i][1]=strtotime($messages[$i][1]);
}
var_dump($messages);
//$flag=true;
//$temp=0;
//$temp1=0;
//while($flag){
//    $flag=false;
//    for ($j=0 ;$j<count($messages)-1; $j++) {
//        if($messages[$j][1]>$messages[$j+1][1]){
//
//            $temp1= $messages[$j];
//            $messages[$j][0] = $messages[$j+1][0];
//            $messages[$j+1][0]=$temp1;
//            $flag=true;
//
//            $temp= $messages[$j][1];
//            $messages[$j][1] = $messages[$j+1][1];
//            $messages[$j+1][1]=$temp;
//            $flag=true;
//        }
//
//    }
//
//}
//$time=$messages[0][1];
//for ($k=0 ;$k<count($messages); $k++) {
//    $time-=$messages[$k][1];
//    echo "<div>$messages[$k][$k]</div>";
//}




//var_dump($messages);
//var_dump($time);


