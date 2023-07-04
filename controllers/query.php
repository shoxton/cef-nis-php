<?php

require 'app/entities/BeneficiaryRepo.php';
require 'persistence/JsonFileDriver.php';

$nis = $_GET['nis'];
$errors = [];

try {

    $repo = new BeneficiaryRepo(new JsonFileDriver());

    $beneficiary = $repo->query($nis);

} catch (\Throwable $th) {
    $errors[] = $th->getMessage();
}

require 'views/query.view.php';
