<?php
$list = $_GET["list"];
$maxSize = $_GET['maxSize'];
$lists = preg_split("/\r\n|\n|\r/",$list,-1,PREG_SPLIT_NO_EMPTY);
echo "<ul>";
for ($i=0 ;$i<count($lists); $i++) {
    $lists[$i]=trim($lists[$i]);
    if(strlen($lists[$i])>$maxSize){
        $lists[$i]=substr($lists[$i],0,$maxSize);
        echo "<li>".htmlspecialchars($lists[$i])."...</li>";
    }
    else{
        echo "<li>".htmlspecialchars($lists[$i])."</li>";
    }
}
echo "</ul>";

