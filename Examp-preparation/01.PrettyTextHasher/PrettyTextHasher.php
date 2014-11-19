<?php
$text = $_GET['text'];
$hashValue = $_GET['hashValue'];
$fontSize = $_GET['fontSize'];
$fontStyle = $_GET['fontStyle'];

$textMod = textModification($text,$hashValue);
$styleResult='';
if($fontStyle=="bold"){
    $styleResult="font-weight:bold;";
}
else{
    $styleResult="font-style:$fontStyle;";
}
function textModification($text,$hashValue){
    $result='';
    for ($i=0 ;$i<strlen($text); $i++) {
        $char = ord($text[$i]);
        if($i%2==0){
            $result.= chr($char+$hashValue);
        }
        else{
            $result.= chr($char-$hashValue);
        }
    }
    return $result;
}
echo "<p style=\"font-size:$fontSize;$styleResult\">$textMod</p>";
?>