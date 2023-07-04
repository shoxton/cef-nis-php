<?php

require 'persistence/JsonFileDriver.php';
require 'app/entities/Beneficiary.php';
require 'app/entities/BeneficiaryRepo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    $beneficiary = new Beneficiary($name);

    $repo = new BeneficiaryRepo(new JsonFileDriver());

    $repo->register($beneficiary);
}

require 'views/register.view.php';
