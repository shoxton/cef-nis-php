<?php

class Beneficiary
{
    public $name;
    public $nis;

    public function __construct($name, $nis = null)
    {

        if (strlen(trim($name)) === 0) {
            throw new Exception('Name is required.');
        }

        $this->name = $name;
        $this->nis = $nis ?? $this->generateNIS();
    }

    private function generateNIS()
    {
        // todo: implementar para gerar apenas valores unicos
        return (string) mt_rand(10000000000, 99999999999);
    }


}
