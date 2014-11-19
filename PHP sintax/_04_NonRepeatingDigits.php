<?php
$n =145;
if($n<102) echo "no";
for ($i=102 ;$i<=$n; $i++) {
    if($n<102){
        echo "no";
        break;
    }
    if(count($i)>=4)break;
    $firstDigit = (int)($i / 100);
    $secondDigit = (int)(($i / 10) % 10);
    $thirdDigit = (int)($i % 10);

    if($firstDigit!=$secondDigit && $firstDigit!=$thirdDigit &&$secondDigit!=$thirdDigit)
        echo "$i, ";
}

?>