<?php

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
    }


}
