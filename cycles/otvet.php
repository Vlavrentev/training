<?php
$answers = ['Возможно', 'Но это не точно', 'Да нет наверное', 'Да', 'Нет', 'В любом случае'];
$oracul = rand(1, 5);
function oracul($answers, $oracul)
{
    foreach ($answers as $num => $ans) {
        if ($oracul == $num) {
            $str = 'Ответ номер ' . ($oracul + 1) . ' - ' . $ans . PHP_EOL;
            break;
        }
    }
    return $str;
}

echo oracul($answers, $oracul);
?>
