<?php
class WorkPay
{
    private $fio;
    private $zarabotal;
    private $otrabotal;

    public function __construct($fio, $zarabotal, $otrabotal)
    {
        $this->fio = $fio;
        $this->zarabotal = $zarabotal;
        $this->otrabotal =$otrabotal;
    }

    public function getFio()
    {
        return $this->fio;
    }
    public function getZarabotal()
    {
        return $this->zarabotal;
    }
    public function getOtrabotal()
    {
        return array_sum($this->otrabotal);
    }
    public function getRabMoneys()
    {
        $otrabotal = $this->getOtrabotal();
        $vsegonaedu = $otrabotal * $this->getZarabotal();
        return $vsegonaedu;
    }
}