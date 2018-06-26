<?php

$namepart= [
        'га',
        'му',
        'ку',
        'ги',
        'рю',
        'ка',
        'ми',
        'ру',
        'су',
        'ги',
        'та',
        'дзу',
        'на',
        'ро',
        'со',
        'за',
        'чи'
    ];

//todo wid - дать читаемое имя переменной и параметру
$wid=rand(1,8);
function nameGenerator ($namepart, $wid) {
 for ($name=[], $i=0; $i <= $wid; $i++){
 $str = implode ([implode ($name=[$namepart[rand(0,16)]])]);
 $string[]=$str;
 }
 return implode ($string);
}
$string = nameGenerator($namepart, $wid);
echo $string ;


