<?php
//Для замены банка необходмо передать в функцию другой массив
$homoc = [1.04, 500, 0, "Homocredit"];
$soft = [1.03, 1000, 0, "Softbank"];
$straw = [1.02, 0, 7777, "StrawberryBank"];


function credit($percent, $servicePayment, $FixPayment, $bank)
{
    for ($month = 1, $paymentTotal = 0, $monthlyPayment = 5000, $creditBalance = 40000; $month <= 20; $month++) {

        $creditBalance = ($creditBalance * $percent) + $servicePayment - $monthlyPayment;
        $paymentTotal = $paymentTotal + $monthlyPayment;

        if ($creditBalance < 0) {
            if ($FixPayment != 0) {
                $str = "С меня хватит!\n" . "За " . $month . " месяцев выплачено банку " . $bank . ", всего " . $vsego = round($paymentTotal + $creditBalance, 2) + $FixPayment . " руб. \n";
                $str = $str . "Переплатил - " . $pereplata = $vsego - 40000 . " руб.";
                return $str;
                break;
            } else
                $str = "С меня хватит!\n" . "За " . $month . " месяцев выплачено банку " . $bank . ", всего " . $vsego = round($paymentTotal + $creditBalance, 2) . " руб. \n";
            $str = $str . "Переплатил - " . $pereplata = $vsego - 40000 . " руб.";
            return $str;
            break;
        }
    }
}

echo $itog = credit($percent = $straw[0], $servicePayment = $straw[1], $FixPayment = $straw[2], $bank = $straw[3]);
