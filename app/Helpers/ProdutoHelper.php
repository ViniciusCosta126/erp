<?php

namespace App\Helpers;

class ProdutoHelper
{
    public static function formatNumberMoeda($value): string
    {
        $numberFormated = number_format(floatval($value), 2, ',', '.');
        $numberFormated = "R$ $numberFormated";
        return $numberFormated;
    }
}
