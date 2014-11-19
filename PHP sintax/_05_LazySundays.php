<?php
$year = date("Y");
$month = date('F');
$monthDays = date('t');
for ($i=1 ;$i<=$monthDays; $i++) {
    if(date('l',strtotime("$i $month $year"))=="Sunday"){
        echo date("jS F, Y",strtotime("$i $month $year"))."\n";
    }
}
?>