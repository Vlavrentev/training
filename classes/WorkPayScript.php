<?php

include_once "Table.php";
include_once "WokrPay.php";

$rab1 = new WorkPay("Sasandr Can", "999", [50, 50, 50, 50]);
$rab1->getOtrabotal();
$rab2 = new WorkPay("Whatis Vlad", "999", [15, 15, 30, 40]);
$rab2->getOtrabotal();
$WorkPays = array($rab1, $rab2);
$col1 = 15;
$col2 = 8;
$col3 = 7;
$col4 = 7;


// Заголовок таблицы
echo Table::padRight("Сотрудник", $col1) .
    Table::padLeft("Часы", $col2) .
    Table::padLeft("Ставка", $col3) .
    Table::padLeft("З/п", $col4) . "\n\n";

// Сама таблица
foreach ($WorkPays as $WorkPay) {
    echo Table::padRight($WorkPay->getFio(), $col1) .
        Table::padLeft($WorkPay->getOtrabotal(), $col2) .
        Table::padLeft($WorkPay->getZarabotal(), $col3) .
        Table::padLeft($WorkPay->getRabMoneys(), $col4) . "\n";
}
echo Table::padRight("Итого      ", $col1) .
    Table::padLeft($rab1->getOtrabotal() + $rab2->getOtrabotal(), $col2) .
    Table::padLeft($rab1->getZarabotal() + $rab2->getZarabotal(), $col3) .
    Table::padLeft($rab1->getRabMoneys() + $rab2->getRabMoneys(), $col4);
