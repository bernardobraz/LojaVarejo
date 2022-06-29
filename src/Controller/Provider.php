<?php

namespace APP\Controller;

use APP\Model\Provider;
use APP\Model\Address;
use APP\Utils\Redirect;
use APP\Model\Validation;

require '../../vendor/autoload.php';

if (empty($_POST)) {
    session_start();

    Redirect::redirect(
        type: 'error',
        message: 'Requisição inválida!!!'
    );
}

$publicPlace = $_POST["publicPlace"];
$numberOfStreet = $_POST["numberOfStreet"];
$complement = $_POST["complement"];
$neighborhood = $_POST["neighborhood"];
$city = $_POST["city"];
$zipCode = $_POST["zipCode"];
$cnpj = $_POST["cnpj"];
$providerName = $_POST["name"];
$phone = $_POST["phone"];

$error = array();

// array_unshift -> Adicionar no início do array
// array_push -> Adicionar no final do array

// array_shift -> Remove do início do array
// array_pop -> Remove do final do array

if (!Validation::validateCnpj($cnpj)) {
    array_push($error, "O cnpj deve conter no mínimo 14 caracteres");
}
if (!Validation::validatePhone($phone)) {
    array_push($error, "O número deve conter no mínimo 11 números");
}
if (!Validation::validateZipCode($zipCode)) {
    array_push($error, "O cep deve conter no mínimo 8 digitos");
}
if ($error) {
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
} else {
    $provider = new Provider(
        name: $providerName,
        cnpj: $cnpj,
        phone: $phone,
        address: new Address(
            publicPlace: $publicPlace,
            numberOfStreet: $numberOfStreet,
            complement: $complement,
            neighborhood: $neighborhood,
            city: $city,
            zipCode: $zipCode
        )
    );
    Redirect::redirect(
        message: "O fornecededor $providerName foi cadastrado com sucesso!!!"
    );
}
