<?php

$namepart= [
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
    
$wid=rand(1,8);
function funck ($namepart, $wid) {
 for ($name=[], $i=0; $i <= $wid; $i++){
    echo implode ($name=[$namepart[rand(0,14)]]);
    
 }
}
echo funck($namepart, $wid);