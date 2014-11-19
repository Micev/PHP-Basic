<?php
$text = $_GET['text'];
//$word = preg_split("/[\W+]/",$text);

//$text ="Companies like
//    HP, ORACLE and IBM target their platforms for cloud-based environment.
//    IList<T> implements IEnumerable<T>. GoPHP is a PHP5 library.
//";
$words = preg_split("/[\W\d]+/",$text,-1,PREG_SPLIT_NO_EMPTY);
foreach ($words as $word){
    if(ctype_upper($word)){
        $reverseWord = strrev($word);
        if($word==$reverseWord){
            $reverseWord ="";
            for ($i=0 ;$i<strlen($word); $i++) {
                $reverseWord.= $word[$i].$word[$i];
            }
        }
        $pattern =  '/\b'.$word.'\b/';
        $text =  preg_replace($pattern,$reverseWord,$text);
//        echo $reverseWord." ";
    }
}
echo"<p>". htmlspecialchars($text)."</p>";