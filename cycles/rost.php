<?php

/**
 * Дан рост школьника и рост его одноклассников. Надо найти, сколько человек в классе выше, чем наш герой.
 */

error_reporting(-1);

$anonHeight = 169; /* Рост анона */

/* Рост одноклассников анона */
$classmates = array(
  'Антон'  =>  172,
  'Семен'  =>  165,
  'Лена'  =>  189,
  'Иван'  =>  171,
  'Петр'  =>  182,
  'Сидор'  =>  176,
  'Аня'    =>  180,
  'Таня'  =>  179,
  'Маня'  =>  171
);
function funck ($anonHeight, $classmates) {
/* Перебираем всех одноклассников */
foreach ($classmates as $name => $height) {
    echo "Имя: {$name}, рост: {$height} см. ";
    if ($height>$anonHeight) {
        $overh[$name]=$height;
    echo 'при этом выше анона ' . PHP_EOL;
    } 
    else {
    echo 'при этом ниже анона ' . PHP_EOL;}
    /* Тут надо добавить проверку, выше или ниже этот человек, чем анон,
    и подсчитать число тех, кто выше */
}
$number = count($overh);
echo "В классе {$number} человек выше анона\n";
}
echo funck ($anonHeight, $classmates);

