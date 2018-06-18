<?php
class Employee
{
    public $fio;
    public $babosiks;
    public $otrabotal;

    public function __construct($fio, $babosiks)
    {
        $this->fio = $fio;
        $this->babosiks = $babosiks;
    }


    public function getRabHours()
    {
        return array_sum($this->otrabotal);
    }

    /**
     * @return mixed
     */
    public function getFio()
    {
        return $this->fio;
    }
    public function getBabosiks()
    {
        return $this->babosiks;
    }
    public function getRabMoneys()
    {
        $otrabotal = $this->getRabHours();
        $vsegonaedu = $otrabotal * $this->babosiks;
        return $vsegonaedu;
    }

    public static function  padLeft($string, $length)
    {
        if (!sprintf($string) < sprintf($length)){
            return $string = $string . str_repeat(" ", $length);

        }
        return $string;
    }
    public static function padRight($string, $length)
    {
        if (!sprintf($string) < sprintf($length)){
            return $string = $string . str_repeat(" ", $length);

        }
        return $string;
    }

}

$rab1 = new Employee("Sasandr San", "999");
/**$rab1 ->fio = "Sasandr Canya";
$rab1 ->babosiks = "999";*/
$rab1 ->otrabotal = array(50, 50, 50, 50);

$rab2 = new Employee("Vladis Love","999");
/**$rab2 ->fio = "Whatislove Vlavr";
$rab2 ->babosiks = "1999";*/
$rab2 ->otrabotal = array(15, 15, 30, 40);

$employees = array($rab1, $rab2);
/**
echo 'Perviy rab '.$rab1->getFio() .' otrabotal ' . $rab1->getRabHours() .' chasov. '. ' Poluchil za eto '.$rab1->getRabMoneys().'.';
echo 'Vtoroy rab '. $rab2->getFio() .' otrabotal ' . $rab2->getRabHours() .' chasov. '. ' Poluchil za eto '.$rab2->getRabMoneys().'.';
 */

$col1 = 15;
$col2 = 8;
$col3 = 7;
$col4 = 7;

// Заголовок таблицы
echo Employee::padRight("Сотрудник", $col1) .
    Employee::padLeft("Часы", $col2) .
    Employee::padLeft("Ставка", $col3) .
    Employee::padLeft("З/п", $col4) . "\n\n";

// Сама таблица
foreach ($employees as $employee) {
    echo Employee::padRight($employee->fio, $col1) .
        Employee::padLeft($employee->getRabHours(), $col2) .
        Employee::padLeft($employee->babosiks, $col3) .
        Employee::padLeft($employee->getRabMoneys(), $col4) . "\n";
}
echo Employee::padRight("Итого      ", $col1) .
    Employee::padLeft($rab1->getRabHours()+$rab2->getRabHours(), $col2) .
    Employee::padLeft($rab1->getBabosiks()+$rab2->getBabosiks(), $col3) .
    Employee::padLeft($rab1->getRabMoneys()+$rab2->getRabMoneys(), $col4);
