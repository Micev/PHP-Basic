<?php
$recipient = htmlspecialchars($_GET["recipient"]);
$subject = htmlspecialchars($_GET['subject']);
$body = htmlspecialchars($_GET['body']);

//$recipient = htmlspecialchars("info@softuni.bg");
//$subject = htmlspecialchars("SoftUniConf <2014>");
//$body = htmlspecialchars("SoftUniConf <2014> is coming.<a href=\"https://softuni.bg/SoftUniConf\">Learn more</a>");
$emalMessage= "<p class='recipient'>$recipient</p><p class='subject'>$subject</p><p class='message'>$body</p>";
$key = $_GET['key'];
//$key = "s3cr3t!";
$msgLength = strlen($emalMessage);
$result = "|";
for ($i=0 ;$i<$msgLength; $i++) {
    $keyLength = strlen($key);
    $position = $i;
    if($position>=$keyLength){
        $position = $i%$keyLength;
    }
    $char =dechex( ord($emalMessage[$i])*ord($key[$position]));
    $result.=$char."|";
}
echo $result;