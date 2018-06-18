<?php
mb_internal_encoding('utf-8');
echo $str = "А роза упала на лапу Азора";
function funck ($str) {
$str = mb_strtolower ($str = str_replace(" ", "", $str)) . PHP_EOL;
$letters1 = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
unset($letters1[count($letters1) - 1]);
$letters2 = array_values(array_reverse($letters1, true));
if ($letters1 === $letters2)
    {echo " это - Палиндром";}
    else echo " это - не палиндром";
    
}
echo funck ($str);
?>
