<?php
//$text = $_GET['text'];
//$keyString = $_GET['key'];
$text = "a-.885O,a745#\"F5Sofa7#\"FFF5a
1#\"D5ia, a000#\"FFF5a88887#\"F532 a123457#\"F5a7   #\"FGDGSDG
5G.S.a#\"5 ma-5.55gghja-.885y8
hgja#\"F5Rakoa#\"F5a5#\"F5vsa9#\"F5ghhjkuu867885a7#\"FYIYUHUI5ki  a7#\"FUIO5 a9997#\"F5Stra#\"5gia-5.558dft.8.8.a60-6.05hu-h-0yuua-.885rla-5.55yuti-..uioa-.885!a-5.55
";
$keyString = "a7#\"F5";
$key = array();

$key[0] = $keyString[0];

if(!ctype_alpha($keyString[0]) && !ctype_digit($keyString[0])){
    $key[0] = '\\'.$key[0];
}

for ($i = 1; $i < strlen($keyString) - 1; $i++) {

    if (ctype_digit($keyString[$i])) {
        $key[$i] = '\d*';
    } elseif (ctype_upper($keyString[$i])) {
        $key[$i] = '[A-Z]*';
    } elseif (ctype_lower($keyString[$i])) {
        $key[$i] = '[a-z]*';
    } else {
        $key[$i] = '\\' . $keyString[$i];
    }
}

$key[strlen($keyString) - 1] = $keyString[strlen($keyString) - 1];

if(!ctype_alpha($keyString[strlen($keyString) - 1]) && !ctype_digit($keyString[strlen($keyString) - 1])){
    $key[strlen($keyString) - 1]  = '\\'.$key[strlen($keyString) - 1];
}

$key = implode('', $key);

$pattern = '/' . $key . '(.{2,6})' . $key . '/';

preg_match_all($pattern, $text, $matches);

$address = implode('', $matches[1]);

echo $address;