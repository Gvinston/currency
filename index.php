<?php

require_once  __DIR__ . '/vendor/autoload.php';

use \Lib\Repository\CurrencyRepository;

$currency = 'EUR/USD';
$currencyRepository = new CurrencyRepository();
$currencyData = $currencyRepository->find($currency);