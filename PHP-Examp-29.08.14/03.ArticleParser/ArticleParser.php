<?php
//$text = $_GET["text"];
$text = "The dangers of smoking%Dr. Elliot Hawking;13-06-2014-Recent";
$topic='';
$author='';
$date='';
$summary='';
$position=0;
for ($i=1 ;$i<strlen($text); $i++) {
    if($text[$i]=="%"  && ctype_alpha($text[$i-1])){
        $position=$i+1;
        $topic=substr($text,0,$i);
    }
    if($text[$i]==";"){
        $author=substr($text,$position,$i);
    }
}
echo "$topic  $author";