<?php

class Credit
{
    private $percent;
    private $servicePayment;
    private $FixPayment;
    private $bank;

    public function __construct($percent, $servicePayment, $FixPayment, $bank)
    {
        $this->percent = $percent;
        $this->servicePayment = $servicePayment;
        $this->FixPayment = $FixPayment;
        $this->bank = $bank;

    }


    public function getPercent()
    {
        return $this->percent;
    }


    public function getServicePayment()
    {
        return $this->servicePayment;
    }


    public function getFixPayment()
    {
        return $this->FixPayment;
    }

    public function getBank()
    {
        return $this->bank;
    }

    public static function creditCalculate($bankInf)
    {
        /**
         * @param Credit $bankInf
         */
        for ($month = 1, $paymentTotal = 0, $monthlyPayment = 5000, $creditBalance = 40000; $month <= 20; $month++) {

            $creditBalance = ($creditBalance * $bankInf->getPercent()) + $bankInf->getServicePayment() - $monthlyPayment;
            $paymentTotal = $paymentTotal + $monthlyPayment;

            if ($creditBalance < 0) {
                if ($bankInf->getFixPayment() != 0) {
                    $str = "С меня хватит!\n" . "За " . $month . " месяцев выплачено банку " . $bankInf->getBank() . ", всего " . $only = round($paymentTotal + $creditBalance, 2) + $bankInf->getFixPayment() . " руб. \n";
                    $str = $str . "Переплатил - " . $pereplata = $only - 40000 . " руб.";
                    return $str;
                    break;
                } else
                    $str = "С меня хватит!\n" . "За " . $month . " месяцев выплачено банку " . $bankInf->getBank() . ", всего " . $only = round($paymentTotal + $creditBalance, 2) . " руб. \n";
                $str = $str . "Переплатил - " . $pereplata = $only - 40000 . " руб.";
                return $str;
                break;
            }
        }
    }
}

$bankInf1 = new Credit (1.04, 500, 0, "Homocredit");
$bankInf2 = new Credit (1.03, 1000, 0, "Softbank");
$bankInf3 = new Credit (1.02, 0, 7777, "StrawberryBank");

echo $results = Credit::creditCalculate($bankInf1) . PHP_EOL;
echo $results = Credit::creditCalculate($bankInf2) . PHP_EOL;
echo $results = Credit::creditCalculate($bankInf3) . PHP_EOL;
