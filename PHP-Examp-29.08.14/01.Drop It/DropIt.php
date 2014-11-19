<?php
//$text = $_GET['text'];
//$minFontSize = $_GET['minFontSize'];
//$maxFontSize = $_GET['maxFontSize'];
//$step = $_GET['step'];

$text = "Hi PHP5";
$minFontSize = "4";
$maxFontSize = "8";
$step = "3";
$currentSize=$minFontSize;
for ($i=0 ;$i<strlen($text); $i++) {
    if(ctype_alpha($text[$i])){
        if(ord($text[$i])%2==0){
            $text[$i]=htmlspecialchars($text[$i]);
            echo "<span style='font-size:$currentSize;text-decoration:line-through;'>$text[$i]</span>";
            if($currentSize>$maxFontSize || $currentSize!=$minFontSize){
                $currentSize-=$step;
            }else{
                $currentSize+=$step;
            }
        }
        else{
            $text[$i]=htmlspecialchars($text[$i]);
            echo "<span style='font-size:$currentSize;'>$text[$i]</span>";
                if($currentSize>$maxFontSize && $currentSize!=$minFontSize){
                    $currentSize-=$step;
                }else{
                    $currentSize+=$step;
                }
            }
    }
    else if(ord($text[$i])%2==0){
        $text[$i]=htmlspecialchars($text[$i]);
        echo "<span style='font-size:$currentSize;text-decoration:line-through;'>$text[$i]</span>";
        }
        else{
            $text[$i]=htmlspecialchars($text[$i]);
            echo "<span style='font-size:$currentSize;'>$text[$i]</span>";
        }

}
