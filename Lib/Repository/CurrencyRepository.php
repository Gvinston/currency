<?php


namespace Lib\Repository;

use Lib\Repository\CurrencyRepositoryInterface;
use Lib\Currency\Currency;

/**
 * Class CurrencyRepository
 * @package Lib\Repository
 *
 * Используем репозиторий на тот случай, если
 * в дальнейшем будет изменен принцип получения валюты,
 */
class CurrencyRepository implements CurrencyRepositoryInterface
{

    /**
     * @param $currency
     * @return string
     */
    public function find($currency)
    {
        $currencyService = new Currency();
        return $currencyService->getCurrency($currency);
    }
}