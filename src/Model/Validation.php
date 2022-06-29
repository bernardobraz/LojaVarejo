<?php

namespace APP\Model;

class Validation
{
    public static function validateName(string $name): bool
    {
        return mb_strlen($name) > 2;
    }

    public static function validateNumber(float $number)
    {
        return $number > 0;
    }
    public static function validateCnpj(string $cnpj)
    {
        return $cnpj > 13;
    }
    public static function validatePhone(string $phone)
    {
        return $phone > 10;
    }
    public static function validateZipCode(string $zipCode)
    {
        return $zipCode > 7;
    }
}