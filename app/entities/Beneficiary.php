<?php

class Beneficiary
{
    public $name;
    public $nis;

    public function __construct($name)
    {
        $this->name = $name;
        $this->nis = $this->generateNIS();
    }

    private function generateNIS()
    {
        return mt_rand(10000000000, 99999999999);
    }


}
