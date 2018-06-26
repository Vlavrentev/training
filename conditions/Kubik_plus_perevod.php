<?php

$rub = 620;
$usd = 62;
$hum = rand(1, 6) + rand(1, 6);
$comp = rand(1, 6) + rand(1, 6);
function coubAndcourse($rub, $usd, $hum, $comp)
{
    $cours = $rub . ' рублей это ' . $rub / $usd . ' долларов ' . PHP_EOL .
        'Случайное число на кубике - ' . rand(1, 6) . PHP_EOL;

    if ($hum > $comp) {
        $winner = ('Человек выйграл комп со счетом ' . $hum . ' - ' . $comp);
    } elseif ($hum < $comp) {
        $winner = ('Человек проиграл компу со счетом ' . $hum . ' - ' . $comp);
    } else {
        $winner = ("Ничья: $hum - $comp");
    }
    return $cours . PHP_EOL . $winner;
}

echo coubAndcourse($rub, $usd, $hum, $comp);
