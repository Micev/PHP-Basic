<?php
$text = $_GET['text'];

$text = "Pesho Meshev;2-9-2014;    Sometimes I post very deep messages on facebook that have nothing to do with who I am or what I do, but I like people to think that I'm very, very deep.    ;160;Confession of the century/hahaha this is so NOT funny";
$parts = preg_split("/[;\/]+/",$text,-1,PREG_SPLIT_NO_EMPTY);

for ($i=0 ;$i<count($parts); $i++) {
    $parts[$i] = trim($parts[$i]);
}
var_dump($parts);

echo "<article";