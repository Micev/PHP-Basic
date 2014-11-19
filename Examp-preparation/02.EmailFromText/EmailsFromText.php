<?php
$text = $_GET['text'];
$blacklist = $_GET['blacklist'];
$blacklist = preg_split("/[\s+\*]/",$blacklist,-1,PREG_SPLIT_NO_EMPTY);

$pattern = "/[\w\+\-\_]+@[\w\-]+.[\w\-\.]+/";
preg_match_all($pattern,$text,$matches);

foreach($matches[0] as $match){
    $replacement = getReplace($match, $blacklist);
    $result = str_replace($match,$replacement,$text);
    $text=$result;
}

function getReplace($match, $bl){
    preg_match("/\..*/",$match,$domain);
    if(in_array($match,$bl) || in_array($domain[0],$bl)){
        return str_repeat("*",strlen($match));
    }
    else{
        return "<a href=\"mailto:$match\">$match</a>";
    }
}
echo "<p>$text</p>";