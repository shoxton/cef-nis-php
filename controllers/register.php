<?php

require 'persistence/JsonFileDriver.php';
require 'app/entities/BeneficiaryRepo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $errors = [];

    try {
        $beneficiary = new Beneficiary($name);

        $repo = new BeneficiaryRepo(new JsonFileDriver());

        $beneficiary = $repo->register($beneficiary);

    } catch (\Throwable $th) {
        $errors[] = $th->getMessage();
    }

}

require 'views/register.view.php';
