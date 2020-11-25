<?php


namespace Lib\Currency;

use Lib\Currency\CurrencyInterface;

/**
 * Class CurrencyRemote
 * @package Lib\Currency
 *
 * Класс, который получает валюту из внешнего источника
 */
class CurrencyRemote implements CurrencyInterface
{
    /**
     * @param $currency
     * @return string
     */
    public function getCurrency($currency)
    {
        $currencyValue = 'Полученное значение из внешнего источника';
        return $currencyValue;
    }
}