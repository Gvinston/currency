<?php


namespace Lib\Currency;

use Lib\Currency\CurrencyInterface;
use Lib\Currency\CurrencyRemote;
use Lib\Cache\Cache;


/**
 * Class Currency
 * @package Lib\Currency
 *
 * Используем паттерн прокси, чтобы каждый раз не обращаться
 * к внешнему источнику
 *
 * Здесь будем сохранять и в бд, и в кеш
 */
class Currency implements CurrencyInterface
{
    /**
     * @var \Lib\Currency\CurrencyRemote
     */
    private $currencyRemote;

    /**
     * Currency constructor.
     */
    public function __construct()
    {
        $this->currencyRemote = new CurrencyRemote();
    }

    /**
     * @param $currency
     * @return string
     */
    public function getCurrency($currency)
    {
        $currencyData = Cache::remember(
            $currency,
            $this->getCurrencyFromBd($currency)
        );

        if(empty($currencyData)){
            $currencyData = $this->currencyRemote->getCurrency($currency);
            if(!empty($currencyData)){
                $this->setCurrencyToBd($currencyData);

                Cache::remember(
                    $currency,
                    $currencyData
                );
            }
        }

        return $currencyData ?? 'Валюта не найдена';
    }

    /**
     * @param $currency
     */
    private function getCurrencyFromBd($currency)
    {

    }

    /**
     * @param $currencyData
     */
    private function setCurrencyToBd($currencyData)
    {

    }
}