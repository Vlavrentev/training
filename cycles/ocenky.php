<?php
$rates = [3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3];

/* Посчитаем среднюю оценку. Для этого найдем сумму всех оценок, и поделим
ее на их количество */
function testResults($rates)
{

    $ratesSum = array_sum($rates);
    $ratesCount = count($rates);; /* Количество оценок — эту строчку надо дописать самому */
    $averageRate = $ratesSum / $ratesCount; /* Средняя оценка — допиши сам */
    $str = "Анону поставили {$ratesCount} оценок, их сумма = {$ratesSum}\n" . 'Средний балл — ' . round($averageRate, 2);
    return $str;
}

echo testResults($rates);
?>
