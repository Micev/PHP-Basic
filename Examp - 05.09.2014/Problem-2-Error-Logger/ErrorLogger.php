<?php
$errorLog = $_GET["errorLog"];
$errorPattern = "/java.*\.(.*):/";
$errorTypePattern = "/(\w+.\w+.)(\d+)/";
$wordPattern = "/(\w+\.(\w+)\(\w+\.\w+:\d+)/";
preg_match_all($errorPattern,$errorLog,$mainErrors);
preg_match_all($errorTypePattern,$errorLog,$typeErrors);
preg_match_all($wordPattern,$errorLog,$word);
//var_dump($mainErrors);
echo "<ul>";
$counter =0;
for ($i=0 ;$i<count($mainErrors[1]); $i++) {
    echo"<li>line <strong>".$typeErrors[2][$counter]."</strong> - <strong>";
    echo $mainErrors[1][$i];
    echo "</strong> in <em>";
    echo $typeErrors[1][0].$word[2][$counter];
    echo "</em></li>";
    $counter+=3;
}
echo "</ul>";

