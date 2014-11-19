<?php
$text = $_GET['text'];
$red = dechex(intval($_GET['red']));
$green = dechex(intval($_GET['green']));
$blue = dechex(intval($_GET['blue']));
$nth = intval($_GET['nth']);

//$text = "Hello";
//$red =dechex("255");
//$green = dechex("0");
//$blue = dechex("0");
//$nth = 2;

if(ctype_digit($red) && $red<10){
    $red = $red.$red;

}
if(ctype_digit($green) && $green<10){
    $green=$green.$green;

}
if(ctype_digit($blue) && $blue<10){
    $blue = $blue.$blue;
}
$color = $red.$green.$blue;
$counter = 1;
echo "<p>";
for ($i=0 ;$i<strlen($text); $i++) {
    if($counter%$nth == 0){
        echo "<span style=\"color: #$color\">".htmlspecialchars($text[$i])."</span>";
    }
    else{
        echo htmlspecialchars($text[$i]);
    }
    $counter++;
}
echo "</p>";
