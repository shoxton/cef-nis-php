<?php

require 'app/entities/Beneficiary.php';

class BeneficiaryRepo
{
    public $driver;

    public function __construct(PersistenceContract $driver)
    {
        $this->driver = $driver;
    }

    public function register(Beneficiary $beneficiary)
    {
        $this->driver->save($beneficiary);

        return $beneficiary;
    }

    public function query($nis)
    {

        $result = $this->driver->findBy('nis', $nis);

        if (!is_null($result)) {
            return new Beneficiary($result['name'], $result['nis']);
        }

        return null;
    }


}
